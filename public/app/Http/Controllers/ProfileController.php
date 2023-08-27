<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetails;
use App\Models\UserRecommendation;
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
        $user = User::with('user_recommendation')->find(Auth::user()->id);
        return view('user.profile', compact('user'));
    }
}
