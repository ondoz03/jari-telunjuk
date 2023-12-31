<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Str;
use DB;
class AuthorController extends Controller
{
    public function author(Request $request, $slug)
    {


        $author =  Str::replace('-', ' ', $slug);
        $author = explode(" 0 ", $author);
        // dd($author);
        $buku = Buku::with(['detail_buku', 'kategori', 'reviews']);
        foreach ($author as $key => $value) {
            // code...
            $buku = $buku->where(DB::raw('lower(penulis)'), 'like', '%' . strtolower($value) . '%');
        }
            // ->where('penulis', 'like', '%' . $author . '%')
        $buku = $buku->get();
        if (empty($buku->toArray())) {
            abort(404);
        }
        $author_name = implode(" ", $author);

        return view('author.profile', compact('buku', 'author_name'));
    }
}
