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
                        <i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="#">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a class="parent-item" href="#">Daftar Sales</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">{{ $title }}</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PROFILE SIDEBAR -->
                <div class="profile-sidebar">
                    <div class="card">
                        <div class="card-body no-padding height-9">
                            <div class="row">
                                <div class="profile-userpic">
                                    <img src="{{ asset('storage/'.$sales->photo) }}" class="img-responsive" alt="Photo Profil {{ $sales->nama }}">
                                </div>
                            </div>
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name"> {{ $sales->nama }} </div>
                                <div class="profile-usertitle-job"> {{ ucwords($sales->sebagai) }} </div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-head">
                            <header>Informasi Pegawai</header>
                        </div>
                        <div class="card-body no-padding height-9">
                            <div class="profile-desc">
                                {{ $sales->alamat }}
                            </div>
                            {{-- <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Gender </b>
                                    <div class="profile-desc-item pull-right">Female</div>
                                </li>
                                <li class="list-group-item">
                                    <b>Operation Done </b>
                                    <div class="profile-desc-item pull-right">30+</div>
                                </li>
                                <li class="list-group-item">
                                    <b>Degree </b>
                                    <div class="profile-desc-item pull-right">M.Com.</div>
                                </li>
                                <li class="list-group-item">
                                    <b>Designation</b>
                                    <div class="profile-desc-item pull-right">Jr. Clerk</div>
                                </li>
                            </ul>
                            <div class="row list-separated profile-stat">
                                <div class="col-md-4 col-sm-4 col-6">
                                    <div class="uppercase profile-stat-title"> 37 </div>
                                    <div class="uppercase profile-stat-text"> Projects </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-6">
                                    <div class="uppercase profile-stat-title"> 51 </div>
                                    <div class="uppercase profile-stat-text"> Tasks </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-6">
                                    <div class="uppercase profile-stat-title"> 61 </div>
                                    <div class="uppercase profile-stat-text"> Uploads </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!-- END BEGIN PROFILE SIDEBAR -->
                <!-- BEGIN PROFILE CONTENT -->
                <div class="profile-content">
                    <div class="row">
                        <div class="card">
                            <div class="card-head">
                                <header>Grafik Pendapatan Pegawai</header>
                                <div class="tools">
                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="recent-report__chart">
                                    <div id="chart1"></div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card">
                            <div class="card-head">
                                <header>Toko yang Dipegang</header>
                            </div>
                            <div class="card-body no-padding height-9">
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12">
                                        <p>456, Pragri flat, varacha road, Surat
                                            <br> Gujarat, India.</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <!-- END PROFILE CONTENT -->
            </div>
        </div>
    </div>
    <!-- end page content -->
</div>
<!-- end page container -->

@endsection