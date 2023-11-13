<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\BukuController;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Peminjaman;
use BendeckDavid\GraphqlClient\Facades\GraphQL;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TestController extends Controller
{
    public function index()
    {
        $data=  Kategori::doesntHave('buku')->withCount('buku')->get();
        foreach ($data as $key => $value) {
            $value->delete();
        }
        return response()->json($data);
    }
}
