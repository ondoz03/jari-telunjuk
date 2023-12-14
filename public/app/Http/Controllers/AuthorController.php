<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Str;

class AuthorController extends Controller
{
    public function author(Request $request, $slug)
    {

        $author =  Str::replace('-', ' ', $slug);
        $buku = Buku::with(['detail_buku', 'kategori', 'reviews'])
            ->where('penulis', 'like', '%' . $author . '%')
            ->get();
        // if (empty($author)) {
        //     abort(404);
        // }
        $author_name = $slug;

        return view('author.profile', compact('buku', 'author_name'));
    }
}
