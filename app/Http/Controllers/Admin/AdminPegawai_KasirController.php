<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminPegawai_KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kasir = Pegawai::where('sebagai', 'kasir')->get();
        return view('admin/kontak/pegawai/kasir/index', [
            'title' => 'Data Kasir',
            'kasir' => $kasir,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/kontak/pegawai/kasir/tambah', [
            'title' => 'Tambah Kasir Baru',
            'pegawai' => Pegawai::where('user_id', auth()->user()->id)->get(),
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
            'kode'      => 'required | unique:pegawais',
            'nama'      => 'required',
            'slug'      => 'required | unique:pegawais',
            'email'     => 'required | email | max:255',
            'alamat'    => 'required',
            'username'  => 'required | unique:pegawais',
            'password'  => 'required | min:2 | max:255',
            'kontak'    => 'required',
            'sebagai'   => 'required',
            'photo'     => 'required | image | mimes:jpg,png,jpeg,gif,svg | max:2048',
            'ktp'       => 'required | image | mimes:jpg,png,jpeg,gif,svg | max:2048',
        ]);

        $data['photo'] = $request->file('photo')->store('profile-kasir');
        $data['ktp'] = $request->file('ktp')->store('ktp-kasir');
        $data['password'] = Hash::make($data['password']);
        $data['user_id'] = Auth::user()->id;
        Pegawai::create($data);
        return redirect('/admin/pegawai/kasir')->with('success', 'Pegawai telah ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $kasir
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $kasir)
    {
        return view('admin/kontak/pegawai/kasir/show', [
            'title' => 'Profil Sales',
            'kasir' => $kasir,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $kasir
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $kasir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $kasir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $kasir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $kasir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $kasir)
    {
        Pegawai::destroy($kasir->id);
        return redirect('/admin/pegawai/kasir');
    }

    // Fungsi Otomatisasi Slug
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Pegawai::class, 'slug', $request->kode);
        return response()->json(['slug' => $slug]);
    }
}
