<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = User::where('is_admin', 'true')->get();
        return view('admin/kontak/pegawai/admin/index', [
            'title' => 'Data Admin',
            'admin' => $admin,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/kontak/pegawai/admin/tambah', [
            'title' => 'Tambah Admin Baru',
            'pegawai' => User::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->validate([
        //     'nama'      => 'required | min:10 | max:255',
        //     'kode'      => 'required | min:10 | max:255',
        //     'email'     => 'required | email | max:255',
        //     'username'  => 'required | min:5 | max:255 | unique:users',
        //     'password'  => 'required | min:8 | max:255',
        //     'kontak'    => 'required | min:10 | max:255',
        //     'alamat'    => 'required | min:10 | max:255',
        //     'role'      => 'required',
        // ]);
        // $data['password'] = Hash::make($data['password']);

        // dd($data);

        // User::create($data);

        // $request->session()->flash('success', 'Pegawai telah ditambah!');

        // return redirect('/pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        //
    }
}
