<?php

namespace App\Http\Controllers\Pegawai;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PegawaiLoginController extends Controller
{
    /**
     * Display admin login view
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('login/pegawai');
    }

    protected function guard()
    {
        return Auth::guard('pegawai');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $data = $request->validate([
            'email'  => 'required|email',
            'password'  => 'required',
        ]);

        if (Auth::guard('pegawai')->attempt($data)) {
            $data = auth()->guard('pegawai');
            return redirect()->intended(url('/pegawai/dashboard'));
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
        Auth::guard('pegawai')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
