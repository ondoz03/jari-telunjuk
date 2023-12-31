<?php

namespace App\Http\Controllers;

use App\Helpers\GeneralHelper;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\PeminjamanItem;
use App\Models\User;
use App\Rules\CurrentPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Str;
use Session;

class HomeController extends Controller
{

    public function index()
    {
        // $buku = Buku::first();

        // return $buku;

        return view('home');
    }

    public function search(Request $request)
    {
        $buku = Buku::search($request->buku)->query(function ($builder) {
            $builder->with('detail_buku')->with('media');
        })->paginate(12);

        return view('buku', compact('buku'));
        // return $search;
    }

    public function setSession(Request $request)
    {
        if (!empty($request->category_session)) {
            Session::put('category_session', $request->category_session);
        }

        if (!empty($request->selected_book_session)) {
            Session::put('selected_book_session', $request->selected_book_session);
        }

        if (isset($request->redirect_profile)) {
            Session::put('redirect_profile', $request->redirect_profile);
        }

        return Session::all();
    }
}
