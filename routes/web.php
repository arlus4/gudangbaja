<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\PegawaiController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\PelangganController;
use App\Http\Controllers\Admin\TransaksiController;

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

// Route::get('/login', [LoginController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Route::get('/dashboard', [LoginController::class, 'authenticate'])->name('dashboard');
    Route::resource('/pegawai', PegawaiController::class);
    Route::resource('/pelanggan', PelangganController::class);
    Route::resource('/stok', ProdukController::class);
    Route::resource('/kategori', KategoriController::class);
    Route::get('/pesanan', [TransaksiController::class, 'index']);
    Route::get('/penjualan', [TransaksiController::class, 'penjualan']);
    Route::get('/pembelian', [TransaksiController::class, 'pembelian']);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
