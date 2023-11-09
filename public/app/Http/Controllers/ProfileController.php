<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetails;
use App\Models\UserRecommendation;
use App\Models\UserWantRead;
use Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        if (empty(Auth::user())) {   // Check is user logged in
            return redirect()->route('home');
        }
    }
    public function index(){
        if (empty(Auth::user())) {   // Check is user logged in
            return redirect()->route('home');
        }
        $user = User::with('user_recommendation','user_want_read')->find(Auth::user()->id);
        return view('user.profile', compact('user'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('home');
    }

    public function setWantToRead(Request $request){
        if(!empty($request->buku_id) && !empty(Auth::user())) {
            if ($request->type == 'add') {
                UserWantRead::create([
                    'user_id' => Auth::user()->id,
                    'buku_id' => $request->buku_id
                ]);
                return true;
            } else if ($request->type == 'delete') {
                UserWantRead::where('user_id', Auth::user()->id)
                    ->where('buku_id', $request->buku_id)->delete();
                return true;
            }
        }
        return false;
    }

    public function reviewBook(Request $request)
    {
        Review::updateOrCreate([
            'user_id' => Auth::user()->id,
            'buku_id' => $request->buku_id
        ],[
            'star' => $request->star
        ]);

        return true;
    }
}
