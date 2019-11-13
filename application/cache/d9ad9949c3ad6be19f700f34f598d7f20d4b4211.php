<?php $__env->startSection('title', 'Pengaturan - Pramuka Lumajang'); ?>

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
                        <?php echo e("Pengaturan"); ?> 
                            <span class="tools pull-right">
                                <?php if($_SESSION['lev_user']=='Administrator'): ?>
                                    <a href="<?php echo e(base_url('admin/index.html')); ?>"><button class="btn btn-sm btn-danger">Kembali</button></a>
                                <?php elseif($_SESSION['lev_user']=='Pengurus'): ?>
                                    <a href="<?php echo e(base_url('pengurus/index.html')); ?>"><button class="btn btn-sm btn-danger">Kembali</button></a>
                                <?php endif; ?>
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                            </span>
                    </header>
                    <?php if($_SESSION['lev_user']=='Administrator'): ?>
                    <form action="<?php echo e(base_url('admin/settings.aspx')); ?>" method="post" enctype="multipart/form-data">
                    <?php elseif($_SESSION['lev_user']=='Pengurus'): ?>
                    <form action="<?php echo e(base_url('pengurus/settings.aspx')); ?>" method="post" enctype="multipart/form-data">
                    <?php endif; ?>
                        <div class="card-body">
                            <div class="row">
                                    <aside class="profile-nav col-lg-3">
                                        <section class="card">
                                            <div class="user-heading round">
                                                <a href="#">
                                                    <img id="photo" src="<?php echo e(base_url('media/photo_user/').$user['photo']); ?>" alt="">
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
                                                <div class="row">
                                                    <div class="col-md-4" id="parent_lev_user">
                                                        <div class="form-group">
                                                            <label>Pilih tipe : </label>
                                                            <select name="lev_user" id="lev_user" disabled class="form-control">
                                                                <option value="">Pilih Jenis Pengguna</option>
                                                                <option value="Administrator" <?php if($user['lev_user']=='Administrator'){echo "selected";} ?>>Administrator</option>
                                                                <option value="Pengurus" <?php if($user['lev_user']=='Pengurus'){echo "selected";} ?>>Pengurus</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8" id="parent_kecamatan">
                                                        <label for="">Pilih Kecamatan</label>
                                                        <select name="kecataman" id="kecamatan" disabled class="form-control">
                                                            <option value="">Pilih Kecamatan</option>
                                                            <?php $__currentLoopData = $data_kec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($data['id_kecamatan']); ?>" <?php if($id_kecamatan == $data['id_kecamatan']){ echo "selected";} ?>><?php echo e($data['nama_kecamatan']); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row" id="form">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">ID Pengguna</label>
                                                            <input type="text" required name="id_user" readonly id="id_user" value="<?php echo e($user['id_user']); ?>" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">No Hp</label>
                                                            <input type="text" required name="no_hp" id="" class="form-control" value="<?php echo e($user['no_hp']); ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Password</label>
                                                            <input type="password" name="password" id="" class="form-control" value="******" disabled>
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
        <?php if($_SESSION['lev_user'] == "Administrator"): ?>
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
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/settings.blade.php ENDPATH**/ ?>