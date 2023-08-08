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
        $buku = Cache::remember('key-books', 3, function () use ($request) {
            return Buku::search($request->search)->query(function ($builder) {
                $builder->with(['detail_buku.kategori', 'media']);
            })->orderBy('id', 'desc')->paginate(12);
        });
        $kategori = Kategori::all();
        return view('admin.buku.index', compact('buku', 'kategori'));
    }

    public function search(Request $request)
    {
        $buku = buku::search($request->search)->query(function ($builder) {
            $builder->with(['detail_buku.kategori', 'media']);
        })->orderBy('id', 'desc')->paginate(12);

        $kategori = Kategori::all();

        return view('admin.buku.index', compact('buku', 'kategori'));
    }


    public function store(Request $request)
    {
        $buku = Buku::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
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
        } else {
            return false;
        }
    }

    public function edit($uuid)
    {
        $buku = Buku::where('uuid', $uuid)->with(['detail_buku.kategori', 'media'])->first();
        return response()->json($buku);
    }

    public function update(Request $request, $uuid)
    {

        $buku = Buku::where('uuid', $uuid)->firstorFail();

        $buku->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
        ]);

        $buku->detail_buku()->update([
            'tgl_rilis' => $request->tgl_rilis,
            'bahasa' => $request->bahasa,
            'penerbit' => $request->penerbit,
            'negara' => $request->negara,
            'jumlah_halaman' => $request->jumlah_halaman,
            'jumlah_buku' => $request->jumlah_buku,
            'description' => $request->description,
            'kategori_id' => $request->kategori

        ]);

        if ($request->hasFile('image')) {
            $buku->clearMediaCollection('default');
            $buku->addMediaFromRequest('image')->toMediaCollection('default');
        };

        return back();
    }

    public function destroy($uuid)
    {
        $buku = Buku::where('uuid', $uuid)->FirstorFail();
        $buku->delete();
    }
}
