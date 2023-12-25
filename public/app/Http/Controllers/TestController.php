<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\BukuController;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Peminjaman;
use BendeckDavid\GraphqlClient\Facades\GraphQL;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Str;

class TestController extends Controller
{
    public function index()
    {
        $buku = Buku::where('penulis', '!=', '')->get();

        $filteredBuku = $buku->filter(function ($book) {
            return $book->penulis !== '';
        })->unique('penulis')->values()->map(function ($book) {
            // You can modify the structure of the book or just return it as is
            return [
                'author' => Str::slug($book->penulis),
            ];
        });

        // $duplicate = collect($map)->duplicates('penulis');
        return $filteredBuku;
    }
}
