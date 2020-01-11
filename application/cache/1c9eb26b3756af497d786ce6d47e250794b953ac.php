<?php $__env->startSection('title', 'Daftar Pengguna -  Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2"><?php echo e("Kelola Pengguna"); ?> <a href="<?php echo e(base_url('admin/user/create.html')); ?>"><button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</button></a></h4>


                    <table id="no-config" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>ID Pengguna</th>
                                <th>Nama Pengguna</th>
                                <th>Level User</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th><?php echo e($user['id_user']); ?></th>
                                    <th><img alt="" class="rounded-circle" style="height:32px; width:32px; margin-right:10px" src="<?php echo e(base_url('media/photo_user/')); ?><?php echo e($user['photo']); ?>"> <?php echo e($user['nama']); ?></th>
                                    <th><?php echo e($user['lev_user']); ?></th>
                                    <th><?php echo e($user['email']); ?></th>
                                    <th>
                                        <a href="<?php echo e(base_url('admin/user/').$user['id_user']); ?>.html" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>
                                        <a href="<?php echo e(base_url('admin/user/').$user['id_user']); ?>.aspx" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                        <a href="<?php echo e(base_url('admin/user/delete/').$user['id_user']); ?>.aspx" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                    </th>
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
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/user.blade.php ENDPATH**/ ?>