<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HistroyPeminjaman;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\TwitterController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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



Route::get('/testing', [TestController::class, 'index'])->name('ajax.testing');

Route::group(['prefix' => 'ajax'], function () {

    Route::get('/book-homepage', [BukuController::class, 'getRandomBookHomepage'])->name('ajax.book-homepage');
    Route::post('/set-session', [SignUpController::class, 'setSession'])->name('ajax.set-session');
    Route::post('/set-session-global', [HomeController::class, 'setSession'])->name('ajax.set-session-global');
    Route::post('/set-want-to-read', [ProfileController::class, 'setWantToRead'])->name('ajax.set-want-to-read');
    Route::post('/review-book', [ProfileController::class, 'reviewBook'])->name('ajax.review-book');
});

Route::group(['prefix' => 'sign-in'], function () {
    Route::get('/', [SignInController::class, 'index'])->name('sign-in');
    Route::get('/sign-up', [SignUpController::class, 'index'])->name('sign-in.sign-up');
    Route::post('/', [SignInController::class, 'login'])->name('sign-in.login');
    Route::post('/logout', [SignInController::class, 'logout'])->name('sign-in.logout');
    Route::post('/sign-up/create', [SignUpController::class, 'store'])->name('sign-in.sign-up.create');
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
    Route::get('/google/callback', [GoogleController::class, 'callback'])->name('auth.google.callback');
    Route::get('/twitter', [TwitterController::class, 'redirectToTwitter'])->name('auth.twitter');
    Route::get('/twitter/callback', [TwitterController::class, 'callback'])->name('auth.twitter.callback');
    Route::get('/facebook', [FacebookController::class, 'redirectToFacebook'])->name('auth.facebook');
    Route::get('/facebook/callback', [FacebookController::class, 'callback'])->name('auth.facebook.callback');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [ProfileController::class, 'index'])->name('user.index');
    Route::get('/profile', [ProfileController::class, 'index'])->name('user.profile');
    Route::get('/logout' , [ProfileController::class, 'logout'])->name('user.logout');
});



Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/{slug}', [BukuController::class, 'index'])->name('buku');
Route::get('/buku-page/{slug}', [BukuController::class, 'buku'])->name('buku-page');
Route::get('/{category}/{slug}', [BukuController::class, 'detail'])->name('detail-buku');
Route::get('/search-result', [BukuController::class, 'search'])->name('search-result');
