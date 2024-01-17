<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
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

        return view('challenge.index', compact('buku'));
    }

    public function list_book_reading()
    {
        $user_id = auth()->user()->id;
        $data = UserWantRead::where('status', '!=', '0')->where('user_id', $user_id)->with(['buku', 'challenge'])->get();

        return $data;
    }

    public function store(Request $request)
    {
        $dateStringS = $request->date_started;
        $carbonDateS = Carbon::createFromFormat('d/m/Y', $dateStringS);

        $dateStringN = $request->date_ended;
        $carbonDateN = Carbon::createFromFormat('d/m/Y', $dateStringN);

        Challenge::updateorcreate([
            'user_want_read_id' => $request->id_want_read,
        ], [
            'start_date' => $carbonDateS->format('Y-m-d'),
            'end_date' => $carbonDateN->format('Y-m-d'),
            'page_start' => $request->page_started,
            'page_end' => $request->page_ended,
            'is_status' => $request->status,
        ]);

        return redirect()->back();
    }
}
