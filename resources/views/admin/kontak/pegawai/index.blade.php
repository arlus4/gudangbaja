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
                        <a class="parent-item" href="/">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">{{ $title }}</li>
                </ol>
            </div>
        </div>

        @if(session()->has('success'))
        <div class="alert alert-success" role="success">
            {{ session('success') }}
        </div>
        @endif

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="card-head">
                        <header>Tabel {{ $title }}</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="/pegawai/create" type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary">
                            <i class="fa fa-plus"></i> Tambah Pegawai
                        </a>
                        <div class="mdl-tabs mdl-js-tabs">
                            <div class="mdl-tabs__tab-bar tab-left-side">
                                <a href="#admin" class="mdl-tabs__tab is-active">Admin</a>
                                <a href="#sales" class="mdl-tabs__tab">Sales</a>
                                <a href="#kasir" class="mdl-tabs__tab">Kasir</a>
                            </div>
                            <div class="mdl-tabs__panel is-active p-t-20" id="admin">
                                <table class="mdl-data-table ml-table-striped mdl-js-data-table mdl-data-table--selectable is-upgraded">
                                    <thead>
                                        <tr>
                                            <th class="mdl-data-table__cell--non-numeric">Name</th>
                                            <th class="mdl-data-table__cell--non-numeric">Address</th>
                                            <th>Quantity</th>
                                            <th>Tax</th>
                                            <th>Discount</th>
                                            <th>Unit price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
                                            <td class="mdl-data-table__cell--non-numeric">Gandhi road, Ahmedabad
                                            </td>
                                            <td>25</td>
                                            <td>$1.00</td>
                                            <td>$0.90</td>
                                            <td>$12.90</td>
                                        </tr>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
                                            <td class="mdl-data-table__cell--non-numeric">Gandhi road, Ahmedabad
                                            </td>
                                            <td>50</td>
                                            <td>$1.00</td>
                                            <td>$0.90</td>
                                            <td>$1.25</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mdl-tabs__panel p-t-20" id="sales">
                                <table class="mdl-data-table ml-table-striped mdl-js-data-table mdl-data-table--selectable is-upgraded">
                                    <thead>
                                        <tr>
                                            <th class="mdl-data-table__cell--non-numeric">Name</th>
                                            <th class="mdl-data-table__cell--non-numeric">Address</th>
                                            <th>Quantity</th>
                                            <th>Tax</th>
                                            <th>Discount</th>
                                            <th>Unit price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)
                                            </td>
                                            <td class="mdl-data-table__cell--non-numeric">Gandhi road, Ahmedabad
                                            </td>
                                            <td>10</td>
                                            <td>$1.00</td>
                                            <td>$0.90</td>
                                            <td>$2.35</td>
                                        </tr>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
                                            <td class="mdl-data-table__cell--non-numeric">Gandhi road, Ahmedabad
                                            </td>
                                            <td>25</td>
                                            <td>$1.00</td>
                                            <td>$0.90</td>
                                            <td>$12.90</td>
                                        </tr>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
                                            <td class="mdl-data-table__cell--non-numeric">Gandhi road, Ahmedabad
                                            </td>
                                            <td>50</td>
                                            <td>$1.00</td>
                                            <td>$0.90</td>
                                            <td>$1.25</td>
                                        </tr>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)
                                            </td>
                                            <td class="mdl-data-table__cell--non-numeric">Gandhi road, Ahmedabad
                                            </td>
                                            <td>10</td>
                                            <td>$1.00</td>
                                            <td>$0.90</td>
                                            <td>$2.35</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mdl-tabs__panel p-t-20" id="kasir">
                                <table class="mdl-data-table ml-table-striped mdl-js-data-table mdl-data-table--selectable is-upgraded">
                                    <thead>
                                        <tr>
                                            <th class="mdl-data-table__cell--non-numeric">Name</th>
                                            <th class="mdl-data-table__cell--non-numeric">Address</th>
                                            <th>Quantity</th>
                                            <th>Tax</th>
                                            <th>Discount</th>
                                            <th>Unit price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
                                            <td class="mdl-data-table__cell--non-numeric">Gandhi road, Ahmedabad
                                            </td>
                                            <td>25</td>
                                            <td>$1.00</td>
                                            <td>$0.90</td>
                                            <td>$12.90</td>
                                        </tr>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
                                            <td class="mdl-data-table__cell--non-numeric">Gandhi road, Ahmedabad
                                            </td>
                                            <td>50</td>
                                            <td>$1.00</td>
                                            <td>$0.90</td>
                                            <td>$1.25</td>
                                        </tr>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)
                                            </td>
                                            <td class="mdl-data-table__cell--non-numeric">Gandhi road, Ahmedabad
                                            </td>
                                            <td>10</td>
                                            <td>$1.00</td>
                                            <td>$0.90</td>
                                            <td>$2.35</td>
                                        </tr>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
                                            <td class="mdl-data-table__cell--non-numeric">Gandhi road, Ahmedabad
                                            </td>
                                            <td>25</td>
                                            <td>$1.00</td>
                                            <td>$0.90</td>
                                            <td>$12.90</td>
                                        </tr>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
                                            <td class="mdl-data-table__cell--non-numeric">Gandhi road, Ahmedabad
                                            </td>
                                            <td>50</td>
                                            <td>$1.00</td>
                                            <td>$0.90</td>
                                            <td>$1.25</td>
                                        </tr>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)
                                            </td>
                                            <td class="mdl-data-table__cell--non-numeric">Gandhi road, Ahmedabad
                                            </td>
                                            <td>10</td>
                                            <td>$1.00</td>
                                            <td>$0.90</td>
                                            <td>$2.35</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-md-12">
                <div class="card-box">
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
                                    <a href="/pegawai/create" id="addRow" class="btn btn-info">
                                        Pegawai Baru <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="table-scrollable">
                            <table id="example1" class="display" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Kode</th>
                                        <th>Ponsel</th>
                                        <th>Sebagai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pegawai as $p)
                                    <tr>
                                        <td><a href="/pegawai/{{ $p->slug }}">{{ $p->name }}</a></td>
                                        <td>{{ $p->kode }}</td>
                                        <td>{{ $p->kontak }}</td>
                                        <td>{{ ucwords($p->role) }}</td>
                                        <td>
                                            <a href ="/pegawai/{{ $p->slug }}/edit">
                                                <button class="btn btn-primary btn-xs">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                            </a>
                                            <form action="/pegawai/{{ $p->slug }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin?')">
                                                    <i class="fa fa-trash-o "></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
<!-- end page content -->

@endsection
