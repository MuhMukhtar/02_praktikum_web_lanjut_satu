<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProgramController;

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

// Praktikum 1

// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::get('/about', function () {
//     echo "NIM : 1941720194";
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman Artikel dengan ID : ".$id;
// });



// Praktikum 2

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'index']);
// Route::get('/articles/{id}', [ArticleController::class, 'index']);



// Praktikum 3

Route::get('/', [HomeController::class, 'index']);

Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [CategoryController::class, 'marbeledugames']);
    Route::get('/marbel-and-friends', [CategoryController::class, 'marbelfriends']);
    Route::get('/riri-story-book', [CategoryController::class, 'riri']);
    Route::get('/kolak-kids-songs', [CategoryController::class, 'kolak']);
});

Route::get('/news', [ArticleController::class, 'news']);
Route::get('/news/{String}', [ArticleController::class, 'newsString']);

Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan', [ProgramController::class, 'kunjungan']);
});

Route::get('/about', [AboutController::class, 'index']);

Route::get('/contact', function () {
    return redirect('https://www.educastudio.com/contact-us');
});
