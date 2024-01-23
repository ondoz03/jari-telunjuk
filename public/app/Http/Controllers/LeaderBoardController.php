<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LeaderBoardController extends Controller
{
    public function index(Request $request)
    {

        $years = date('Y');
        $starting = date('Y-m-d',  strtotime($years . '-' . '01' . '-' . '01'));
        $threeOfQuarter = date('Y-m-d', strtotime(Carbon::create($years, 4, 30, 0, 0, 0)->startOfQuarter()->subDay()));
        $sixOfQuarter = date('Y-m-d', strtotime(Carbon::create($years, 4, 30, 0, 0, 0)->endOfQuarter()));


        if ($request->type == '12month') {
            $getLeaderBoard = User::wherehas('user_want_read.challenge', function ($q) use ($years) {
                $q->where('is_status', 'read')
                    ->whereYear('end_date', $years);
            })->with(['user_want_read' => function ($q)  use ($years) {
                $q->whereHas('challenge', function ($q) use ($years) {
                    $q->where('is_status', 'read')->whereYear('end_date', $years);
                })->with('challenge')->withSum('challenge', 'page_start')->whereHas('buku.reviews')->with('buku.reviews');
            }])->where('join_leaderboard', '1')->paginate();

            $title = 'Year';
        } else if ($request->type == '3month') {
            $getLeaderBoard = User::wherehas('user_want_read.challenge', function ($q) use ($starting, $threeOfQuarter) {
                $q->where('is_status', 'read')
                    ->whereBetween('end_date', [$starting, $threeOfQuarter]);
            })->with(['user_want_read' => function ($q)  use ($starting, $threeOfQuarter) {
                $q->whereHas('challenge', function ($q) use ($starting, $threeOfQuarter) {
                    $q->where('is_status', 'read')->whereBetween('end_date', [$starting, $threeOfQuarter]);
                })->with('challenge')->withSum('challenge', 'page_start');
            }])->where('join_leaderboard', '1')->paginate()->whereHas('buku.reviews')->with('buku.reviews');
            $title = '3 Month';
        } else if ($request->type == '6month') {
            $getLeaderBoard = User::wherehas('user_want_read.challenge', function ($q) use ($starting, $sixOfQuarter) {
                $q->where('is_status', 'read')
                    ->whereBetween('end_date', [$starting, $sixOfQuarter]);
            })->with(['user_want_read' => function ($q)  use ($starting, $sixOfQuarter) {
                $q->whereHas('challenge', function ($q) use ($starting, $sixOfQuarter) {
                    $q->where('is_status', 'read')->whereBetween('end_date', [$starting, $sixOfQuarter]);
                })->with('challenge')->withSum('challenge', 'page_start')->whereHas('buku.reviews')->with('buku.reviews');
            }])->where('join_leaderboard', '1')->paginate();
            $title = '6 Month';
        } else {
            $getLeaderBoard = User::wherehas('user_want_read.challenge', function ($que) use ($request) {
                $que->where('is_status', 'read')
                    ->whereMonth('end_date', '=', date('m'));
            })->with(['user_want_read' => function ($q) {
                $q->whereHas('challenge', function ($q) {
                    $q->where('is_status', 'read')->whereMonth('end_date', '=', date('m'));
                })->with('challenge')->withSum('challenge', 'page_start')->whereHas('buku.reviews')->with('buku.reviews');
            }])->where('join_leaderboard', '1')->paginate();
            $title = 'This Month';
        }

        $data = self::mapping($getLeaderBoard);

        $filter = $request->type;


        return view('leaderboard.index', compact('data', 'filter', 'title'));
    }

    public function mapping($data)
    {
        $map = $data->map(function ($q) {
            $arr = [
                'name' => $q->name,
                'total_book' => $q->user_want_read->count(),
                'total_page' => $q->user_want_read->sum('challenge_sum_page_start')
            ];

            return $arr;
        });

        return $data->setCollection(collect($map)->sortByDesc('total_page'));
    }

    public function join_leaderboard()
    {
        $user = User::where('id', auth()->user()->id)->first();

        if ($user->join_leaderboard === '0') {
            $leader = '1';
            $status = 'join';
        } else {
            $leader = '0';
            $status = 'unjoin';
        }

        $user->update([
            'join_leaderboard' => $leader
        ]);

        return $status;
    }
}