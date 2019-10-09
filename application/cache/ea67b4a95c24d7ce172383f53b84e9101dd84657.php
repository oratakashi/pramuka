<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/flatlab-4/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2019 11:53:56 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="<?php echo e(base_url('assets/backend/')); ?>img/favicon.html">

    <title><?php echo e($title); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(base_url('assets/backend/')); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(base_url('assets/backend/')); ?>css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo e(base_url('assets/backend/')); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo e(base_url('assets/backend/')); ?>css/style.css" rel="stylesheet">
    <link href="<?php echo e(base_url('assets/backend/')); ?>css/style-responsive.css" rel="stylesheet" />


</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="" method="post">
        <h2 class="form-signin-heading">Area Administrator</h2>
        <div id="alert"></div>
        <div class="login-wrap">
            <div class="form-group">
                <label for="">Alamat Email</label>
                <input type="text" class="form-control" required id="email" name="email" placeholder="Alamat Email" autofocus>
            </div>
            <div class="form-group">
                <label for="">Kata Sandi</label>
                <input type="password" required class="form-control" id="password" placeholder="Kata Sandi">
            </div>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
        </div>
      </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo e(base_url('assets/backend/')); ?>js/jquery.js"></script>
    <script src="<?php echo e(base_url('assets/backend/')); ?>js/bootstrap.bundle.min.js"></script>
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
                    "password" : $('#password').val()
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
                                'id_user'  : response.data.id_user,
                                'nama'      : response.data.nama,
                                'photo'     : response.data.photo
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
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/login.blade.php ENDPATH**/ ?>