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
                        <a href="/admin/pegawai/create" type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary">
                            <i class="fa fa-plus"></i> Tambah Pegawai
                        </a>
                        <div class="mdl-tabs mdl-js-tabs">
                            <div class="mdl-tabs__tab-bar tab-left-side">
                                <a href="#admin" class="mdl-tabs__tab is-active">Admin</a>
                                <a href="#sales" class="mdl-tabs__tab">Sales</a>
                                <a href="#kasir" class="mdl-tabs__tab">Kasir</a>
                            </div>

                            {{-- Admin --}}
                            <div class="mdl-tabs__panel is-active p-t-20" id="admin">
                                <table class="mdl-data-table ml-table-striped mdl-js-data-table mdl-data-table--selectable is-upgraded">
                                    <thead>
                                        <tr>
                                            <th class="mdl-data-table__cell--non-numeric">Nama</th>
                                            <th class="mdl-data-table__cell--non-numeric">Kode</th>
                                            <th class="mdl-data-table__cell--non-numeric">Alamat</th>
                                            <th class="mdl-data-table__cell--non-numeric">Ponsel</th>
                                            <th class="mdl-data-table__cell--non-numeric">Sebagai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($admin as $p)
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">
                                                <a href="/pegawai/{{ $p->slug }}">{{ $p->nama }}</a>
                                            </td>
                                            <td class="mdl-data-table__cell--non-numeric">{{ $p->kode }}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{ $p->alamat }}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{ $p->kontak }}</td>
                                            <td class="mdl-data-table__cell--non-numeric">
                                                <button class="btn btn-success disabled btn-sm m-b-10">{{ ucwords($p->role) }}</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{-- End of Admin --}}

                            {{-- Sales --}}
                            <div class="mdl-tabs__panel p-t-20" id="sales">
                                <table class="mdl-data-table ml-table-striped mdl-js-data-table mdl-data-table--selectable is-upgraded">
                                    <thead>
                                        <tr>
                                            <th class="mdl-data-table__cell--non-numeric">Nama</th>
                                            <th class="mdl-data-table__cell--non-numeric">Kode</th>
                                            <th class="mdl-data-table__cell--non-numeric">Kontak</th>
                                            <th class="mdl-data-table__cell--non-numeric">Toko yang Dipegang</th>
                                            <th class="mdl-data-table__cell--non-numeric">Omset</th>
                                            <th class="mdl-data-table__cell--non-numeric">Nota Hutang Toko</th>
                                            <th class="mdl-data-table__cell--non-numeric">Sebagai</th>
                                            <th class="mdl-data-table__cell--non-numeric"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($sales as $p)
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">
                                                <a href="/pegawai/{{ $p->slug }}">{{ $p->nama }}</a>
                                            </td>
                                            <td class="mdl-data-table__cell--non-numeric">{{ $p->kode }}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{ $p->kontak }}</td>
                                            <td class="mdl-data-table__cell--non-numeric">.......</td> 
                                            {{-- <td class="mdl-data-table__cell--non-numeric">{{ $p->alamat }}</td>  --}}
                                            <td class="mdl-data-table__cell--non-numeric">.......</td>
                                            <td class="mdl-data-table__cell--non-numeric">.......</td>
                                            <td class="mdl-data-table__cell--non-numeric">
                                                <button class="btn btn-default disabled btn-sm m-b-10">{{ ucwords($p->role) }}</button>
                                            </td>
                                            <td>
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-primary">Aksi</button>
                                                    <button type="button" class="btn btn-circle-right btn-primary dropdown-toggle m-r-20" data-bs-toggle="dropdown">
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="#">Info</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Hapus</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{-- End of Sales --}}

                            {{-- Kasir --}}
                            <div class="mdl-tabs__panel p-t-20" id="kasir">
                                <table class="mdl-data-table ml-table-striped mdl-js-data-table mdl-data-table--selectable is-upgraded">
                                    <thead>
                                        <tr>
                                            <th class="mdl-data-table__cell--non-numeric">Nama</th>
                                            <th class="mdl-data-table__cell--non-numeric">Kode</th>
                                            <th class="mdl-data-table__cell--non-numeric">Kontak</th>
                                            <th class="mdl-data-table__cell--non-numeric">Toko yang Dipegang</th>
                                            <th class="mdl-data-table__cell--non-numeric">Omset</th>
                                            <th class="mdl-data-table__cell--non-numeric">Nota Hutang Toko</th>
                                            <th class="mdl-data-table__cell--non-numeric">Sebagai</th>
                                            <th class="mdl-data-table__cell--non-numeric"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($kasir as $p)
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">
                                                <a href="/pegawai/{{ $p->slug }}">{{ $p->nama }}</a>
                                            </td>
                                            <td class="mdl-data-table__cell--non-numeric">{{ $p->kode }}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{ $p->kontak }}</td>
                                            <td class="mdl-data-table__cell--non-numeric">.......</td> 
                                            {{-- <td class="mdl-data-table__cell--non-numeric">{{ $p->alamat }}</td>  --}}
                                            <td class="mdl-data-table__cell--non-numeric">.......</td>
                                            <td class="mdl-data-table__cell--non-numeric">.......</td>
                                            <td class="mdl-data-table__cell--non-numeric">
                                                <button class="btn btn-warning disabled btn-sm m-b-10">{{ ucwords($p->role) }}</button>
                                            </td>
                                            <td>
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-primary">Aksi</button>
                                                    <button type="button" class="btn btn-circle-right btn-primary dropdown-toggle m-r-20" data-bs-toggle="dropdown">
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="#">Info</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Hapus</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{-- End of Kasir --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page content -->

			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">All Students List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Students</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">All Students List</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								<ul class="nav customtab nav-tabs" role="tablist">
									<li class="nav-item">
										<a href="#tab1" class="nav-link active" data-bs-toggle="tab">{{ $title }}</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head">
														<header>All Students List</header>
														<div class="tools">
															<a class="fa fa-repeat btn-color box-refresh"
																href="javascript:;"></a>
															<a class="t-collapse btn-color fa fa-chevron-down"
																href="javascript:;"></a>
															<a class="t-close btn-color fa fa-times"
																href="javascript:;"></a>
														</div>
													</div>
													<div class="card-body ">
														<div class="row">
															<div class="col-md-6 col-sm-6 col-6">
																<div class="btn-group">
																	<a href="add_professor.html" id="addRow"
																		class="btn btn-info">
																		Add New <i class="fa fa-plus"></i>
																	</a>
																</div>
															</div>
															<div class="col-md-6 col-sm-6 col-6">
																<div class="btn-group pull-right">
																	<a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
																		data-bs-toggle="dropdown">Tools
																		<i class="fa fa-angle-down"></i>
																	</a>
																	<ul class="dropdown-menu pull-right">
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-print"></i> Print </a>
																		</li>
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-file-pdf-o"></i> Save as
																				PDF </a>
																		</li>
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-file-excel-o"></i>
																				Export to Excel </a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="table-scrollable">
															<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
																<thead>
																	<tr>
																		<th></th>
																		<th> Roll No </th>
																		<th> Name </th>
																		<th> Department </th>
																		<th> Mobile </th>
																		<th> Email </th>
																		<th>Admission Date</th>
																		<th> Action </th>
																	</tr>
																</thead>
																<tbody>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="../assets/img/std/std1.jpg"
																				alt="">
																		</td>
																		<td class="left">18</td>
																		<td>Rajesh Bhatt</td>
																		<td class="left">Mechanical</td>
																		<td><a href="tel:4444565756">
																				4444565756 </a></td>
																		<td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#eb98839e938e99ab8c868a8287c5888486">
																				<span class="__cf_email__" data-cfemail="4032212a25332800272d21292c6e232f2d">[email&#160;protected]</span> </a></td>
																		<td class="left">22 Feb 2010</td>
																		<td>
																			<a href="edit_professor.html"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
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
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
@endsection
