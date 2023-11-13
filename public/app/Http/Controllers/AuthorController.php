<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class AuthorController extends Controller
{
    public function author(Request $request, $slug){

        $buku = Buku::with(['detail_buku', 'kategori'])
                ->where('penulis', 'like', '%'.$slug.'%')
                ->get();
        // if (empty($author)) {
        //     abort(404);
        // }
        $author_name = $slug;

        return view('author.profile', compact('buku', 'author_name'));
    }
}
