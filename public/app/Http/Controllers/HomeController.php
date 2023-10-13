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

class HomeController extends Controller
{

    public function index()
    {
        // $buku = Buku::find();

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
}
