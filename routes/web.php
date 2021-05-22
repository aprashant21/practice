<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CdController;
use App\Http\Controllers\HomeController;

// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/add', function () {
    return view('add');
});
Route::get('/addbook', function () {
    return view('addbook');
});

Route::get('/addcd', function () {
    return view('addcd');
});
Route::get('/admincd', function () {
    return view('admincd');
});

Route::get('/books', function () {
    return view('books');
});
Route::get('/cds', function () {
    return view('cds');
});

Route::post('/book_submit',[BookController::class,'store']);
Route::get('/books',[BookController::class,'index']);
Route::get('/adminbook',[BookController::class,'show']);
Route::get('/book_edit/{id}', [BookController::class, 'edit']);
Route::put('/book_update/{id}', [BookController::class, 'update']);
Route::delete('/book_delete/{id}', [BookController::class, 'destroy']);

Route::post('/cd_submit',[CdController::class,'store']);
Route::get('/cds',[CdController::class,'index']);
Route::get('/admincd',[CdController::class,'show']);
Route::get('/cd_edit/{id}', [CdController::class, 'edit']);
Route::put('/cd_update/{id}', [CdController::class, 'update']);
Route::delete('/cd_delete/{id}', [CdController::class, 'destroy']);
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
