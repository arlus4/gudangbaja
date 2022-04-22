@extends('admin/layouts/main')
@section('admin/index')

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
                        <a class="parent-item" href="/admin/dashboard">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a class="parent-item" href="/admin/transaksi/pesanan">Daftar Pesanan</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">{{ $title }}</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-head">
                        <header>Tabel {{ $title }}</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-6">
                                <div class="btn-group">
                                    <button id="addRow1" class="btn btn-info">
                                        Kembali <i class="fa fa-mail-reply-all"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="table-scrollable">
                            <table id="example1" class="display" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th> No </th>
                                        <th> Kode Barang </th>
                                        <th> Nama Barang </th>
                                        <th> Jumlah Barang </th>
                                        <th> Harga Satuan </th>
                                        <th> Total Harga </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td> ... </td>
                                        <td> ... </td>
                                        <td> ... </td>
                                        <td> ... </td>
                                        <td> ... </td>
                                        <td> ... </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page content -->

@endsection