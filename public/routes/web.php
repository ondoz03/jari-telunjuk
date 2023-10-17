<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HistroyPeminjaman;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/{slug}', [BukuController::class, 'index'])->name('buku');
Route::get('/buku-page/{slug}', [BukuController::class, 'buku'])->name('buku-page');
Route::get('/{category}/{slug}', [BukuController::class, 'detail'])->name('detail-buku');
