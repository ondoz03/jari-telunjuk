<?php

use App\Http\Controllers\Admin\{
    BukuController,
    DashbordController,
    InformationController,
    KategoriController,
    PeminjamanController,
    PengembalianController,
    UserController,
    SettingController
};
use Illuminate\Support\Facades\Route;



Route::get('/', [DashbordController::class, 'index'])->name('index');

Route::resource('kategori', KategoriController::class)->except([
    'create', 'show'
]);
Route::get('kategori/search', [KategoriController::class, 'search'])->name('kategori.search');
Route::post('kategori/faq/{uuid}', [KategoriController::class, 'updateFaq'])->name('kategori.faq');




Route::resource('buku', App\Http\Controllers\Admin\BukuController::class)->except([
    'create', 'show'
]);
Route::get('buku/search', [BukuController::class, 'search'])->name('buku.search');


Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/search', [UserController::class, 'search'])->name('search');
    Route::get('show/{id}', [UserController::class, 'show'])->name('show');
    Route::post('/', [UserController::class, 'store'])->name('store');
    Route::get('delete/{id}', [UserController::class, 'destroy'])->name('delete');
});

Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
    Route::get('/', [SettingController::class, 'index'])->name('index');
    Route::post('/', [SettingController::class, 'update'])->name('update');
});


Route::post('images', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('images.store');
