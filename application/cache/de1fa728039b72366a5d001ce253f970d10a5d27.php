<?php $__env->startSection('title', 'Daftar Kategori Artikel - Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card">
                            <header class="card-header">
                                <?php echo e("Kelola Kategori Artikel"); ?> <a href="<?php echo e(base_url('admin/article/categories/create.html')); ?>"><button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</button></a>
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    </span>
                            </header>
                            <div class="card-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                        <thead>
                                            <tr>
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
                                            <tr>
                                                <th>Lorem Ipsum</th>
                                                <td>
                                                    <a href="<?php echo e(base_url('admin/article/categories/').'1'); ?>/delete.aspx" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Hapus</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
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
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/article_categories.blade.php ENDPATH**/ ?>