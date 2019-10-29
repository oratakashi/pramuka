<?php $__env->startSection('title', 'Tambah Kategori Artikel - Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-sm-12">
                <section class="card">
                    <header class="card-header">
                        <?php echo e("Tambah Kategori Artikel"); ?> <a href="<?php echo e(base_url('admin/article/categories.html')); ?>"><button class="btn btn-sm btn-danger">Batal</button></a>
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                            </span>
                    </header>
                    <div class="card-body">
                        <form action="<?php echo e(base_url('admin/article/categories/create.aspx')); ?>" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row"> 
                                        <aside class="profile-info col-lg-12">
                                            <section class="card">
                                                <div class="card-body bio-graph-info"> 
                                                    <div class="row" id="form"> 
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="">Nama Kategori Artikel</label>
                                                                <input type="text" required name="nm_kategori" id="" class="form-control">
                                                            </div> 
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button type="submit" value="Simpan" class="btn btn-success float-right">Simpan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </aside>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/article_categories_create.blade.php ENDPATH**/ ?>