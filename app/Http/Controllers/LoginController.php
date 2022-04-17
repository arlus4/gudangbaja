<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        // return view('auth.login');
        $role = Auth::user()->role;
        // $sebagai = Auth::pegawais()->sebagai;
        // admin
        if ($role == 'admin') {
            return view('admin.index');
        }
        // kasir
        elseif ($role == 'kasir') {
            return view('kasir.index');
        }
        // sales
        elseif ($role == 'sales') {
            return view('sales.index');
        }
        //pelanggan
        else {
            return view('admin.index');
        }
    }

    public function authenticate(Request $request)
    {
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
