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
                                        Tambah Pesanan Baru <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="table-scrollable">
                            <table id="example1" class="display" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th> Tanggal Pesan </th>
                                        <th> Nama Toko </th>
                                        <th> Nama Sales </th>
                                        <th> Total Barang </th>
                                        <th> Nota </th>
                                        <th> Tanggal Jatuh Tempo </th>
                                        <th> Keterangan </th>
                                        <th> Total Bayar </th>
                                        <th> Aksi </th>
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
                                        <td> ... </td>
                                        <td> ... </td>
                                        {{-- <td> Pesanan </td>
                                        <td> Detail </td>
                                        <td> Pada </td>
                                        <td> Halaman </td>
                                        <td> Show </td>
                                        <td> Dengan </td>
                                        <td> Data </td>
                                        <td> Spreedsheet </td> --}}
                                        <td> 
                                            <div class="btn-group btn-group-circle btn-group-solid">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#info"><i class="fa fa-info"></i></button>
                                                <a href="#" type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                                <form action="#" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn deepPink-bgcolor" onclick="return confirm('Apakah Anda yakin?')">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
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