<?php $__env->startSection('title', 'User'); ?>

<?php $__env->startSection('container'); ?>
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card">
                            <header class="card-header">
                                <?php echo e("Kelola Pengguna"); ?>

                                    <span class="tools pull-right">
                                        <a href="" class="fa fa-plus"></a>
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    </span>
                            </header>
                            <div class="card-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
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
                                                    <th><img alt="" class="rounded-circle" style="height:32px; margin-right:10px" src="<?php echo e(base_url('media/photo_user/')); ?><?php echo e($user['photo']); ?>"> <?php echo e($user['nama']); ?></th>
                                                    <th><?php echo e($user['lev_user']); ?></th>
                                                    <th><?php echo e($user['email']); ?></th>
                                                    <th>
                                                        <a href="<?php echo e(base_url('admin/user/').$user['id_user']); ?>.html" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>
                                                        <a href="" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                                        <a href="" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                                    </th>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID Pengguna</th>
                                                <th>Nama Pengguna</th>
                                                <th>Level User</th>
                                                <th>Email</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
          </section>
      </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/user.blade.php ENDPATH**/ ?>