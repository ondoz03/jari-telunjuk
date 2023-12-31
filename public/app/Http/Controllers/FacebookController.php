<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\UserDetails;
use App\Models\UserKategori;
use App\Models\UserRecommendation;
use App\Models\Buku;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Auth;
use Illuminate\Support\Facades\Session;

class FacebookController extends Controller
{
    public function redirectToFacebook(){
        Session::put('redirect_back', url()->previous());
        return Socialite::driver('facebook')->redirect();
    }
    public function callback(){
        $user = Socialite::driver('facebook')->user();

        $find_user = User::where('email',$user->getEmail())->first();
        if ($find_user) {
            $find_user->avatar = $user->getAvatar();
            $find_user->save();
            Auth::login($find_user);

            return redirect()->route('user.profile');
        } else {
            $new_user = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'avatar' => $user->getAvatar(),
            ]);
            Auth::login($new_user);
            if(!empty(json_decode(session('category_session')))){
                foreach (json_decode(session('category_session')) as $key => $value) {
                    UserKategori::create([
                        'user_id' => Auth::user()->id,
                        'kategori_id' => $value
                    ]);
                }
            }
            if(!empty(json_decode(session('selected_book_session')))) {
                foreach (json_decode(session('selected_book_session')) as $key => $value) {
                    UserRecommendation::create([
                        'user_id' => Auth::user()->id,
                        'buku_id' => $value
                    ]);
                }
            }

            return redirect()->route('user.profile');
        }


    }

}
