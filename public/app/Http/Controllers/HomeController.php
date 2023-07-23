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
        $topBook = $this->topBook(8);
        $newBook = GeneralHelper::newBook(12);
        return view('home', compact('topBook', 'newBook'));
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
