<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index($slug)
    {
        $buku = Buku::with('media')->whereHas('detail_buku.kategori', function ($q) use ($slug) {
            $q->where('slug', $slug);
        })->with('detail_buku.kategori')->paginate(12);

        return view('buku', compact('buku'));
    }

    public function detail($slug)
    {
        $buku = Buku::where('slug', $slug)->with('detail_buku.kategori')->first();
        return view('detail-buku', compact('buku'));
    }
}
