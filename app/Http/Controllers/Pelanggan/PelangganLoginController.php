<?php

namespace App\Http\Controllers\Pelanggan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PelangganLoginController extends Controller
{
    /**
     * Display admin login view
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        if (Auth::guard('pelanggan')->check()) {
            return redirect()->route('pelanggan.dashboard');
        } else {
            return view('login/pelanggan');
        }
    }

    protected function guard()
    {
        return Auth::guard('pelanggan');
    }

    public function authenticate(Request $request)
    {
        $data = $request->validate([
            'email'  => 'required|email',
            'password'  => 'required',
        ]);

        if (Auth::guard('pelanggan')->attempt($data)) {
            $data = auth()->guard('pelanggan');
            return redirect()->intended(url('/pelanggan/dashboard'));
        } else {
            return redirect()->back()->withError('Credentials doesnt match.');
        }
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::guard('pelanggan')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
