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
        $data = Kategori::inRandomOrder()->limit(4)->get();
        return view('category.index', compact('data'));
    }

}
