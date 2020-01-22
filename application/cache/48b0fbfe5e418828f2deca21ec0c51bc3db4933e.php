<?php $__env->startSection('title', 'Daftar Produk -  Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2"><?php echo e("Kelola Produk"); ?></h4>

                    <table id="no-config" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>ID Produk</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Pemilik</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($row['id_product']); ?></td>
                                    <td><?php echo e($row['nm_product']); ?></td>
                                    <td><?php echo e("Rp " . number_format($row['harga'],2,',','.')); ?></td>
                                    <td><?php echo e($row['nama']); ?></td>
                                    <td>
                                        <a href="<?php echo e(base_url('admin/products/').$row['id_product']); ?>.html" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                        <a href="<?php echo e(base_url('admin/products/').$row['id_product']); ?>/delete.aspx" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
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
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/products.blade.php ENDPATH**/ ?>