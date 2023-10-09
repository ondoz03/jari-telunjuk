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
            $kategori = Kategori::where('slug', $slug)->firstorfail();
            $buku = Buku::with('media')->whereHas('kategori', function ($q) use ($slug) {
                $q->where('slug', $slug);
            })->with('kategori')->paginate(12);

            $kategori = Kategori::where('slug', $slug)->first();

            if ($request->ajax()) {
                $view = view('data-buku', compact('buku', 'kategori'))->render();
                return response()->json(['html' => $view]);
            }

            return view('buku', compact('buku', 'slug', 'kategori'));
        } else {
            $buku = Buku::where('judul', 'like', "%" . $request->search . "%")->paginate(5)->withQueryString();
            // return $buku;
            return view('result-search', compact('buku', 'request'));
        }
    }

    public function buku($slug, Request $request)
    {
        $buku = Buku::with('media')->whereHas('kategori', function ($q) use ($slug) {
            $q->where('slug', $slug);
        })->paginate(12);

        if ($request->ajax()) {
            $view = view('data', compact('posts'))->render();

            return response()->json(['html' => $view]);
        }

        return $buku;
    }

    public function detail($category, $slug, Request $request)
    {
        $buku = Buku::where('slug', $slug)->with(['detail_buku', 'kategori'])->firstorfail();

        $kategori = Kategori::where('slug', $category)->first();

        // return $buku;

        return view('detail-buku', compact('buku', 'kategori'));
    }

    public function search(Request $request)
    {

        $buku = Buku::has('kategori')->where('judul', 'like', "%" . $request->search . "%")->paginate(5);

        return view('result-search', compact('buku', 'request'));
    }
}
