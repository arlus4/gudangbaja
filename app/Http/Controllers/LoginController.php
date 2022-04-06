<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $role = Auth::user()->role;
        // admin
        if ($role == 'admin') {
            return view('admin.index');
        }
        // kasir
        if ($role == 'kasir') {
            return view('kasir.index');
        }
        // sales
        if ($role == 'sales') {
            return view('sales.index');
        }
        //guest
        else {
            return view('home.index');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
