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
                    <li><i class="fa fa-home"></i>&nbsp;
                        <a class="parent-item" href="/admin/dashboard">Beranda</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="/admin/pegawai">Pegawai</a>&nbsp;<i class="fa fa-angle-right"></i>
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
                        <button id="panel-button"
                            class="mdl-button mdl-js-button mdl-button--icon pull-right"
                            data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </button>
                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                            data-mdl-for="panel-button">
                            <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                            </li>
                            <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                            </li>
                            <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                                here</li>
                        </ul>
                    </div>
                    <div class="card-body " id="bar-parent">
                        <div class="row">
                            <form action="{{ route('pegawai.tambah') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama Pegawai</label>
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug">
                                    <div class="form-group has-warning">
                                        <span class="help-block">Otomatis</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="kode">Kode Pegawai</label>
                                    <input type="text" class="form-control" id="kode" name="kode">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                {{-- <div class="form-group">
                                    <label class="control-label col-md-3">Mulai Bekerja</label>
                                    <div class="input-append date">
                                        <div id="dateIcon" class="input-group datePicker">
                                            <input class="formDatePicker form-control" name="mulai" type="text" placeholder="Input Tanggal" data-input>
                                            <span class="dateBtn">
                                                <a class="input-button" title="toggle" data-toggle>
                                                    <i class="icon-calendar"></i>
                                                </a>
                                                <a class="input-button" title="clear" data-clear>
                                                    <i class="icon-close"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <label for="kontak">Kontak</label>
                                    <input type="text" class="form-control" id="kontak" name="kontak">
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Sebagai</label>
                                    <select class="form-select input-height" name="role">
                                        <option value="">Silahkan pilih...</option>
                                        <option value="kasir">Kasir</option>
                                        <option value="gudang">Gudang</option>
                                        <option value="sales">Sales</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Photo Pegawai</label>
                                    <input type="file" class="default" name="gambar" multiple>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="alamat" id="alamat" class="form-control-textarea" rows="5"></textarea>
                                </div>
                                <button type="submit" class="btn btn-info m-r-20">Submit</button>
                                <button type="button" class="btn btn-default">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="card-head">
                        <header>Form {{ $title }}</header>
                        <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </button>
                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                            data-mdl-for="panel-button">
                            <li class="mdl-menu__item">
                                <i class="material-icons">assistant_photo</i>Action
                            </li>
                            <li class="mdl-menu__item">
                                <i class="material-icons">print</i>Another action
                            </li>
                            <li class="mdl-menu__item">
                                <i class="material-icons">favorite</i>Something else here
                            </li>
                        </ul>
                    </div>
                    <div class="card-body row">
                        <form method="post" action="/pegawai" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-6 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="nama" name="nama">
                                    <label class="mdl-textfield__label" for="nama">Nama Lengkap</label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="slug" name="slug">
                                    <label class="mdl-textfield__label" for="slug">Slug</label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="kode" name="kode">
                                    <label class="mdl-textfield__label" for="kode">Kode</label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="date" id="date" name="mulai">
                                    <label class="mdl-textfield__label" for="date">Masuk Kerja</label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="username" name="username">
                                    <label class="mdl-textfield__label" for="username">Username</label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="password" id="password" name="password">
                                    <label class="mdl-textfield__label" for="password">Password</label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="kontak" name="kontak">
                                    <label class="mdl-textfield__label" for="kontak">Kontak</label>
                                    <span class="mdl-textfield__error">Number required!</span>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="sebagai" name="sebagai" readonly tabIndex="-1">
                                    <label for="sebagai" class="pull-right margin-0">
                                        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                    </label>
                                    <label for="sebagai" class="mdl-textfield__label">Sebagai</label>
                                    <ul data-mdl-for="sebagai" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                        <li class="mdl-menu__item" data-val="kasir">Kasir</li>
                                        <li class="mdl-menu__item" data-val="sales">Sales</li>
                                        <li class="mdl-menu__item" data-val="gudang">Gudang</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield txt-full-width">
                                    <textarea class="mdl-textfield__input" rows="4" id="alamat" name="alamat"></textarea>
                                    <label class="mdl-textfield__label" for="alamat">Alamat</label>
                                </div>
                            </div>
                            <div class="col-lg-12 p-t-20">
                                <label class="control-label col-md-3">Upload Photo </label>
                                <div class="col-md-12">
                                    <div id="id_dropzone" class="dropzone" name="gambar"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 p-t-20 text-center">
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
                                <button type="cancel" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
<!-- end page content -->

@endsection