<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="Login Gudangbaja" />
	<meta name="author" content="Gudangbaja" />
	<title>Gudangbaja | Prototype</title>
	<!-- google font -->
	<link href="../../../../../../fonts.googleapis.com/cssbc32.css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="{{ asset('admin/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('admin/plugins/iconic/css/material-design-iconic-font.min.css') }}" rel="stylesheet" />
	<!-- bootstrap -->
	<link href="{{ asset('admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link href="{{ asset('admin/css/pages/extra_pages.css') }}" rel="stylesheet" />
	<!-- favicon -->
	<link href="{{ asset('admin/img/favicon.ico') }}" rel="shortcut icon" />
</head>

<body>
	<div class="limiter">
		<div class="container-login100 page-background">
            {{ $slot }}
			{{-- <div class="wrap-login100">
				<form action="/login" class="login100-form validate-form" method="post">
					@csrf
					<span class="login100-form-logo">
						<img alt="" src="{{ asset('admin/img/logo-2.png') }}">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">Log in</span>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100 @error ('username') is-invalid @enderror" name="username" id="username" placeholder="Username*" value="{{ old('username') }}" type="text" autofocus required>
						@error('name')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" name="password" id="password" placeholder="Password*" type="password" required>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">Remember me</label>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">Login</button>
					</div>
				</form>
			</div> --}}
		</div>
	</div>
	<!-- start js include path -->
	<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
	<!-- bootstrap -->
	<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('admin/js/pages/extra-pages/pages.js') }}"></script>
	<!-- end js include path -->
</body>

</html>