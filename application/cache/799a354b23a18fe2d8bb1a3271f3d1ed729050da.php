<?php $__env->startSection('title', 'Ubah Kwarran -  Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2"><?php echo e("Ubah Kwarran"); ?> <a href="<?php echo e(base_url('admin/informasi.html')); ?>"><button class="btn btn-sm btn-danger">Batal</button></a></h4>
                    <form action="<?php echo e(base_url('admin/kwarran/').$data['id_kecamatan']); ?>/update.aspx" method="post" enctype="multipart/form-data" style="margin-top:30px">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?php echo e(base_url('assets/backend/img/visi.svg')); ?>" alt="" style="margin-top:150px">
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">No Kwarran</label>
                                    <input type="text" name="no" id="" readonly class="form-control" value="<?php echo e($data['id_kecamatan']); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Kwarran</label>
                                    <input type="text" name="nama" id="" class="form-control" value="<?php echo e($data['nama_kecamatan']); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Gugus Depan</label>
                                    <input type="text" name="gugusdepan" id="" class="form-control" value="<?php echo e($data['gugusdepan']); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Anggota</label>
                                    <input type="text" name="anggota" id="" class="form-control" value="<?php echo e($data['anggota']); ?>">
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
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/kwarran_edit.blade.php ENDPATH**/ ?>