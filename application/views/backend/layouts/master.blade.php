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
      @include('backend.layouts.sidebar')
      <!--sidebar end-->
      <!--main content start-->
      @yield('container')
      <!--main content end-->
      <!-- Right Slidebar start -->
      <div class="sb-slidebar sb-right sb-style-overlay">
          <h5 class="side-title">Online Customers</h5>
          <ul class="quick-chat-list">
              <li class="online">
                  <div class="media">
                      <a href="#" class="">
                          <img alt="" src="img/chat-avatar2.jpg" class="mr-3 rounded-circle">
                      </a>
                      <div class="media-body">
                          <strong>John Doe</strong>
                          <small>Dream Land, AU</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="">
                          <img alt="" src="img/chat-avatar.jpg" class="mr-3 rounded-circle">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge bg-important">3</span>
                          </div>
                          <strong>Jonathan Smith</strong>
                          <small>United States</small>
                      </div>
                  </div><!-- media -->
              </li>

              <li class="online">
                  <div class="media">
                      <a href="#" class="">
                          <img alt="" src="img/pro-ac-1.png" class="mr-3 rounded-circle">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge badge-success">5</span>
                          </div>
                          <strong>Jane Doe</strong>
                          <small>ABC, USA</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="">
                          <img alt="" src="img/avatar1.jpg" class="mr-3 rounded-circle">
                      </a>
                      <div class="media-body">
                          <strong>Anjelina Joli</strong>
                          <small>Fockland, UK</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="">
                          <img alt="" src="img/mail-avatar.jpg" class="mr-3 rounded-circle">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge bg-warning">7</span>
                          </div>
                          <strong>Mr Tasi</strong>
                          <small>Dream Land, USA</small>
                      </div>
                  </div><!-- media -->
              </li>
          </ul>
          <h5 class="side-title"> pending Task</h5>
          <ul class="p-task tasks-bar">
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Dashboard v1.3</div>
                          <div class="percent">40%</div>
                      </div>
                      <div class="progress">
                          <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-striped bg-success">
                              <span class="sr-only">40% Complete (success)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Database Update</div>
                          <div class="percent">60%</div>
                      </div>
                      <div class="progress">
                          <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-striped bg-warning">
                              <span class="sr-only">60% Complete (warning)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Iphone Development</div>
                          <div class="percent">87%</div>
                      </div>
                      <div class="progress">
                          <div style="width: 87%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-striped bg-info">
                              <span class="sr-only">87% Complete</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Mobile App</div>
                          <div class="percent">33%</div>
                      </div>
                      <div class="progress">
                          <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-striped bg-danger">
                              <span class="sr-only">33% Complete (danger)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Dashboard v1.3</div>
                          <div class="percent">45%</div>
                      </div>
                      <div class="progress">
                          <div style="width: 45%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar progress-bar-striped">
                              <span class="sr-only">45% Complete</span>
                          </div>
                      </div>

                  </a>
              </li>
              <li class="external">
                  <a href="#">See All Tasks</a>
              </li>
          </ul>
      </div>
      <!-- Right Slidebar end -->

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

  <script type="text/javascript" language="javascript" src="{{ base_url('assets/backend/') }}assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="{{ base_url('assets/backend/') }}assets/data-tables/DT_bootstrap.js"></script>


    <!--common script for all pages-->
    <script src="{{ base_url('assets/backend/') }}js/common-scripts.js"></script>
    <script src="{{ base_url('assets/backend/') }}js/dynamic_table_init.js"></script>


</html>
