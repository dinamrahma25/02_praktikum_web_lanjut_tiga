<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Menampilkan halaman home');
});
Route::prefix('category')->group (function(){
    Route::get('/marble-and-friend-kids-games',)->group(function(){
        return"Menampilkan halaman Marbel and Friends Kids Games";
    });
    Route::get('/riri-story-books', function(){
        return"Menampilkan halaman Marbel Edu Games";
    });
    Route::prefix('/marble-edu-games', function(){
        return"Menampilkan halaman Kolak Kids Songs";
    });
});

Route::get('/news/title?', function ($title=null) {
    return $title;
});

Route::prefix('/program')->group (function(){
    Route::get('/karir',)->group(function(){
        return"Menampilkan halaman Program Karir";
    });
    Route::get('/magang', function(){
        return"Menampilkan halaman Program Magang";
    });
    Route::prefix('/kunjungan-industri', function(){
        return"Menampilkan halaman Program Kunjungan Industri";
    });
});
Route::get('/about-us', function(){
    return ("Menampilkan halaman About Us");
});

Route::resource('contact', PageController::class)->only([
    'index'
]);