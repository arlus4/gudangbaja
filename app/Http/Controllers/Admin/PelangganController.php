<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pegawai;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/kontak/pelanggan/index', [
            'title' => 'Daftar Pelanggan',
            'pelanggan' => Pelanggan::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/kontak/pelanggan/tambah', [
            'title' => 'Tambah Pelanggan',
            'sales' => Pegawai::where('sebagai', 'sales')->get(),
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
        $data = $request->validate([
            'pegawai_id' => 'required',
            'kode'      => 'required | unique:pelanggans',
            'nama'      => 'required',
            'slug'      => 'required | unique:pelanggans',
            'email'     => 'required | email | max:255',
            'username'  => 'required | unique:pelanggans',
            'password'  => 'required | min:2 | max:255',
            'kontak'    => 'required',
            'alamat'    => 'required',
            'kategori'   => 'required',
            'limit'    => 'required',
            'photo_toko'     => 'required | image | mimes:jpg,png,jpeg,gif,svg | max:2048',
            'photo_ktp'       => 'required | image | mimes:jpg,png,jpeg,gif,svg | max:2048',
        ]);

        $data['photo_toko'] = $request->file('photo_toko')->store('profile-toko');
        $data['photo_ktp'] = $request->file('photo_ktp')->store('ktp-toko');
        $data['password'] = Hash::make($data['password']);
        $data['user_id'] = Auth::user()->id;
        Pelanggan::create($data);
        return redirect('/admin/pelanggan')->with('success', 'Pelanggan telah ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelanggan $pelanggan)
    {
        return view('admin/kontak/pelanggan/show', [
            'title' => 'Profil Pelanggan',
            'pelanggan' => $pelanggan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggan $pelanggan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelanggan $pelanggan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelanggan $pelanggan)
    {
        Pelanggan::destroy($pelanggan->id);
        return redirect('/admin/pelanggan');
    }

    // Fungsi Otomatisasi Slug
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Pelanggan::class, 'slug', $request->kode);
        return response()->json(['slug' => $slug]);
    }
}
