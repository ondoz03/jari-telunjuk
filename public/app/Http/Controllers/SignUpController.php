<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetails;
use App\Models\UserKategori;
use App\Models\UserRecommendation;
use App\Models\Buku;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\MessageBag;
use Auth;
use Session;

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
            if(session('category_session') && !empty(json_decode(session('category_session')))){
                foreach (json_decode(session('category_session')) as $key => $value) {
                    UserKategori::create([
                        'user_id' => Auth::user()->id,
                        'kategori_id' => $value
                    ]);
                }
                $category_session = json_decode(session('category_session'));
                $buku = Buku::whereHas('detail_buku.kategori', function ($q) use ($category_session) {
                    $q->whereIn('id', $category_session);
                })
                ->inRandomOrder()
                ->limit(1)
                ->first();
                if (!empty($buku)) {
                    UserRecommendation::create([
                        'user_id' => Auth::user()->id,
                        'buku_id' => $buku->id
                    ]);
                }
            }
        }
        return redirect()->intended('user');
    }

    public function setSession(Request $request){
        Session::put('category_session', $request->category_session);
        return Session::all();
    }
}
