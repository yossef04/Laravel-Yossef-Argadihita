<?php

use App\Http\Controllers\ProdukController;
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
    return view('welcome');
});

Route::get('/produk', [ProdukController::class, 'index']);
Route::post('/produk/create', [ProdukController::class, 'store']);
Route::get('/produk/create', [ProdukController::class, 'create']);

Route::get('/belajar', [ProdukController::class, 'index']); 


Route::get('/bekerja', function () {
    echo'pekerjaan mahasiswa';
});

Route::get('/bercanda', function () {
    echo 'saya orangnya bercanda';
});

Route::get('/bermain', function () {
    echo 'saya senang bermain';
});