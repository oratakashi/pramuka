<?php $__env->startSection('title', 'Daftar Artikel Pending - Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card">
                            <header class="card-header">
                                <?php echo e("Kelola Artikel Pending"); ?> 
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    </span>
                            </header>
                            <div class="card-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
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
                                            <!--    
                                                Mengko Bagian Iki di Looping anggo foreach, 
                                                Contoh e delok seng wes terimplementasi

                                                Format :
                                                id : Tahun 2 digit, bulan 2 digit sisane nomer urut
                                                tgl : 21 Oktober 2019
                                                nama : nama seng post
                                                status : Aktif, Tidak Aktif, nek aktif 1 nek ga aktif 0, warna abang karo ijo
                                             -->
                                             
                                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($artikel['judul']); ?></td>
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
                                        <tfoot>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Tgl Post</th>
                                                <th>Penulis</th>
                                                <th>Status</th>
                                                <th>Kategori</th>
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
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/article_pending.blade.php ENDPATH**/ ?>