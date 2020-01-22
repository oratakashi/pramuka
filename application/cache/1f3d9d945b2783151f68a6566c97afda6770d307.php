<?php $__env->startSection('title', 'Daftar Dokumen - Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2"><?php echo e("Kelola Dokumen"); ?> </h4>
                    <div class="row">
                        <div class="col-md-12">
                            <table id="no-config" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Nama File</th>
                                        <th>Total Download</th>
                                        <th>Pengunggah</th>
                                        <th>Ukuran</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $size = 0; ?>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($row['nama_file']); ?></td>
                                            <td><?php echo e($row['total_download']); ?></td>
                                            <td><?php echo e($row['nama']); ?></td>
                                            <td>
                                                <?php
                                                    $sizeMB = $row['size'] / 1024;
                                                    $sizeMB = round($sizeMB, 2);
                                                    $size += $sizeMB;
                                                    echo $sizeMB." MB";
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo e(base_url('media/files/').$row['nama_file']); ?>" class="btn btn-primary"><i class="fa fa-cloud-download"></i></a>
                                                <a href="<?php echo e(base_url('admin/documents/').$row['id_dokumen'].'/delete.aspx'); ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row" style="margin-top:30px">
                        <div class="col-md-10"></div>
                        <div class="col-md-2">
                            <p>Ukuran Total : <?php echo e($size); ?>Mb</p>
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/documents.blade.php ENDPATH**/ ?>