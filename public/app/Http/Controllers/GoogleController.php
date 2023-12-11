<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\UserDetails;
use App\Models\UserKategori;
use App\Models\UserRecommendation;
use App\Models\Buku;
use App\Models\Review;
use App\Models\UserWantRead;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Auth;
use Illuminate\Support\Facades\Session;

class GoogleController extends Controller
{
    public function redirectToGoogle(Request $request){
        $inputData = $request->all();

        Session::put('redirect_back', url()->previous());

        if($request->has('type')){
            Session::put('param', json_encode($inputData));
        }

        return Socialite::driver('google')->redirect();
    }
    public function callback(Request $request){

        $user = Socialite::driver('google')->user();

        $find_user = User::where('email',$user->getEmail())->first();
        if ($find_user) {
            $find_user->avatar = $user->getAvatar();
            $find_user->save();
            Auth::login($find_user);

            return $this->actionDetailBook();

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

            if(!empty(session('redirect_profile'))) {
                return redirect()->route('user.profile');
            } else {
                return redirect(session('redirect_back'));
            }
        }
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function actionDetailBook()
    {
        if (!empty(session('redirect_profile'))) {
            return redirect()->route('user.profile');
        } else {
            if (!empty(session('param'))) {
                $data = json_decode(session('param'), true);
                $type = $data['type'];
                $buku = $data['buku'];
                if ($type === 'rating') {
                    $star = $data['star'];

                    Review::updateorcreate([
                        'user_id' => Auth::user()->id,
                        'buku_id' => $buku
                    ], [
                        'star' => $star
                    ]);
                } else if ($type === "want_to_read") {
                    UserWantRead::updateorcreate([
                        'user_id' => Auth::user()->id,
                        'buku_id' => $buku,
                    ], [
                        'status' => '1'
                    ]);
                } else if ($type === "currently_to_read") {
                    UserWantRead::updateorcreate([
                        'user_id' => Auth::user()->id,
                        'buku_id' => $buku,
                    ], [
                        'status' => '2'
                    ]);
                }
            }
            return redirect(session('redirect_back'));
        }
    }


}
