<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        return view('admin.transaksi.pesanan.index', [
            'title' => 'Daftar Pesanan'
        ]);
    }

    public function penjualan()
    {
        return view('admin.transaksi.penjualan.index', [
            'title' => 'Daftar Penjualan'
        ]);
    }

    public function pembelian()
    {
        return view('admin.transaksi.pembelian.index', [
            'title' => 'Daftar Pembelian'
        ]);
    }
}
