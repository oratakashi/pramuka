<?php $__env->startSection('title', 'Upload Lagu - Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card">
                            <header class="card-header">
                                <?php echo e("Upload Dokumen Baru"); ?> 
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    </span>
                            </header>
                            <div class="card-body">
                                <div class="adv-table">
                                    <form action="<?php echo e(base_url('admin/documents/upload.aspx')); ?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <center><label for="">Pilih File yang akan di upload</label>
                                            <div class="myfileupload-buttonbar" style="margin-top:20px">
                                                <label class="btn btn-primary">
                                                    <span>Pilih Berkas</span>
                                                    <input id="file" type="file" name="document" onchange="" />
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
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
          </section>
      </section>
      <script>
        $(document).ready(function(){
            $('input[type="file"]').change(function(e){
                var fileName = e.target.files[0].name;
                $('#filename').html(fileName);
            });
        });
      </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/documents_create.blade.php ENDPATH**/ ?>