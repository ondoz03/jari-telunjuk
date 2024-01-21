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
                })->with('challenge');
            }])->paginate();

            $title = 'Year';
        } else if ($request->type == '3month') {
            $getLeaderBoard = User::wherehas('user_want_read.challenge', function ($q) use ($starting, $threeOfQuarter) {
                $q->where('is_status', 'read')
                    ->whereBetween('end_date', [$starting, $threeOfQuarter]);
            })->with(['user_want_read' => function ($q)  use ($starting, $threeOfQuarter) {
                $q->whereHas('challenge', function ($q) use ($starting, $threeOfQuarter) {
                    $q->where('is_status', 'read')->whereBetween('end_date', [$starting, $threeOfQuarter]);
                })->with('challenge');
            }])->paginate();
            $title = '3 Month';
        } else if ($request->type == '6month') {
            $getLeaderBoard = User::wherehas('user_want_read.challenge', function ($q) use ($starting, $sixOfQuarter) {
                $q->where('is_status', 'read')
                    ->whereBetween('end_date', [$starting, $sixOfQuarter]);
            })->with(['user_want_read' => function ($q)  use ($starting, $sixOfQuarter) {
                $q->whereHas('challenge', function ($q) use ($starting, $sixOfQuarter) {
                    $q->where('is_status', 'read')->whereBetween('end_date', [$starting, $sixOfQuarter]);
                })->with('challenge');
            }])->paginate();
            $title = '6 Month';
        } else {
            $getLeaderBoard = User::wherehas('user_want_read.challenge', function ($q) use ($request) {
                $q->where('is_status', 'read')
                    ->whereMonth('end_date', '=', date('m'));
            })->with(['user_want_read' => function ($q)  use ($request) {
                $q->whereHas('challenge', function ($q) use ($request) {
                    $q->where('is_status', 'read')->whereMonth('end_date', '=', date('m'));
                })->with('challenge');
            }])->paginate();

            $title = 'This Month';
        }

        $filter = $request->type;


        return view('leaderboard.index', compact('getLeaderBoard', 'filter', 'title'));
    }
}
