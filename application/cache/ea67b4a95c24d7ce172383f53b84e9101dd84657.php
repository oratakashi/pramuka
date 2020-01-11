<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
     <title><?php echo e($title); ?></title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="<?php echo e(base_url('assets/backend/')); ?>style.css">

</head>

<body class="login-area">

    <!-- Preloader -->
    <div id="droba-loader">
        <div class="loader"></div>
    </div>
    <!--Preloader-->

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="main-content- h-100vh">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-7 col-lg-5 mx-auto">
                    <!-- Middle Box -->
                    <div class="middle-box">
                        <div class="card">
                            <div class="card-body p-4">

                                <h4 class="font-18">Sign In</h4>
                                <p class="text-muted mb-4">Selamat datang kembali Administrator</p>
                        
                                <form action="#" class="form-signin">
                                    <div class="form-group">
                                        <label class="float-left" for="emailaddress">Alamat Email</label>
                                        <input class="form-control" type="email" id="email" required="Email wajib di isi" placeholder="Alamat Email Anda">
                                    </div>

                                    <div class="form-group">
                                        <label class="float-left" for="password">Kata Sandi</label>
                                        <input class="form-control" type="password" required="" id="password" placeholder="Kata Sandi anda">
                                    </div>
                                    
                                    <div class="form-group">
                                        <div id="alert">
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Sign In </button>
                                    </div>
                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================================
    ********* Page Wrapper Area End ***********
    ======================================= -->

    <!-- Must needed plugins to the run this Template -->
    <script src="<?php echo e(base_url('assets/backend/')); ?>js/jquery.min.js"></script>
    <script src="<?php echo e(base_url('assets/backend/')); ?>js/popper.min.js"></script>
    <script src="<?php echo e(base_url('assets/backend/')); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo e(base_url('assets/backend/')); ?>js/bundle.js"></script>

    <!-- Active JS -->
    <script src="<?php echo e(base_url('assets/backend/')); ?>js/default-assets/active.js"></script>
    <script>
        $('.form-signin').submit(function (e) { 
            e.preventDefault();
            $('#alert').html('');
            $('button').attr('disabled', true);
            $('button').html('Tunggu Sebentar...');
            $.ajax({
                type: "post",
                url: "<?php echo e(base_url('admin/validation.aspx')); ?>",
                data: {
                    "email" : $('#email').val(),
                    "password" : $('#password').val(),
                    "type" : "admin"
                },
                dataType: "json",
                success: function (response) {
                    if(response.success){
                        console.log(response);
                        $.ajax({
                            type: "post",
                            url: "<?php echo e(base_url('admin/login.aspx')); ?>",
                            data: {
                                'email'     : response.data.email,
                                'id_user'   : response.data.id_user,
                                'nama'      : response.data.nama,
                                'photo'     : response.data.photo,
                                'lev_user'  : response.data.lev_user
                            },
                            dataType: "json",
                            success: function (response) {
                                if(response.success){
                                    // console.log(response);
                                    window.location.replace('<?php echo e(base_url("admin/index.html")); ?>');
                                }else{
                                    $('button').attr('disabled', false);
                                    $('button').html('Sign in');
                                    $('#alert').html(`<div class="alert alert-danger" role="alert">
                                            Gagal melakukan login, Silahkan coba lagi !
                                        </div>`);
                                }
                            }
                        });
                    }else{
                        $('button').attr('disabled', false);
                        $('button').html('Sign in');
                        $('#alert').html(`<div class="alert alert-danger" role="alert">
                                  Email atau katasandi salah
                              </div>`);
                    }
                }
            });
        });
    </script>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/login.blade.php ENDPATH**/ ?>