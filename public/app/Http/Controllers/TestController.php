<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\BukuController;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TestController extends Controller
{
    public function index()
    {
        $peminjaman = Buku::get();

        return $peminjaman;

        return view('test', compact('peminjaman'));
    }
}
