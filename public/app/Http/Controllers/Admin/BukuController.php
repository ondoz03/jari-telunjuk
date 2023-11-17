<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Ramsey\Uuid\Uuid;

class BukuController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('category')) {
            $buku = Buku::with(['kategori', 'media'])->whereHas('kategori', function ($q) use ($request) {
                $q->where('slug', $request->category);
            })->with(['kategori'])->orderBy('id', 'desc')->paginate(12);
        } else {
            $buku = Buku::search($request->search)->query(function ($builder) {
                $builder->with(['kategori', 'media']);
            })->orderBy('id', 'desc')->paginate(12);
        }

        $kategori = Kategori::all();


        return view('admin.buku.index', compact('buku', 'kategori'));
    }

    public function search(Request $request)
    {
        $buku = buku::search($request->search)->query(function ($builder) {
            $builder->with(['kategori', 'media']);
        })->orderBy('id', 'desc')->paginate(12);

        $kategori = Kategori::all();

        return view('admin.buku.index', compact('buku', 'kategori'));
    }


    public function store(Request $request)
    {

        $penulis = explode(" ,", $request->penulis);

        return $penulis;

        $buku = Buku::create([
            'judul' => $request->judul,
            'penulis' => $penulis,
        ]);

        if ($buku) {
            $buku->detail_buku()->create([
                'tgl_rilis' => $request->tgl_rilis,
                'bahasa' => $request->bahasa,
                'penerbit' => $request->penerbit,
                'negara' => $request->negara,
                'jumlah_halaman' => $request->jumlah_halaman,
                'jumlah_buku' => $request->jumlah_buku,
                'description' => $request->description,
                'kategori_id' => $request->kategori
            ]);
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $buku->addMediaFromRequest('image')->toMediaCollection('default');
            }
            return back();
            return false;
        }
    }

    public function edit($uuid)
    {
        $buku = Buku::where('uuid', $uuid)->with(['detail_buku', 'kategori', 'media'])->first();
        return response()->json($buku);
    }

    public function update(Request $request, $uuid)
    {

        $penulis = explode(" ,", $request->penulis);
        $buku = Buku::where('uuid', $uuid)->firstorFail();
        $buku->update([
            'judul' => $request->judul,
            'penulis' => $penulis,
        ]);

        $buku->detail_buku()->update([
            'tgl_rilis' => $request->tgl_rilis,
            'bahasa' => $request->bahasa,
            'penerbit' => $request->penerbit,
            'negara' => $request->negara,
            'jumlah_halaman' => $request->jumlah_halaman,
            'jumlah_buku' => $request->jumlah_buku,
            'description' => $request->description,
        ]);

        if ($request->hasFile('image')) {
            $buku->clearMediaCollection('default');
            $buku->addMediaFromRequest('image')->toMediaCollection('default');
        }

        return back();
    }

    public function destroy($uuid)
    {
        $buku = Buku::where('uuid', $uuid)->FirstorFail();
        $buku->delete();
    }
}
