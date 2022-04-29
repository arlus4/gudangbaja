<?php

namespace App\Http\Controllers\Agen;

use App\Http\Controllers\Controller;
use App\Models\ProdukHarga;
use Illuminate\Http\Request;

class AgenProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agen/produk/index');
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
        //
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
