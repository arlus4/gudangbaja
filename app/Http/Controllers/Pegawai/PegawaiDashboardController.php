<?php

namespace App\Http\Controllers\Pegawai;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Auth;

class PegawaiDashboardController extends Controller
{
    public function index()
    {
        $role = Auth::guard('pegawai')->user()->sebagai;
        // kasir
        if ($role == 'kasir') {
            return view('pegawai.kasir.index');
        }
        // sales
        elseif ($role == 'sales') {
            return view('pegawai.sales.index');
        }
        //pelanggan
        else {
            // return view('admin.index');
        }
    }
}
