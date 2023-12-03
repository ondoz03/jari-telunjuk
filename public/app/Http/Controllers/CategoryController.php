<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\User;
use Auth;
use mysql_xdevapi\Result;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $data = Kategori::get();
        // with('buku_limit')
        // with([
        //     'buku_limit' => function($query) {
        //          $query->where('kategori_id', 44);
        //          $query->orWhere('kategori_id', 45);
        //          $query->with('detail_buku');
        //          // $query->take(4)->with('detail_buku');
        //     }
        // ])
        // ->where('id', 120)
        // ->get();
        // dd($data->toArray());
        return view('category.index', compact('data'));
    }

}
