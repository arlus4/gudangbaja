@extends('kasir/layouts/main')
@section('kasir/index')

<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">{{ $title }}</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li>
                        <i class="fa fa-home"></i>&nbsp;
                        <a class="parent-item" href="/kasir/dashboard">Beranda</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">{{ $title }}</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="card-body ">
                        <div class="mdl-tabs mdl-js-tabs">
                            <div class="mdl-tabs__tab-bar tab-left-side">
                                <a href="#data" class="mdl-tabs__tab tabs_three is-active">Tabel {{ $title }}</a>
                                {{-- <a href="#terima" class="mdl-tabs__tab tabs_three">{{ $title }} Diterima</a> --}}
                            </div>
                            <div class="mdl-tabs__panel is-active p-t-20" id="data">
                                <div class="table-responsive">
                                    <table class="table">
                                        <div class="btn-group">
                                            <a href="/kasir/transaksi/create" id="addRow" class="btn btn-info"> Tambah Pesanan Baru 
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                        <tbody>
                                            @php
                                            $no=1
                                            @endphp
                                            <tr>
                                                <th>#</th>
                                                <th>Invoice</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Pembayaran</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Aksi</th>
                                            </tr>
                                            {{-- @foreach ($transaksis as $transaksi)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $transaksi->invoice }}</td>
                                                <td>{{ $transaksi->pelanggans->nama }}</td>
                                                <td>{{ ucwords($transaksi->kategori_pembayaran) }}</td>
                                                <td>Belum</td>
                                                <td>{{ $transaksi->total_harga }}</td>
                                                <td>
                                                    <a href="/agen/transaksi/{{ $transaksi->slug }}" class="btn btn-circle btn-info">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- <div class="mdl-tabs__panel p-t-20" id="terima">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            @php
                                            $no=1
                                            @endphp
                                            <tr>
                                                <th>#</th>
                                                <th>Invoice</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Pembayaran</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page content -->

@endsection