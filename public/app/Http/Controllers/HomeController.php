<?php

namespace App\Http\Controllers;

use App\Helpers\GeneralHelper;
use App\Models\Buku;
use App\Models\PeminjamanItem;
use App\Models\User;
use App\Rules\CurrentPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        // $buku = Buku::whereHas('kategori', function ($q) {
        //     $q->whereIn('slug', ['fiction-literature-ebook', 'nonfiksi', 'history-ebook', 'psychology-ebook', 'romantis']);
        // })->inRandomOrder()
        //     ->limit(1)
        //     ->get();

        // // $buku = Buku::with('kategori')->limit(5)->get();
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
