<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{base_url('assets/backend/')}}img/core-img/favicon.png">

    <!-- These plugins only need for the run this page -->
    <link rel="stylesheet" href="{{base_url('assets/backend/')}}css/default-assets/datatables.bootstrap4.css">
    <link rel="stylesheet" href="{{base_url('assets/backend/')}}css/default-assets/responsive.bootstrap4.css">
    <!-- These plugins only need for the run this page -->
    <link rel="stylesheet" href="{{base_url('assets/backend/')}}css/default-assets/buttons.bootstrap4.css">
    <link rel="stylesheet" href="{{base_url('assets/backend/')}}css/default-assets/select.bootstrap4.css">
    <link rel="stylesheet" href="{{base_url('assets/backend/')}}css/default-assets/morris.css">

    <!-- These plugins only need for the run this page -->
    <link rel="stylesheet" href="{{base_url('assets/backend/')}}css/default-assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{base_url('assets/backend/')}}css/default-assets/owl.carousel-default.css">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="{{base_url('assets/backend/')}}style.css">

    <!-- These plugins only need for the run this page -->
    <link rel="stylesheet" href="{{base_url('assets/backend/')}}css/dropzone.min.css">
    <link rel="stylesheet" href="{{base_url('assets/backend/')}}css/default-assets/dropify.min.css">

    <script src="{{base_url('assets/backend/')}}js/jquery.min.js"></script>

    <!-- These plugins only need for the run this page -->
    <script src="{{base_url('assets/backend/')}}js/default-assets/jquery.datatables.min.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/datatables.bootstrap4.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/datatable-responsive.min.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/responsive.bootstrap4.min.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/datatable-button.min.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/button.bootstrap4.min.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/button.html5.min.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/button.flash.min.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/button.print.min.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/datatables.keytable.min.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/datatables.select.min.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/demo.datatable-init.js"></script>

    <!-- Date Range -->
    <link rel="stylesheet" type="text/css" href="{{ base_url('assets/backend/') }}assets/bootstrap-datepicker/css/datepicker.css" />
    <script type="text/javascript" src="{{ base_url('assets/backend/') }}assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!-- These plugins only need for the run this page -->
    <script src="{{base_url('assets/backend/')}}js/dropzone.min.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/dropzone-custom.js"></script>

    <script src="{{ base_url('assets/tinymce/') }}tinymce.min.js"></script>
    <script>
        tinyMCE.init({
            selector: ".richtext",
            height: 350,
            setup: function (editor) {
                editor.on('change', function () {
                    tinymce.triggerSave();
                });
            },
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen link",
                "insertdatetime media table contextmenu paste imagetools responsivefilemanager"
            ],
            toolbar: "insertfile undo redo | paste | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | link | | responsivefilemanager ",
            paste_as_text: true,
            menubar: false,
            statusbar: false,

            external_filemanager_path:"{{base_url()}}assets/filemanager/",
            filemanager_title:"Pengelola Berkas" ,
            external_plugins: { "filemanager" : "{{base_url()}}assets//filemanager/plugin.min.js"}
        });
    </script>

</head>

<body>
    <!-- Preloader -->
    <div id="droba-loader">
        <div class="loader"></div>
    </div>
    <!--Preloader-->

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="ecaps-page-wrapper">
        <!-- Sidemenu Area -->
        
        @if($_SESSION['lev_user']=='Administrator')
            @include('backend.layouts.sidebar')
        @elseif($_SESSION['lev_user']=='Pengurus')
            @include('backend.pengurus.sidebar')
        @endif
        <!-- Page Content -->
        <div class="ecaps-page-content">
            <!-- Top Header Area -->
            @include('backend.layouts.header')

            <!-- Main Content Area -->
            <div class="main-content">
                @yield('container')

                <!-- Footer Area -->
                @include('backend.layouts.footer')
            </div>
        </div>
    </div>
    <!-- ======================================
    ********* Page Wrapper Area End ***********
    ======================================= -->

    <!-- Must needed plugins to the run this Template -->
    <script src="{{base_url('assets/backend/')}}js/popper.min.js"></script>
    <script src="{{base_url('assets/backend/')}}js/bootstrap.min.js"></script>
    <script src="{{base_url('assets/backend/')}}js/bundle.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/date-time.js"></script>

    <!-- Active JS -->
    <script src="{{base_url('assets/backend/')}}js/default-assets/active.js"></script>

    <!-- These plugins only need for the run this page -->

    <script src="{{base_url('assets/backend/')}}js/default-assets/chart.bundle.min.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/chart.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/line-chart-custom.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/am-chart.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/gauge.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/serial.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/light.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/ammap.min.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/worldlow.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/radar.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/widget-page-chart-active.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/morris/morris.min.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/morris/raphael.min.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/morris/morris.custom.js"></script>
    <!-- These plugins only need for the run this page -->
    <script src="{{base_url('assets/backend/')}}js/default-assets/owl.carousel.min.js"></script>
    <script src="{{base_url('assets/backend/')}}js/default-assets/owl.carousel-custom.js"></script>

</html>