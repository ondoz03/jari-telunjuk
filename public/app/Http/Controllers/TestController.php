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
        return view('testing');
    }
}
