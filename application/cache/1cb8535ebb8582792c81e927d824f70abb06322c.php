<?php $__env->startSection('title', 'Tambah Visi Baru -  Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2"><?php echo e("Tambah Visi Baru"); ?> <a href="<?php echo e(base_url('admin/informasi.html')); ?>"><button class="btn btn-sm btn-danger">Batal</button></a></h4>
                    <form action="<?php echo e(base_url('admin/visi/create.aspx')); ?>" method="post" enctype="multipart/form-data" style="margin-top:30px">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?php echo e(base_url('assets/backend/img/visi.svg')); ?>" alt="" style="margin-top:150px">
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Judul Visi</label>
                                    <input type="text" name="judul" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Detail Visi</label>
                                    <textarea name="isi" id="" cols="30" rows="10" class="richtext"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Simpan" class="btn btn-primary pull-right">
                                </div>
                            </div>
                        </div>
                    </form>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/visi_create.blade.php ENDPATH**/ ?>