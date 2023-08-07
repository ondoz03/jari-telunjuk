<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index($slug, Request $request)
    {
        if (empty($request->search)) {
            $buku = Buku::with('media')->whereHas('detail_buku.kategori', function ($q) use ($slug) {
                $q->where('slug', $slug);
            })->with('detail_buku.kategori')->paginate(12);

            $kategori = Kategori::where('slug', $slug)->first();

            return view('buku', compact('buku', 'slug', 'kategori'));
        } else {
            $buku = Buku::where('judul', 'like', "%" . $request->search . "%")->paginate(5)->withQueryString();
            // return $buku;
            return view('result-search', compact('buku', 'request'));
        }
    }

    public function buku($slug,)
    {
        // return $request;

        $buku = Buku::with('media')->whereHas('detail_buku.kategori', function ($q) use ($slug) {
            $q->where('slug', $slug);
        })->with('detail_buku.kategori')->paginate(12);

        return $buku;
    }

    public function detail($category, $slug, Request $request)
    {
        return $request;

        $buku = Buku::where('slug', $slug)->with('detail_buku.kategori')->first();
        return view('detail-buku', compact('buku'));
    }

    public function search(Request $request)
    {

        $buku = Buku::where('judul', 'like', "%" . $request->search . "%")->paginate(5);
        // return $buku;
        return view('result-search', compact('buku', 'request'));
    }
}
