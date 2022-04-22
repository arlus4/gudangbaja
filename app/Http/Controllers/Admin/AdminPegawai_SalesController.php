<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pegawai;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminPegawai_SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pelanggan = DB::table('pelanggans')->select('pegawai_id')->addSelect('nama')->get();
        // $pelanggan = $query->addSelect('nama')->get();
        // return $pelanggan;
        $pegawai = Pegawai::where('sebagai', 'sales')->get();
        return view('admin/kontak/pegawai/sales/index', [
            'title' => 'Daftar Sales',
            'pegawai' => $pegawai,
            // 'pelanggan' => $pelanggan->nama
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/kontak/pegawai/sales/tambah', [
            'title' => 'Tambah Sales Baru',
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

        $data['photo'] = $request->file('photo')->store('profile-sales');
        $data['ktp'] = $request->file('ktp')->store('ktp-sales');
        $data['password'] = Hash::make($data['password']);
        $data['user_id'] = Auth::user()->id;
        Pegawai::create($data);
        return redirect('/admin/pegawai/sales')->with('success', 'Pegawai telah ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $sale) // ($) pada routing
    {
        return view('admin/kontak/pegawai/sales/show', [
            'title' => 'Profil Sales',
            'sales' => $sale,
            'pelanggan' => Pelanggan::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $sale) // ($) pada routing
    {
        return view('admin/kontak/pegawai/sales/edit', [
            'title' => 'Edit Sales',
            'sales' => $sale,
            'pelanggan' => Pelanggan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $sale) // ($) pada routing
    { {
            $rules = [
                'kode'      => 'required | unique:pegawais',
                'nama'      => 'required',
                'email'     => 'required | email | max:255',
                'alamat'    => 'required',
                'username'  => 'required | unique:pegawais',
                'password'  => 'required | min:2 | max:255',
                'pegang_toko'  => 'required',
                'kontak'    => 'required',
            ];

            if ($request->slug != $sale->slug) {
                $rules['slug'] = 'required|unique:pegawais';
            }

            $data = $request->validate($rules);

            if ($request->file('photo')) {
                if ($request->oldImage) {
                    Storage::delete($request->oldImage);
                }
                $data['photo'] = $request->file('photo')->store('profile-sales');
            }

            if ($request->file('ktp')) {
                if ($request->oldImage) {
                    Storage::delete($request->oldImage);
                }
                $data['ktp'] = $request->file('ktp')->store('ktp-sales');
            }

            $data['user_id'] = Auth::user()->id;
            $data['password'] = Hash::make($data['password']);

            Pegawai::where('id', $sale->id)->update($data);

            return redirect('/admin/pegawai/sales')->with('success', 'Data Sales Berhasil dirubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $sale) // ($) pada routing
    {
        Pegawai::destroy($sale->id);
        return redirect('/admin/pegawai/sales');
    }

    // Fungsi Otomatisasi Slug
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Pegawai::class, 'slug', $request->kode);
        return response()->json(['slug' => $slug]);
    }
}
