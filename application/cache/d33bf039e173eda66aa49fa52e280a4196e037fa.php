<?php $__env->startSection('title', 'Informasi Website - Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-sm-12">
                <section class="card">
                    <?php if($_SESSION['lev_user']=='Administrator'): ?>
                        <form action="<?php echo e(base_url('admin/password.aspx')); ?>" method="post" enctype="multipart/form-data">
                    <?php else: ?>
                        <form action="<?php echo e(base_url('pengurus/password.aspx')); ?>" method="post" enctype="multipart/form-data">
                    <?php endif; ?>
                    <header class="card-header">
                        <?php echo e("Ganti Kata Sandi"); ?>

                            <span class="tools pull-right">
                                <a href="#" id="btnBack"><button class="btn btn-sm btn-danger">Kembali</button></a>
                                <input type="submit" value="Simpan" class="btn btn-sm btn-primary">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                            </span>
                    </header>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="<?php echo e(base_url('assets/backend/img/password.svg')); ?>" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="">Kata sandi lama</label>
                                        <input type="password" name="old_pass" id="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kata sandi baru</label>
                                        <input type="password" name="new_pass" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
<script>
    $(document).ready(function () {
        $('form').on('keyup keypress', function(e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) { 
                e.preventDefault();
                return false;
            }
        });
        $('#btnBack').click(function (e) { 
            e.preventDefault();
            window.location.replace("<?php echo e(base_url('admin/index.html')); ?>");
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/password.blade.php ENDPATH**/ ?>