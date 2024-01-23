<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use App\Models\ChallengeGoal;
use App\Models\Review;
use App\Models\UserWantRead;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ChallengeController extends Controller
{

    public function index()
    {
        if (empty(Auth::user())) {
            return redirect()->route('home');
        }

        $buku = self::list_book_reading();

        $user_id = auth()->user()->id;

        $buku_dashboard = ChallengeGoal::where('user_id', $user_id)->get();

        $total_book_read = UserWantRead::where('user_id', $user_id)->whereHas('challenge', function ($q) {
            $q->where('is_status', 'read');
        })->whereHas('buku.reviews', function ($q) use ($user_id) {
            $q->where('user_id', $user_id);
        })->count();

        $total_page_read =  UserWantRead::where('user_id', $user_id)
            ->whereHas('challenge')
            ->withSum('challenge', 'page_start')
            ->get()->sum('challenge_sum_page_start');

        $book = !empty($buku_dashboard[0]['target_challenge']) ? $buku_dashboard[0]['target_challenge'] : 0;
        $page = !empty($buku_dashboard[1]['target_challenge']) ? $buku_dashboard[1]['target_challenge'] : 0;

        if ($book > 0 && $page > 0) {
            $persen_book = ($total_book_read /  $book) * 100;
            $persen_page = ($total_page_read / $page) * 100;
        } else {
            $persen_book = 0;
            $persen_page = 0;
        }

        if ($persen_page >= 100) {
            $persen_page = 100;
        }

        if ($persen_book >= 100) {
            $persen_book = 100;
        }


        if (count($buku_dashboard) > 1) {
            return view('challenge.index', compact('buku', 'buku_dashboard', 'total_book_read', 'total_page_read', 'persen_book', 'persen_page'));
        } else {
            return view('challenge.first-input');
        }
    }

    public function list_book_reading()
    {
        $user_id = auth()->user()->id;
        $data = UserWantRead::where('user_id', $user_id)->with(['buku', 'challenge'])->get();

        return $data;
    }

    public function store(Request $request)
    {


        $dateStringS = $request->date_started;
        $carbonDateS = Carbon::createFromFormat('d/m/Y', $dateStringS);

        $dateStringN = $request->date_ended;
        $carbonDateN = Carbon::createFromFormat('d/m/Y', $dateStringN);

        if ($request->page_started > $request->page_ended) {
            $status = 'read';
            $page_start = $request->page_ended;
        } else {
            $status = $request->status;
            if ($request->status === 'read') {
                $page_start = $request->page_ended;

                if ($request->review == '' || $request->rating == null || $request->rating == '') {
                    $status = 'reviewing';
                }
                $getBuku = UserWantRead::where('id', $request->id_want_read)->first()->update([
                    'status' => '0'
                ]);
            } else if ($request->status === 'reading') {
                $status = 'reading';
                $page_start = $request->page_started;

                $getBuku = UserWantRead::where('id', $request->id_want_read)->first()->update([
                    'status' => '2'
                ]);
            } else if ($request->status === 'to_read') {
                $getBuku = UserWantRead::where('id', $request->id_want_read)->first()->update([
                    'status' => '1'
                ]);
            } else {
                $page_start = $request->page_started;
            }
        }

        if ($request->status === 'to_read') {
            $page_start = 0;
        }

        Challenge::updateorcreate([
            'user_want_read_id' => $request->id_want_read,
        ], [
            'start_date' => $carbonDateS->format('Y-m-d'),
            'end_date' => $carbonDateN->format('Y-m-d'),
            'page_start' => $page_start,
            'page_end' => $request->page_ended,
            'is_status' => $status,
        ]);

        if ($request->review != '' && $request->rating != null) {
            $getBuku = UserWantRead::where('id', $request->id_want_read)->first();

            Review::updateorcreate([
                'user_id' => auth()->user()->id,
                'buku_id' => $getBuku->buku_id
            ], [
                'star' => $request->rating,
                'review' => $request->review
            ]);
        }


        return true;
    }

    public function store_dashboard(Request $request, $type = 1)
    {

        $arr = [
            [
                'name' => 'read_book',
            ], [
                'name' => 'page_book',
            ],
        ];

        foreach ($arr as $key => $value) {

            ChallengeGoal::updateorcreate(
                [
                    'name' => $value['name'],
                    'user_id' => auth()->user()->id,
                ],
                [
                    'target_challenge' => $request->target_challange[$key]
                ]
            );
        }

        if ($type == 1) {
            return true;
        } else {
            return back();
        }
    }
}
