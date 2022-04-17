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
                        <a class="parent-item" href="/">Beranda</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a class="parent-item" href="/stok">Stok Produk</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">{{ $title }}</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Form {{ $title }}</header>
                        <button id="panel-button3" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                            data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </button>
                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                            data-mdl-for="panel-button3">
                            <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                            </li>
                            <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                            </li>
                            <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                                here</li>
                        </ul>
                    </div>
                    <div class="card-body " id="bar-parent2">
                        <form>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Kode Produk</label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" class="form-control" placeholder="Enter ..." disabled>
                                    </div>
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <select class="form-select">
                                            <option>option 1</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Harga Dasar</label>
                                        <input type="text" data-mask="Rp. 999.999.999" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga Retail</label>
                                        <input type="text" data-mask="Rp. 999.999.999" class="form-control">
                                    </div>
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Diskon</label>
                                        <select class="form-select">
                                            <option>option 1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Nama Produk</label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Jumlah</label>
                                        <div class="input-group spinner">
                                            <span class="input-group-btn">
                                                <button class="btn btn-info" data-dir="dwn" type="button">
                                                    <span class="fa fa-minus"></span>
                                                </button>
                                            </span>
                                            <input type="text" class="form-control text-center" value="1">
                                            <span class="input-group-btn">
                                                <button class="btn btn-danger" data-dir="up" type="button">
                                                    <span class="fa fa-plus"></span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Harga Distributor</label>
                                        <input type="text" data-mask="Rp. 999.999.999" class="form-control">
                                    </div>
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea class="form-control" rows="5" placeholder="Enter ..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page content -->

@endsection
