<?php

namespace App\Http\Controllers\Kasir;

use App\Models\ProdukStok;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Cviebrock\EloquentSluggable\Services\SlugService;

class KasirProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stok = ProdukStok::all();
        return view('kasir/produk/stok/index', [
            'title' => 'Stok Produk',
            'stok' => $stok,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kasir/produk/stok/create', [
            'title' => 'Tambah Stok Produk',
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
            'kode'      => 'required | unique:kasirs',
            'slug'      => 'required | unique:kasirs',
            'nama'      => 'required',
            'jumlah_produk' => 'required',
            'deskripsi'    => 'required',
            'photo_produk'     => 'required | image | mimes:jpg,png,jpeg,gif,svg | max:2048',
        ]);

        $data['photo_produk'] = $request->file('photo_produk')->store('photo-produk');
        $data['kasir_id'] = Auth::guard('kasir')->user()->id;
        ProdukStok::create($data);
        return redirect('/kasir/produk/stok')->with('success', 'Produk telah ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProdukStok  $produkStok
     * @return \Illuminate\Http\Response
     */
    public function show(ProdukStok $produkStok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProdukStok  $produkStok
     * @return \Illuminate\Http\Response
     */
    public function edit(ProdukStok $produkStok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProdukStok  $produkStok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProdukStok $produkStok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProdukStok  $produkStok
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProdukStok $produkStok)
    {
        //
    }

    // Fungsi Otomatisasi Slug
    public function stokSlug(Request $request)
    {
        $slug = SlugService::createSlug(ProdukStok::class, 'slug', $request->kode);
        return response()->json(['slug' => $slug]);
    }
}
