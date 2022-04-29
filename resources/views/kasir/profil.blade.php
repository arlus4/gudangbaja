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
                    <li>
                        <i class="fa fa-home"></i>&nbsp;
                        <a class="parent-item" href="/kasir/dashboard">Home</a>&nbsp;
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
                                    <img src="{{ asset('admin/img/prof/prof4.jpg') }}" class="img-responsive" alt="">
                                </div>
                            </div>
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name"> {{ auth()->user()->nama }} </div>
                                <div class="profile-usertitle-job"> {{ auth()->user()->kode }} </div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-head">
                            <header>About Me</header>
                        </div>
                        <div class="card-body no-padding height-9">
                            <div class="profile-desc">
                                {{ auth()->user()->alamat }}
                            </div>
                            <ul class="list-group list-group-unbordered">
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
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END BEGIN PROFILE SIDEBAR -->
                <!-- BEGIN PROFILE CONTENT -->
                <div class="profile-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Form Biodata</header>
								</div>
								<div class="card-body row">
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-width">
											<input class="mdl-textfield__input" type="text" id="text4" value="{{ auth()->user()->nama }}" readonly>
											<label class="mdl-textfield__label" for="text4">Nama</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-width">
											<input class="mdl-textfield__input" type="text" id="text4" value="{{ auth()->user()->username }}" readonly>
											<label class="mdl-textfield__label" for="text4">Username</label>
										</div>
									</div>
                                    <div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-width">
											<input class="mdl-textfield__input" type="text" id="text4" value="{{ auth()->user()->email }}" readonly>
											<label class="mdl-textfield__label" for="text4">Email</label>
										</div>
									</div>
								</div>
							</div>
						</div>
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