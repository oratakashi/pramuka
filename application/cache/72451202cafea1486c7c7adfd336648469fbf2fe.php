<?php $__env->startSection('title', 'Daftar Artikel - Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card">
                            <header class="card-header">
                                <?php echo e("Kelola Artikel"); ?> 
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
                                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($artikel['judul']); ?></td>
                                                <td><?php echo e($artikel['tgl_post']); ?></td>
                                                <td><?php echo e($artikel['nama']); ?></td>
                                                <td> <?php if($artikel['status'] == "1") {?>
                                                    <span class="badge badge-success">Aktif</span>
                                                    <?php } else if($artikel['status'] == "0"){ ?>
                                                        <span class="badge badge-danger">Tidak Aktif</span>
                                                    <?php } ?>
                                                </td>
                                                <td><?php echo e($artikel['nm_kategori']); ?></td>
                                                <td>
                                                    <?php if($_SESSION['lev_user']=='Administrator'): ?>
                                                    <div class="btn-group">
                                                        <?php if($artikel['status'] == 1){ ?>
                                                            
                                                            <a href="<?php echo e(base_url('admin/article/').$artikel['id_artikel']); ?>/deactivated.aspx"><button type="button" class="btn btn-sm btn-danger">Nonaktifkan</button></a>
                                                        <?php } else if($artikel['status'] == 0) {?>
                                                            <a href="<?php echo e(base_url('admin/article/').$artikel['id_artikel']); ?>/activated.aspx"><button type="button" class="btn btn-sm btn-success">Aktifkan</button></a>
                                                        <?php } ?>
                                                        <?php if($artikel['status'] == 1){ ?>
                                                            <button type="button" class="btn btn-sm btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                        <?php } else if($artikel['status'] == 0) {?>
                                                            <button type="button" class="btn btn-sm btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>    
                                                        <?php } ?>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="<?php echo e(base_url('admin/article/').$artikel['id_artikel']); ?>.html">Ubah</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="<?php echo e(base_url('admin/article/').$artikel['id_artikel']); ?>/delete.aspx">Hapus</a>
                                                        </div>
                                                    </div>
                                                    <?php elseif($_SESSION['lev_user']=='Pengurus'): ?>
                                                    <div class="btn-group">
                                                        <a href="<?php echo e(base_url('admin/article/').$artikel['id_artikel']); ?>.html"><button type="button" class="btn btn-sm btn-primary">Aktifkan</button></a>
                                                        <?php if($artikel['status'] == 1){ ?>
                                                            <button type="button" class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                        <?php } else if($artikel['status'] == 0) {?>
                                                            <button type="button" class="btn btn-sm btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>    
                                                        <?php } ?>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="<?php echo e(base_url('admin/article/').$artikel['id_artikel']); ?>/delete.aspx">Hapus</a>
                                                        </div>
                                                    </div>
                                                    <?php endif; ?>
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
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/article.blade.php ENDPATH**/ ?>