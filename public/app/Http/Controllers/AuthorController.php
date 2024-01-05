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

        $map = $buku->map(function ($q) {
            return [
                "@type" => "Article",
                "headline" => $q->judul,
                "url" => str_replace('\/', '/', route('detail-buku', ['buku', $q->slug])),
                "datePublished" => $q->detail_buku->tgl_rilis,
                "image" => str_replace('\/', '/', $q->image),
                "author" => [
                    "@id" => "#main-author"
                ]
            ];
        });

        $result = $map->toArray();

        $encodedJson = json_encode($result, JSON_PRETTY_PRINT);
        $decodedJson = json_decode($encodedJson);
        $resultJson = str_replace('\/\/', '//', json_encode($decodedJson, JSON_PRETTY_PRINT));

        return view('author.profile', compact('buku', 'author_name', 'resultJson'));
    }
}
