<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ base_url('assets/backend/') }}css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ base_url('assets/backend/') }}css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="{{ base_url('assets/backend/') }}assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{{ base_url('assets/backend/') }}assets/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css" >
    <!--right slidebar-->
    <link href="{{ base_url('assets/backend/') }}css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ base_url('assets/backend/') }}css/style.css" rel="stylesheet">
    <link href="{{ base_url('assets/backend/') }}css/style-responsive.css" rel="stylesheet" />

    <!--dynamic table-->
    <link href="{{ base_url('assets/backend/') }}assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="{{ base_url('assets/backend/') }}assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ base_url('assets/backend/') }}assets/data-tables/DT_bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="{{ base_url('assets/backend/') }}assets/bootstrap-datepicker/css/datepicker.css" />

    <script src="{{ base_url('assets/backend/') }}js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="{{ base_url('assets/backend/') }}assets/advanced-datatable/media/js/datatables.js"></script>
    <script type="text/javascript" language="javascript" src="{{ base_url('assets/backend/') }}assets/advanced-datatable/media/js/datatables.bootstrap.js"></script>
    <script type="text/javascript" src="{{ base_url('assets/backend/') }}assets/data-tables/DT_bootstrap.js"></script>
    <script src="{{ base_url('assets/tinymce/') }}tinymce.min.js"></script>
    <script type="text/javascript" src="{{ base_url('assets/backend/') }}assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
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
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste imagetools responsivefilemanager"
            ],
            toolbar: "insertfile undo redo | paste | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | responsivefilemanager ",
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

  <section id="container" class="">
      <!--header start-->
      @include('backend.layouts.header')
      <!--header end-->
      <!--sidebar start-->
      @if($_SESSION['lev_user']=='Administrator')
        @include('backend.layouts.sidebar')
      @else
        @include('backend.pengurus.sidebar')
      @endif
      <!--sidebar end-->
      <!--main content start-->
      @yield('container')
      <!--main content end-->

      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              {{ date('Y') }} &copy; PramukaLumajang
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ base_url('assets/backend/') }}js/bootstrap.bundle.min.js"></script>
    <script class="include" type="text/javascript" src="{{ base_url('assets/backend/') }}js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="{{ base_url('assets/backend/') }}js/jquery.scrollTo.min.js"></script>
    <script src="{{ base_url('assets/backend/') }}js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="{{ base_url('assets/backend/') }}js/respond.min.js" ></script>

  <!--right slidebar-->
  <script src="{{ base_url('assets/backend/') }}js/slidebars.min.js"></script>

  <!-- BEGIN:File Upload Plugin JS files-->
  <script src="{{ base_url('assets/backend/') }}assets/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
  <!-- The Templates plugin is included to render the upload/download listings -->
  <script src="{{ base_url('assets/backend/') }}assets/jquery-file-upload/js/vendor/tmpl.min.js"></script>
  <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
  <script src="{{ base_url('assets/backend/') }}assets/jquery-file-upload/js/vendor/load-image.min.js"></script>
  <!-- The Canvas to Blob plugin is included for image resizing functionality -->
  <script src="{{ base_url('assets/backend/') }}assets/jquery-file-upload/js/vendor/canvas-to-blob.min.js"></script>
  <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
  <script src="{{ base_url('assets/backend/') }}assets/jquery-file-upload/js/jquery.iframe-transport.js"></script>
  <!-- The basic File Upload plugin -->
  <script src="{{ base_url('assets/backend/') }}assets/jquery-file-upload/js/jquery.fileupload.js"></script>
  <!-- The File Upload file processing plugin -->
  <script src="{{ base_url('assets/backend/') }}assets/jquery-file-upload/js/jquery.fileupload-fp.js"></script>
  <!-- The File Upload user interface plugin -->
  <script src="{{ base_url('assets/backend/') }}assets/jquery-file-upload/js/jquery.fileupload-ui.js"></script>

    <!--common script for all pages-->
    <script src="{{ base_url('assets/backend/') }}js/common-scripts.js"></script>
    <script src="{{ base_url('assets/backend/') }}js/dynamic_table_init.js"></script>


</html>
