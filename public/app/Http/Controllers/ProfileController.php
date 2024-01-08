<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetails;
use App\Models\UserKategori;
use App\Models\UserRecommendation;
use App\Models\UserWantRead;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class ProfileController extends Controller
{
    public function __construct()
    {
        if (empty(Auth::user())) {   // Check is user logged in
            return redirect()->route('home');
        }
    }

    public function index()
    {
        if (empty(Auth::user())) {   // Check is user logged in
            return redirect()->route('home');
        }


        if (count(Auth::user()->user_recommendation) == 0) {

            if (!empty(json_decode(session('category_session')))) {
                foreach (json_decode(session('category_session')) as $key => $value) {
                    UserKategori::create([
                        'user_id' => Auth::user()->id,
                        'kategori_id' => $value
                    ]);
                }
            }

            if (!empty(json_decode(session('selected_book_session')))) {
                foreach (json_decode(session('selected_book_session')) as $key => $value) {
                    UserRecommendation::create([
                        'user_id' => Auth::user()->id,
                        'buku_id' => $value
                    ]);
                }
            }
        }

        $user = User::with('user_recommendation', 'user_want_read')->find(Auth::user()->id);


        return view('user.profile', compact('user'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return back();
    }

    public function setWantToRead(Request $request)
    {
        if (!empty($request->buku_id) && !empty(Auth::user())) {
            if ($request->type == 'add') {
                UserWantRead::updateorcreate([
                    'user_id' => Auth::user()->id,
                    'buku_id' => $request->buku_id,
                ], [
                    'status' => '1'
                ]);
                return true;
            } else if ($request->type == 'delete') {
                UserWantRead::where('user_id', Auth::user()->id)
                    ->where('buku_id', $request->buku_id)->update([
                        'status' => '0'
                    ]);
                $countWantRead =  count(auth()->user()->user_want_read->where('status', '2'));
                return $countWantRead;
            } else if ($request->type == 'update') {
                UserWantRead::updateorcreate([
                    'user_id' => Auth::user()->id,
                    'buku_id' => $request->buku_id,
                ], [
                    'status' => '2'
                ]);

                $countWantRead =  count(auth()->user()->user_want_read->where('status', '2'));
                return $countWantRead;
            }
        }
        return false;
    }

    public function reviewBook(Request $request)
    {
        Review::updateOrCreate([
            'user_id' => Auth::user()->id,
            'buku_id' => $request->buku_id
        ], [
            'star' => $request->star
        ]);

        return true;
    }
}
