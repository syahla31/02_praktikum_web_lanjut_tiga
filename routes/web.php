<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;

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

// Soal 1
Route::get('/', [HomeController::class, 'home']);

// Soal 2
Route::prefix('category')->group(function () {
    Route::get('/games', [ProductController::class, 'games']);
    Route::get('/riri-story-books', [ProductController::class, 'books']);
    Route::get('/kolak-kids-songs', [ProductController::class, 'songs']);
});

// Soal 3
Route::get('/news/{page}',[NewsController::class, 'news']);

// Soal 4
Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjungan']);
});

// Soal 5
Route::get('/about-us',[AboutController::class, 'about_us']);

// Soal 6
Route::resource('/contact-us', ContactController::class)->only(['index' , 'store']);