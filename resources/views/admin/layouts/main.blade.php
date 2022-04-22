<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Gudangbaja" />
    <meta name="author" content="Gudangbaja" />
    <title>Gudang Baja | Prototype</title>
    <!-- google font -->
    <link href="{{ asset('admin/fonts.googleapis.com/css6079.css?family=Poppins:300,400,500,600,700') }}" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="{{ asset('admin/fonts/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/fonts/material-design-icons/material-icon.css') }}" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="{{ asset('admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/plugins/summernote/summernote.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/flatpicker/css/flatpickr.min.css') }}" rel="stylesheet" />
    <!-- Material Design Lite CSS -->
    <link href="{{ asset('admin/css/material_style.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/material/material.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" rel="stylesheet" media="screen">
    <!-- inbox style -->
    <link href="{{ asset('admin/css/pages/inbox.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="{{ asset('admin/css/theme/dark/theme_style.css') }}" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="{{ asset('admin/css/theme/dark/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/theme/dark/theme-color.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('admin/css/pages/formlayout.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/responsive.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('admin/plugins/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet">
    <!-- data tables -->
    <link href="{{ asset('admin/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- dropzone -->
    <link href="{{ asset('admin/plugins/dropzone/dropzone.css') }}" rel="stylesheet" media="screen">
    <!--tagsinput-->
    <link href="{{ asset('admin/plugins/jquery-tags-input/jquery-tags-input.css') }}" rel="stylesheet">
    <!-- Date Time item CSS -->
    <link href="{{ asset('admin/plugins/flatpicker/css/flatpickr.min.css') }}" rel="stylesheet" />
    <!--select2-->
    <link href="{{ asset('admin/plugins/select2/css/select2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    {{-- <link href="{{ asset('admin/img/favicon.ico') }}" rel="shortcut icon" /> --}}
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color logo-dark dark-theme">
    <div class="page-wrapper">

        @include('admin/layouts/header')

        <!-- start page container -->
        <div class="page-container">
            @include('admin/layouts/sidebar')
            @yield('admin/index')
        </div>
        <!-- end page container -->

        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2022 &copy; Theme by
                <a href="#" target="_top" class="makerCss">Gudangbaja</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->
        
    </div>

    <!-- start js include path -->
    <script src="{{ asset('admin/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}" data-cfasync="false"></script>
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/popper/popper.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-blockui/jquery.blockui.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ asset('admin/js/pages/sparkline/sparkline-data.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap-datepicker/datepicker-init.js') }}"></script>
	<script src="{{ asset('admin/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}" charset="UTF-8"></script>
    <script src="{{ asset('admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker-init.js') }}" charset="UTF-8"></script>
    <script src="{{ asset('admin/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker-init.js') }}" charset="UTF-8"></script>
    <script src="{{ asset('admin/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') }}" charset="UTF-8"></script>
    <!-- Common js-->
    <script src="{{ asset('admin/js/app.js') }}"></script>
    <script src="{{ asset('admin/js/layout.js') }}"></script>
    <script src="{{ asset('admin/js/theme-color.js') }}"></script>
    <!-- Material -->
    <script src="{{ asset('admin/plugins/material/material.min.js') }}"></script>
	<script src="{{ asset('admin/js/pages/material-select/getmdl-select.js') }}"></script>
	<script src="{{ asset('admin/plugins/flatpicker/js/flatpicker.min.js') }}"></script>
	<script src="{{ asset('admin/js/pages/date-time/date-time.init.js') }}"></script>
    <script src="{{ asset('admin/plugins/material/material.min.js') }}"></script>
    <!--apex chart-->
    <script src="{{ asset('admin/plugins/apexcharts/apexcharts.min.js') }}"></script>
	<!-- Page Specific JS File -->
	<script src="{{ asset('admin/js/pages/chart/apex/apexcharts.data.js') }}"></script>
    <!-- summernote -->
    <script src="{{ asset('admin/plugins/summernote/summernote.js') }}"></script>
    <script src="{{ asset('admin/js/pages/summernote/summernote-data.js') }}"></script>
    <!-- data tables -->
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/js/pages/table/table_data.js') }}"></script>
    <!-- dropzone -->
    <script src="{{ asset('admin/plugins/dropzone/dropzone.js') }}"></script>
	<script src="{{ asset('admin/plugins/dropzone/dropzone-call.js') }}"></script>
    <!--tags input-->
    <script src="{{ asset('admin/plugins/jquery-tags-input/jquery-tags-input.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-tags-input/jquery-tags-input-init.js') }}"></script>
    <!--select2-->
    <script src="{{ asset('admin/plugins/select2/js/select2.js') }}"></script>
    <script src="{{ asset('admin/js/pages/select2/select2-init.js') }}"></script>
    <!-- end js include path -->


</body>


</html>