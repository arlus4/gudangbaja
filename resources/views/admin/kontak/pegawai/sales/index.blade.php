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
                        <a class="parent-item" href="/admin/dashboard">Beranda</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a class="parent-item" href="javascript:;">Pegawai</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">{{ $title }}</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-line">
                    <div class="tab-content">
                        <div class="tab-pane active fontawesome-demo" id="tab1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-box">
                                        <div class="card-head">
                                            <header>Tabel {{ $title }}</header>
                                            <div class="tools">
                                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                            </div>
                                        </div>
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-6">
                                                    <div class="btn-group">
                                                        <a href="{{ route('sales.create') }}" id="addRow" class="btn btn-info"> Tambah Sales Baru 
                                                            <i class="fa fa-plus"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-scrollable">
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Kode</th>
                                                            <th>Nama</th>
                                                            <th>Alamat</th>
                                                            <th>Kontak</th>
                                                            <th>KTP</th>
                                                            <th>Toko yang Dipegang</th>
                                                            <th>Nota Hutang</th>
                                                            <th>Jatuh Tempo</th>
                                                            <th>Keterangan</th>
                                                            <th>Omset</th>
                                                            <th>Sebagai </th>
                                                            <th> Action </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($pegawai as $s)
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="{{ asset('storage/'.$s->photo) }}" alt="Photo Profil {{ $s->nama }}">
                                                            </td>
                                                            <td class="left">{{ $s->kode }}</td>
                                                            <td>{{ $s->nama }}</td>
                                                            <td class="left">{{ $s->alamat }}</td>
                                                            <td class="left">
                                                                <a href="tel:{{ $s->kontak }}">{{ $s->kontak }}</a>
                                                            </td>
                                                            <td class="patient-img">
                                                                <img src="{{ asset('storage/'.$s->ktp) }}" alt="Kartu Indentitas {{ $s->nama }}">
                                                            </td>
                                                            <td class="left">{{ $s->pegang_toko }}</td>
                                                            <td class="left">.....</td>
                                                            <td class="left">.....</td>
                                                            <td class="left">{{ $s->keterangan }}</td>
                                                            <td>{{ $s->omset }}</td>
                                                            <td class="left">{{ ucwords($s->sebagai) }}</td>
                                                            <td class="valigntop">
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        Actions <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu pull-left" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-info"></i> Lihat </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/admin/pegawai/sales/{{ $s->slug }}/edit">
                                                                                <i class="icon-note"></i> Ubah </a>
                                                                        </li>
                                                                        <li>
                                                                            <form action="/admin/pegawai/sales/{{ $s->slug }}" method="POST">
                                                                                <li class="divider"> </li>
                                                                                @method('delete')
                                                                                @csrf
                                                                                <a href="/admin/pegawai/sales/{{ $s->slug}}" onclick="return confirm('Apakah Anda yakin?')">
                                                                                    <i class="icon-trash"></i> Hapus
                                                                                </a>
                                                                            </form>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page content -->

@endsection