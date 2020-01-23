<?php $__env->startSection('title', 'Daftar Artikel Pending -  Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2"><?php echo e("Kelola Artikel Pending"); ?> </h4>

                    <table id="no-config" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Tgl Post</th>
                                <th>Penulis</th>
                                <th>Status</th>
                                <th>Kategori</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php
                                            if(strlen($artikel['judul'])>40){
                                                echo substr($artikel['judul'], 0, 40)."...";
                                            }else{
                                                echo $artikel['judul'];
                                            }
                                        ?>
                                    </td>
                                    <td><?php echo e($artikel['tgl_post']); ?></td>
                                    <td><?php echo e($artikel['nama']); ?></td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td><?php echo e($artikel['nm_kategori']); ?></td>
                                    <td>
                                        <a href="<?php echo e(base_url('admin/article/').$artikel['id_artikel']); ?>/views.html" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> Lihat</a>
                                        <a href="<?php echo e(base_url('admin/article/').$artikel['id_artikel']); ?>/activated.aspx" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                        <a href="<?php echo e(base_url('admin/article/').$artikel['id_artikel']); ?>/deactivated.aspx" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
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
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/article_pending.blade.php ENDPATH**/ ?>