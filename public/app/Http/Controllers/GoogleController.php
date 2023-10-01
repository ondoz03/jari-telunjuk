<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Hash;
use Auth;
class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function callback(){
        $user = Socialite::driver('google')->user();

        $find_user = User::where('email',$user->getEmail())->first();
        if ($find_user) {
            $find_user->avatar = $user->getAvatar();
            $find_user->save();
            Auth::login($find_user);
            return redirect()->intended('user');
        } else {
            $new_user = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'avatar' => $user->getAvatar(),
            ]);
            Auth::login($new_user);
            return redirect()->intended('user');
        }


    }
}
