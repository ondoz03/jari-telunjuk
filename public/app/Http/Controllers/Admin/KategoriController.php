<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::withCount('buku')->orderByDesc('buku_count')->paginate(10);
        return view('admin.kategori.index', compact('kategori'));
    }

    public function search(Request $request)
    {
        $kategori = Kategori::withCount('buku')->orderByDesc('buku_count')->where('name', 'like', "%" . $request->search . "%")->paginate(10);
        return view('admin.kategori.index', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $kategori =  Kategori::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        session()->flash('success','Add Success');
        return back()->withInput();
    }

    public function edit($uuid)
    {
        $kategori = Kategori::where('uuid', $uuid)->FirstorFail();
        return response()->json($kategori);
    }

    public function update(Request $request, $uuid)
    {
        $kategori = Kategori::where('uuid', $uuid)->FirstorFail();
        $kategori->update([
            'name' => $request->name,
            'description' => $request->description
        ]);
        session()->flash('success','Update Success');

        return back();
    }

    public function updateFaq(Request $request, $uuid)
    {
        $kategori = Kategori::where('uuid', $uuid)->FirstorFail();


        $data = [];

        foreach ($request->title as $key => $value) {
            if($value !== null){
                $data[$key]['title'] = $value;
                $data[$key]['description'] = $request['description'][$key];
            }
        }


        $kategori->update([
            'faq' => json_encode($data),
        ]);

        session()->flash('success','Add Success');
        return back();
    }

    public function destroy(Request $request, $uuid)
    {
        $kategori = Kategori::where('uuid', $uuid)->FirstOrFail();
        $kategori->delete();

        session()->flash('success','Delete Success');
        return back();
    }
}
