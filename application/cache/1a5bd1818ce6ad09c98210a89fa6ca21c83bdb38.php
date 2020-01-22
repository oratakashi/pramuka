<?php $__env->startSection('title', 'Daftar Pengurus -  Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2"><?php echo e("Kelola Pengurus"); ?> <a href="<?php echo e(base_url('admin/pengurus/create.html')); ?>"><button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</button></a></h4>


                    <table id="no-config" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Nama Pengurus</th>
                                <th>Jabatan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $pengurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th><img alt="" class="rounded-circle" style="height:32px; width:32px; margin-right:10px" src="<?php echo e(base_url('media/pengurus/')); ?><?php echo e($row['photo']); ?>"> <?php echo e($row['nama']); ?></th>
                                <td><?php echo e($row['jabatan']); ?></td>
                                <td>
                                    <a href="<?php echo e(base_url('admin/pengurus/').$row['id_pengurus']); ?>/update.html" class="btn btn-success"><i class="fa fa-pencil"></i> Ubah</a>
                                    <a href="<?php echo e(base_url('admin/pengurus/').$row['id_pengurus']); ?>/delete.aspx" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/pengurus.blade.php ENDPATH**/ ?>