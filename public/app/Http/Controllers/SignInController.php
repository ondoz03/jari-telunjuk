<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\MessageBag;
use Auth;

class SignInController extends Controller
{
    public function __construct()
    {   
        if (Auth::user()) {   // Check is user logged in
            return redirect()->route('user.profile');
        }
    }
    public function index(Request $request)
    {
        return view('sign-in');
    }
    public function login(Request $request)
    {   
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $find_user = User::where('email',$request->name)
                        ->where('password',bcrypt($request->password))
                        ->first();
        if ($find_user) {
            Auth::login($find_user);
            return redirect()->intended('user');
        } else {
            return redirect()->intended('home');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect()->route('home');
    }
}
