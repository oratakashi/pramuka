<?php $__env->startSection('title', 'Daftar Lagu - Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card">
                            <header class="card-header">
                                <?php echo e("Kelola Lagu"); ?> 
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    </span>
                            </header>
                            <div class="card-body">
                                <div class="adv-table">
                                    <table  class="table table-bordered table-striped" id="dynamic-table">
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
                                            <?php $__currentLoopData = $data_lagu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                        <a href="<?php echo e(base_url('media/music/').$row['nama_file']); ?>" target="blank"><button class="btn btn-primary"><i class="fa fa-cloud-download"></i></button></a>
                                                        <a href="<?php echo e(base_url('admin/song/').$row['id_lagu'].'/delete.aspx'); ?>"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nama File</th>
                                                <th>Total Download</th>
                                                <th>Pengunggah</th>
                                                <th>Ukuran</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-10"></div>
                                    <div class="col-md-2">
                                        <p>Ukuran Total : <?php echo e($size); ?>Mb</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
          </section>
      </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/song.blade.php ENDPATH**/ ?>