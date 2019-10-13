<?php $__env->startSection('title', 'Upload Lagu - Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card">
                            <header class="card-header">
                                <?php echo e("Upload Lagu Baru"); ?> 
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    </span>
                            </header>
                            <div class="card-body">
                                <div class="adv-table">
                                    <form action="" method="post" enctype="multipart/form-data">
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
                                            <center><input type="submit" value="Upload Sekarang" class="btn btn-primary"></center>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
          </section>
      </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/song_create.blade.php ENDPATH**/ ?>