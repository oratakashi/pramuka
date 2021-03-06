<?php $__env->startSection('title', 'Ganti Kata Sandi -  Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <?php if($_SESSION['lev_user']=='Administrator'): ?>
                    <form action="<?php echo e(base_url('admin/password.aspx')); ?>" method="post" enctype="multipart/form-data">
                <?php elseif($_SESSION['lev_user']=='Pengurus'): ?>
                    <form action="<?php echo e(base_url('pengurus/password.aspx')); ?>" method="post" enctype="multipart/form-data">
                <?php endif; ?>
                <div class="card-body">
                    <h4 class="card-title mb-2">
                        <?php echo e("Ganti Kata Sandi"); ?>

                        <span class="tools pull-right">
                            <a href="#" id="btnBack"><button class="btn btn-sm btn-danger">Kembali</button></a>
                            <input type="submit" value="Simpan" class="btn btn-sm btn-primary">
                        </span>
                    </h4>
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
                </div> <!-- end card body-->
                </form>
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
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
            <?php if($_SESSION['lev_user']=='Administrator'): ?>
                window.location.replace("<?php echo e(base_url('admin/index.html')); ?>");
            <?php elseif($_SESSION['lev_user']=='Pengurus'): ?>
                window.location.replace("<?php echo e(base_url('pengurus/index.html')); ?>");
            <?php endif; ?>
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/password.blade.php ENDPATH**/ ?>