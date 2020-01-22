<?php $__env->startSection('title', 'Daftar Lagu - Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2"><?php echo e("Upload Lagu Baru"); ?>  </h4>
                    <br/>
                    <form action="<?php echo e(base_url('admin/song/upload.aspx')); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <center><label for="">Pilih File yang akan di upload</label>
                            <div class="myfileupload-buttonbar" style="margin-top:20px">
                                <label class="btn btn-primary">
                                    <span>Pilih lagu</span>
                                    <input id="file" type="file" name="song" accept="audio/*"  onchange="" />
                                </label>
                            </div></center>
                        </div>
                        <div class="form-group">
                            <center><label for="" id="filename"></label></center>
                        </div>
                        <div class="form-group">
                            <center><input type="submit" value="Upload Sekarang" class="btn btn-primary"></center>
                        </div>
                    </form>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/song_create.blade.php ENDPATH**/ ?>