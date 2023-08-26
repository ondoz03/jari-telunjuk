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

class SignUpController extends Controller
{
    public function __construct()
    {   
        if (Auth::user()) {   // Check is user logged in
            return redirect()->route('user.profile');
        }
    }
    public function index(Request $request)
    {
        return view('sign-up');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'password' => 'required',
        ]);

        $find_user = User::where('email',$request->name)->first();
        if ($find_user) {
            Auth::login($find_user);
            return redirect()->intended('user');
        } else {
            $new_user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
            Auth::login($new_user);
            return redirect()->intended('user');
        }
    }
}
