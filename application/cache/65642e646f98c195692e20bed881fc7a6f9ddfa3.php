<?php $__env->startSection('title', 'Tambah Kategori Artikel - Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2"><?php echo e("Tambah Kategori Artikel"); ?> <a href="<?php echo e(base_url('admin/article/categories.html')); ?>"><button class="btn btn-sm btn-danger">Batal</button></a> </h4>
                    <br/>
                    <form action="<?php echo e(base_url('admin/article/categories/create.aspx')); ?>" method="post" enctype="multipart/form-data">
                        <div class="row"> 
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
                    </form>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/article_categories_create.blade.php ENDPATH**/ ?>