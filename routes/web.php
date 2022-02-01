<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('tampil_barang', function () {
    return view('tampil_barang');
});


Route::get('/barang',               [BarangController::class, 'index']);
Route::get('/barang/tambah',        [BarangController::class, 'tambah']);
Route::post('/barang/store',        [BarangController::class, 'store']);
Route::get('/barang/edit/{id}',     [BarangController::class, 'edit']);
Route::put('/barang/update/{id}',   [BarangController::class, 'update']);
Route::get('/barang/hapus/{id}',    [BarangController::class, 'hapus']);
Route::get('/tampil_barang',        [BarangController::class, 'tampil_barang']);


Route::resource('product',          ProductController::class);

// Best


// Auth::routes();
//Route::get('/barang', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/beranda', [Tampil_BarangController::class, 'tampil_barang']);
