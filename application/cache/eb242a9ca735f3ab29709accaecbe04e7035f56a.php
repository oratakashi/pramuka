<?php $__env->startSection('title', 'Ubah Pengguna -  Pramuka Lumajang'); ?>

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
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2"><?php echo e("Ubah Pengguna"); ?> <a href="<?php echo e(base_url('admin/user.html')); ?>"><button class="btn btn-sm btn-danger">Batal</button></a></h4>
                    <form action="<?php echo e(base_url('admin/user/update.aspx')); ?>" method="post" enctype="multipart/form-data" style="margin-top:30px">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="">
                                    <center>
                                    <a class="user-avatar" href="#">
                                        <img id="photo" class="thumb-md mb-2 rounded-circle" src="<?php echo e(base_url('media/photo_user/').$user['photo']); ?>" style="width:150px;height:150px" alt="">
                                    </a>
                                    </center>
                                    <div class="form-group">
                                        <center>
                                        <div class="myfileupload-buttonbar" style="margin-top:20px">
                                            <label class="btn btn-primary">
                                                <span>Upload Foto</span>
                                                <input id="file" type="file" name="photo" accept="image/*"  onchange="tampilkanPreview(this,'photo')" />
                                            </label>
                                        </div>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-4" id="parent_lev_user" >
                                        <div class="form-group">
                                            <label>Tipe : </label>
                                            <select name="lev_user" id="lev_user" class="form-control" disabled>
                                                <option value="">Pilih Jenis Pengguna</option>
                                                <option value="Administrator" <?php if($user['lev_user']=='Administrator'){echo "selected";} ?>>Administrator</option>
                                                <option value="Pengurus" <?php if($user['lev_user']=='Pengurus'){echo "selected";} ?>>Pengurus</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-8" id="parent_kecamatan">
                                        <label for="">Kecamatan</label>
                                        <select name="kecataman" id="kecamatan" class="form-control" disabled>
                                            <option value="">Pilih Kecamatan</option>
                                            <?php $__currentLoopData = $data_kec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($data['id_kecamatan']); ?>" <?php if($id_kecamatan==$data['id_kecamatan']){echo "selected";} ?>><?php echo e($data['nama_kecamatan']); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row" id="form">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">ID Pengguna</label>
                                            <input type="text" required name="id_user" readonly id="id_user" class="form-control" value="<?php echo e($user['id_user']); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">No Hp</label>
                                            <input type="text" required name="no_hp" id="" class="form-control" value="<?php echo e($user['no_hp']); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input type="password" name="password" id="" class="form-control" value="<?php echo e($user['password']); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Nama Pengguna</label>
                                            <input type="text" required name="nama" id="" class="form-control" value="<?php echo e($user['nama']); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="text" required name="email" id="email" class="form-control" value="<?php echo e($user['email']); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Alamat</label>
                                            <input type="text" name="alamat" id="" class="form-control" value="<?php echo e($user['alamat']); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" value="Simpan" class="btn btn-success float-right">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
<script>
    $(document).ready(function () {
        <?php if($user['lev_user']=='Administrator'): ?>
            $('#parent_kecamatan').fadeOut();
        <?php endif; ?>
        $('#lev_user').change(function (e) { 
            e.preventDefault();
            if($('#lev_user').val()=='Administrator'){
                $.ajax({
                    type: "post",
                    url: "<?php echo e(base_url('admin/user/getId.aspx')); ?>",
                    beforeSend: function() {
                        $('input').attr('disabled', true);
                        $('input').attr('placeholder', "Memuat...");
                    },
                    data: {
                        "type" : "admin"
                    },
                    dataType: "json",
                    success: function (response) {
                        $('input').attr('disabled', false);
                        $('input').attr('placeholder', "");
                        $('#id_user').val(response.data.id_user);
                        $('#form').slideDown();
                    }
                });
                $('#parent_kecamatan').fadeOut();
            }else if($('#lev_user').val()=='Pengurus'){
                $('#parent_kecamatan').fadeIn();
                if($('#kecamatan').val()==''){
                    $('#form').slideUp();
                }
            }else{
                $('#form').slideUp();
                $('#parent_kecamatan').fadeOut();
            }
        });
        $('#kecamatan').change(function (e) { 
            e.preventDefault();
            if($('#kecamatan').val()!=''){
                $.ajax({
                    type: "post",
                    url: "<?php echo e(base_url('admin/user/getId.aspx')); ?>",
                    beforeSend: function() {
                        $('input').attr('disabled', true);
                        $('input').attr('placeholder', "Memuat...");
                    },
                    data: {
                        "type"          : "pengurus",
                        "id_kecamatan"  : $('#kecamatan').val()
                    },
                    dataType: "json",
                    success: function (response) {
                        $('input').attr('disabled', false);
                        $('input').attr('placeholder', "");
                        $('#id_user').val(response.data.id_user);
                        $('#form').slideDown();
                    }
                });
            }else{
                $('#form').slideUp();
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/user_edit.blade.php ENDPATH**/ ?>