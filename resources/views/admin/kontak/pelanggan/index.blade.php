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
                                    <a href="/admin/pelanggan/create" id="addRow" class="btn btn-info">
                                        Pelanggan Baru <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="table-scrollable">
                            <table id="example1" class="display" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Kontak</th>
                                        <th>Sales</th>
                                        <th>Kategori</th>
                                        <th>Foto KTP</th>
                                        <th>Nota</th>
                                        <th>Jatuh Tempo</th>
                                        <th>Keterangan</th>
                                        <th>Limit</th>
                                        <th>Total Pembelian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pelanggan as $p)
                                    <tr>
                                        <td class="patient-img">
                                            <img src="{{ asset('storage/'.$p->photo_toko) }}" alt="Kartu Indentitas {{ $p->nama }}">
                                        </td>
                                        <td>{{ $p->kode }}</td>
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->alamat }}</td>
                                        <td>{{ $p->kontak }}</td>
                                        <td>....</td>
                                        {{-- <td>{{ $p->pegawais->kode }}</td> --}}
                                        <td>{{ ucwords($p->kategori) }}</td>
                                        <td class="patient-img">
                                            <img src="{{ asset('storage/'.$p->photo_ktp) }}" alt="Kartu Indentitas {{ $p->nama }}">
                                        </td>
                                        <td>....</td>
                                        <td>....</td>
                                        <td>Lunas/Belum</td>
                                        <td>Rp.{{ $p->limit }}</td>
                                        <td>....</td>
                                        <td> 
                                            <div class="btn-group btn-group-circle btn-group-solid">
                                                <a href="/admin/pelanggan/{{ $p->slug }}" type="button" class="btn btn-info"><i class="fa fa-info"></i></a>
                                                <a href="/admin/pelanggan/{{ $p->slug }}/edit" type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                                <form action="/admin/pelanggan/{{ $p->slug }}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn deepPink-bgcolor" onclick="return confirm('Apakah Anda yakin?')">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </form>
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
<!-- end page content -->

@endsection
