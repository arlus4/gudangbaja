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
                    <li><a class="parent-item" href="/admin/pelanggan">Daftar Pelanggan</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">{{ $title }}</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="card-head">
                        <header>Form {{ $title }}</header>
                    </div>
                    <div class="card-body row">
                        <form method="POST" action="/admin/pelanggan" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-12 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input @error('kode') is-invalid @enderror" type="text" id="kode" name="kode" value="{{ old('kode') }}" auto-focus>
                                    @error('kode')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                        <span class="mdl-textfield__error">Kode yang Anda Masukan Salah/Telah Tersedia!</span>
                                    </div>
                                    @enderror
                                    <label class="mdl-textfield__label">Kode Toko</label>
                                </div>
                            </div>
                            <div class="col-lg-12 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input @error('slug') is-invalid @enderror" type="text" id="slug" name="slug" value="{{ old('slug') }}">
                                    @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <label class="mdl-textfield__label">Slug</label>
                                </div>
                            </div>
                            <div class="col-lg-12 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input @error('nama') is-invalid @enderror" type="text" id="nama" name="nama" value="{{ old('nama') }}">
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <label class="mdl-textfield__label">Nama Toko</label>
                                </div>
                            </div>
                            <div class="col-lg-12 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input @error('kontak') is-invalid @enderror" pattern="-?[0-9]*(\.[0-9]+)?" type="text" id="kontak" name="kontak" value="{{ old('kontak') }}">
                                    @error('kontak')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <label class="mdl-textfield__label" for="text5">Kontak</label>
                                    <span class="mdl-textfield__error">Only Number required!</span>
                                </div>
                            </div>
                            <div class="col-lg-12 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email') }}">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <label class="mdl-textfield__label">Email</label>
                                </div>
                            </div>
                            <div class="col-lg-12 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input @error('username') is-invalid @enderror" type="text" id="username" name="username" value="{{ old('username') }}">
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <label class="mdl-textfield__label">Username</label>
                                </div>
                            </div>
                            <div class="col-lg-12 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="password" id="password" name="password">
                                    <label class="mdl-textfield__label">Password</label>
                                </div>
                            </div>
                            <div class="col-lg-12 p-t-20">
                                <label class="control-label col-md-3" for="sales">Sales</label>
                                <select class="form-select" name="pegawai_id" id="sales">
                                    <option selected disabled>Pilih Sales ...</option>
                                    @foreach ($sales as $s)
                                        @if (old('pegawai_id') == $s->id)
                                        <option value="{{ $s->id }}" selected>{{ $s->kode }}</option>
                                        @else
                                        <option value="{{ $s->id }}">{{ $s->kode }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-12 p-t-20">
                                <label class="control-label col-md-3" for="kategori">Kategori Pelanggan</label>
                                <select class="form-select" name="kategori" id="kategori">
                                    <option selected disabled>Pilih Kategori Pelanggan ...</option>
                                    <option value="supplier">Supplier</option>
                                    <option value="retail">Retail</option>
                                </select>
                            </div>
                            <div class="col-lg-12 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input @error('limit') is-invalid @enderror" pattern="-?[0-9]*(\.[0-9]+)?" type="text" id="limit" name="limit" value="{{ old('limit') }}">
                                    @error('limit')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <label class="mdl-textfield__label">Limit Toko</label>
                                    <span class="mdl-textfield__error">Only Number required!</span>
                                </div>
                            </div>
                            <div class="col-lg-12 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield txt-full-width">
                                    <textarea class="mdl-textfield__input" rows="4" id="alamat" name="alamat" value="{{ old('alamat') }}"></textarea>
                                    <label class="mdl-textfield__label" for="alamat">Alamat</label>
                                </div>
                            </div>
                            <div class="col-lg-12 p-t-20">
                                <label class="control-label col-md-3">Photo Toko</label>
                                <input type="file" class="default @error('photo_toko') is-invalid @enderror" id="photo_toko" name="photo_toko" multiple onchange="previewImage()">
                                @error('photo_toko')
                                <div class="invalid-feedback">
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                                @enderror
                            </div>
                            <div class="col-lg-12 p-t-20">
                                <label class="control-label col-md-3">Kartu Identitas Toko</label>
                                <input type="file" class="default @error('photo_ktp') is-invalid @enderror" id="photo_ktp" name="photo_ktp" multiple onchange="previewImage()">
                                @error('photo_ktp')
                                <div class="invalid-feedback">
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                                @enderror
                            </div>
                            <div class="col-lg-12 p-t-20 text-center">
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const kode = document.querySelector('#kode');
    const slug = document.querySelector('#slug');

    kode.addEventListener('change', function(){
        fetch('/admin/pelanggan/checkSlug?kode=' + kode.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

</script>
<!-- end page content -->

@endsection