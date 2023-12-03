<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\BukuKategori;
use App\Models\User;
use Auth;
use mysql_xdevapi\Result;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $data = Kategori::inRandomOrder()->limit(4)->get();
        // $count = Kategori::withCount('buku')->orderBy('buku_count', 'desc')->limit(10)->get();
        // dd($count);

        $count = BukuKategori::with('kategori')->groupBy('kategori_id')
                ->selectRaw('count(id) as total, kategori_id')
                ->limit(10)
                ->orderBy('total', 'desc')
                ->get();
        return view('category.index', compact('data', 'count'));
    }

}
