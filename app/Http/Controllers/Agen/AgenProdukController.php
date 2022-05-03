<?php

namespace App\Http\Controllers\Agen;

use App\Models\ProdukStok;
use App\Models\ProdukHarga;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgenProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stok = ProdukStok::all();
        return view('agen/produk/index', [
            'title' => 'Daftar Produk',
            'stoks' => $stok
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProdukHarga  $produkHarga
     * @return \Illuminate\Http\Response
     */
    public function show(ProdukHarga $produkHarga)
    {
        $produkHarga = ProdukHarga::with('produk_stok')->get();
        dd($produkHarga);
        return view('agen/produk/show', [
            'title' => 'Daftar Produk',
            'harga' => $produkHarga
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProdukHarga  $produkHarga
     * @return \Illuminate\Http\Response
     */
    public function edit(ProdukHarga $produkHarga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProdukHarga  $produkHarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProdukHarga $produkHarga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProdukHarga  $produkHarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProdukHarga $produkHarga)
    {
        //
    }
}
