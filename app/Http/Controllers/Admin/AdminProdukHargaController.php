<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProdukStok;
use App\Models\ProdukHarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminProdukHargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stok = ProdukHarga::with('produk_stok')->get();
        // $stok = ProdukHarga::all();
        // $stok = DB::table('produk_stoks')
        //     ->join('produk_hargas', 'produk_stoks.id', '=', 'produk_hargas.stok_id')
        //     ->select('produk_hargas.*', 'produk_stoks.kode', 'produk_stoks.nama');
        // dd($stok);
        return view('admin/produk/harga/index', [
            'title' => 'Harga Produk',
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
        return view('admin/produk/harga/create', [
            'title' => 'Update Harga Produk',
            'stok' => ProdukStok::all(),
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
            'stok_id' => 'required',
            'harga_terkini' => 'required',
            'harga_dasar' => 'required',
            'harga_supplier' => 'required',
            'margin_harga_supplier' => 'required',
            'harga_retail' => 'required',
            'margin_harga_retail' => 'required',
        ]);
        $data['user_id'] = Auth::user()->id;
        ProdukHarga::create($data);
        return redirect('/admin/produk/harga')->with('success', 'Harga telah diupdate!');
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
