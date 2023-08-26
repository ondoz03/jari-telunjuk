<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetails;
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
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }
}
