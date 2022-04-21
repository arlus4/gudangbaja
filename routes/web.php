<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\PesananController;
use App\Http\Controllers\Admin\PreOrderController;
use App\Http\Controllers\Admin\PelangganController;
use App\Http\Controllers\Admin\PembelianController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\Admin\AdminLoginController;
// use App\Http\Controllers\Pegawai\DashboardController;
use App\Http\Controllers\Admin\AdminProfilController;
use App\Http\Controllers\Admin\AdminPegawaiController;
use App\Http\Controllers\Admin\Produk_RetailController;
use App\Http\Controllers\Pegawai\PegawaiLoginController;
use App\Http\Controllers\Admin\Produk_SupplierController;
use App\Http\Controllers\Pegawai\PegawaiProdukController;
use App\Http\Controllers\Pegawai\PegawaiProfilController;
use App\Http\Controllers\Pegawai\PegawaiPesananController;
use App\Http\Controllers\Pegawai\PegawaiPreOrderController;
use App\Http\Controllers\Admin\AdminPegawai_KasirController;
use App\Http\Controllers\Admin\AdminPegawai_SalesController;
use App\Http\Controllers\Pegawai\PegawaiDashboardController;
use App\Http\Controllers\Pegawai\PegawaiPelangganController;
use App\Http\Controllers\Pelanggan\PelangganLoginController;
use App\Http\Controllers\Pelanggan\PelangganDashboardController;

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

// Login Admin
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'authenticate']);

//Login Pegawai
Route::get('/pegawai/login', [PegawaiLoginController::class, 'showLoginForm'])->name('pegawai.login');
Route::post('/pegawai/login', [PegawaiLoginController::class, 'authenticate']);

//Login Pelanggan
Route::get('/pelanggan/login', [PelangganLoginController::class, 'showLoginForm'])->name('pelanggan.login');
Route::post('/pelanggan/login', [PelangganLoginController::class, 'authenticate']);

// Route untuk Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.index');
    });
    Route::resource('admin/profil', AdminProfilController::class);
    Route::resource('/admin/pegawai/sales', AdminPegawai_SalesController::class);
    Route::get('/admin/pegawai/sales/checkSlug', [AdminPegawai_SalesController::class, 'checkSlug']);
    Route::resource('/admin/pegawai/admin', AdminPegawaiController::class);
    Route::resource('/admin/pegawai/kasir', AdminPegawai_KasirController::class);
    Route::get('/admin/pegawai/kasir/checkSlug', [AdminPegawai_KasirController::class, 'checkSlug']);
    Route::resource('/admin/pelanggan', PelangganController::class);
    Route::resource('/admin/produk', ProdukController::class);
    Route::resource('/admin/harga_supplier', Produk_SupplierController::class);
    Route::resource('/admin/harga_retail', Produk_RetailController::class);
    Route::resource('/admin/transaksi/pre_order', PreOrderController::class);
    Route::resource('/admin/transaksi/pesanan', PesananController::class);
    Route::resource('/admin/transaksi/pembelian', PembelianController::class);
    // Route::get('/pesanan', [TransaksiController::class, 'index']);
    // Route::get('/penjualan', [TransaksiController::class, 'penjualan']);
    // Route::get('/pembelian', [TransaksiController::class, 'pembelian']);
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
});

// // Route untuk Pegawai
Route::middleware('pegawai')->group(function () {
    Route::get('/pegawai/dashboard', [PegawaiDashboardController::class, 'index'])->name('pegawai.dashboard');
    // Route::get('/pegawai/dashboard', function () {
    //     return view('pegawai.index');
    // });
    Route::resource('/pegawai/profil', PegawaiProfilController::class);
    Route::resource('/pegawai/produk', PegawaiProdukController::class);
    Route::resource('/pegawai/pelanggan', PegawaiPelangganController::class);
    Route::resource('/pegawai/pesanan', PegawaiPesananController::class);
    Route::resource('/pegawai/pre_order', PegawaiPreOrderController::class);
});

// // Route untuk pelanggan
// Route::middleware('pelanggan')->group(function () {
//     Route::get('/pelanggan/dashboard', [PelangganDashboardController::class, 'index'])->name('pelanggan.dashboard');
// });
// Route::middleware(['auth:sanctum', 'verified', 'pelanggan'])->group(function () {
//     // Route::get
// });
