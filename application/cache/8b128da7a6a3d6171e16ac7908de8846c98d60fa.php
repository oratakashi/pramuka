<?php $__env->startSection('title', 'Preview Artikel - Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card">
                            <header class="card-header">
                                <?php echo e("Preview Artikel"); ?> <a href="<?php echo e(base_url('admin/article/pending.html')); ?>"><button class="btn btn-sm btn-danger">Batal</button></a>
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    </span>
                            </header>
                            <div class="card-body">
                                <img src="<?php echo e(base_url('media/article/').'sample.jpg'); ?>" alt="" style="width:100%;height:350px">
                                <!-- Judul Artikel -->
                                <h3 style="margin-top:20px"><?php echo e("Lorem Ipsum"); ?></h3>
                                <span style="margin-top:10px" class="text-primary"><?php echo e("21 Oktober 2019"); ?></span>
                                <div style="margin-top:30px">
                                    <p>
                                        Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. 
                                        Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, 
                                        saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks 
                                        dan mengacaknya untuk menjadi sebuah buku contoh huruf. 
                                        Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, 
                                        tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran
                                        Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop 
                                        Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="<?php echo e(base_url('admin/article/').'19100001'); ?>/activated.aspx" class="btn btn-sm btn-success col-md-12"><i class="fa fa-check"></i></a>
                                    </div>
                                    <div class="col-md-6">
                                    <a href="<?php echo e(base_url('admin/article/').'19100001'); ?>/deactivated.aspx" class="btn btn-sm btn-danger col-md-12"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
          </section>
      </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/article_preview.blade.php ENDPATH**/ ?>