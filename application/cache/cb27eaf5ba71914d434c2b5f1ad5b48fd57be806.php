<?php $__env->startSection('title', 'Tambah Pengurus - Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<script>
    function tampilkanPreview(gambar,idpreview){
        var gb = gambar.files;
        for (var i = 0; i < gb.length; i++){
            var gbPreview = gb[i];
            var imageType = /image.*/;
            var preview=document.getElementById(idpreview);
            var reader = new FileReader();
            if (gbPreview.type.match(imageType)) {
                preview.file = gbPreview;
                reader.onload = (function(element) {
                    return function(e) {
                        element.src = e.target.result;
                    };
                })(preview);
                reader.readAsDataURL(gbPreview);
            }else{
                alert("Type file tidak sesuai. Khusus image.");
            }
        }
    }
</script>
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-sm-12">
                <section class="card">
                    <header class="card-header">
                        <?php echo e("Tambah Pengurus"); ?> <a href="<?php echo e(base_url('admin/pengurus.html')); ?>"><button class="btn btn-sm btn-danger">Batal</button></a>
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                            </span>
                    </header>
                    <form action="<?php echo e(base_url('admin/pengurus/create.aspx')); ?>" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                    <aside class="profile-nav col-lg-3">
                                        <section class="card">
                                            <div class="user-heading round">
                                                <a href="#">
                                                    <img id="photo" src="<?php echo e(base_url('media/photo_user/no-pict.png')); ?>" alt="">
                                                </a>
                                                <div class="form-group">
                                                    <div class="myfileupload-buttonbar" style="margin-top:20px">
                                                        <label class="btn btn-primary">
                                                            <span>Upload Foto</span>
                                                            <input id="file" type="file" name="photo" accept="image/*"  onchange="tampilkanPreview(this,'photo')" />
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </aside>
                                    <aside class="profile-info col-lg-9">
                                        <section class="card">
                                            <div class="card-body bio-graph-info">
                                                <div class="adv-table">
                                                    <div class="form-group">
                                                        <label for="">Nama Pengurus</label>
                                                        <input type="text" name="nama" id="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Jabatan Pengurus</label>
                                                        <input type="text" name="jabatan" id="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" value="Simpan" class="btn btn-primary">
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </section>
</section>

<script>
    $(document).ready(function () {
        
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/pengurus_create.blade.php ENDPATH**/ ?>