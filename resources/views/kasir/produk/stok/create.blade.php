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
                    <li><i class="fa fa-home"></i>&nbsp;
                        <a class="parent-item" href="/admin/dashboard">Beranda</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="/admin/pegawai/kasir">Daftar Produk</a>&nbsp;<i class="fa fa-angle-right"></i>
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
                    </div>
                    <div class="card-body" id="bar-parent">
                        <div class="row">
                            <form method="POST" action="/kasir/produk/stok" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="kode">Kode Produk</label>
                                    <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" name="kode" value="{{ old('kode') }}" required auto-focus>
                                    @error('kode')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug (Otomatis)</label>
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" required>
                                    @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Produk</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Photo Produk</label>
                                    <input type="file" class="default @error('photo_produk') is-invalid @enderror" id="photo_produk" name="photo_produk" multiple onchange="previewImage()">
                                    @error('photo_produk')
                                    <div class="invalid-feedback">
                                        <p class="text-danger">{{ $message }}</p>
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_produk">Jumlah Produk</label>
                                    <div class="input-group spinner">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info" data-dir="dwn" type="button">
                                                <span class="fa fa-minus"></span>
                                            </button>
                                        </span>
                                        <input type="text" class="form-control text-center @error('jumlah_produk') is-invalid @enderror" id="jumlah_produk" name="jumlah_produk" min="0">
                                        @error('jumlah_produk')
                                        <div class="invalid-feedback">
                                            <p class="text-danger">{{ $message }}</p>
                                        </div>
                                        @enderror
                                        <span class="input-group-btn">
                                            <button class="btn btn-danger" data-dir="up" type="button">
                                                <span class="fa fa-plus"></span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    @error('deskripsi')
                                    <div class="invalid-feedback">
                                        <p class="text-danger">{{ $message }}</p>
                                    </div>
                                    @enderror
                                    <textarea name="deskripsi" id="deskripsi" class="form-control-textarea" rows="5" value="{{ old('deskripsi') }}" required></textarea>
                                </div>
                                <div class="col-lg-12 p-t-20 text-center">
                                    <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary">Submit</button>
                                        {{-- <button type="button" class="btn btn-default">Cancel</button> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page content -->
<script>
    const kode = document.querySelector('#kode');
    const slug = document.querySelector('#slug');

    kode.addEventListener('change', function(){
        fetch('/kasir/produk/stok/stokSlug?kode=' + kode.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
</script>

@endsection