<?php $__env->startSection('title', 'Daftar Pengguna -  Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">
                        <?php echo e("Detail Pengguna"); ?>

                        <span class="tools pull-right">
                            <a href="<?php echo e(base_url('admin/user.html')); ?>"><button class="btn btn-sm btn-danger">Kembali</button></a>
                        </span>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="member-content-area">
                                    <div class="member-contact-content d-flex align-items-center mb-4">
                                        <div class="contact-thumb">
                                            <img alt="" src="<?php echo e(base_url('media/photo_user/').$data_user['photo']); ?>">
                                        </div>
                                        <div class="member-contact-info">
                                            <h5><?php echo e($data_user['nama']); ?></h5>
                                            <span class="badge badge-success badge-pill"><?php echo e($data_user['lev_user']); ?></span>
                                        </div>
                                    </div>
                                    <a href="<?php echo e(base_url('admin/user/').$data_user['id_user']); ?>.html">
                                        <ul class="nav">
                                            <li class="nav-item">
                                                <div class="img-icon"><i class="fa fa-user"></i></div>
                                            </li>
                                            <li class="nav-item">
                                                <p>Profil</span></p>
                                            </li>
                                        </ul>
                                    </a>
                                    <br>
                                    <a href="<?php echo e(base_url('admin/user/').$data_user['id_user']); ?>/article.html">
                                        <ul class="nav">
                                            <li class="nav-item">
                                                <div class="img-icon"><i class="fa fa-book"></i></div>
                                            </li>
                                            <li class="nav-item">
                                                <p>Artikel <span class="badge badge-danger pull-right" style="margin-left:50px;margin-top:5px"><?php echo e($jml_post); ?></span></p>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <h3>ID : <?php echo e($data_user['id_user']); ?></h3>
                                
                            </div>
                        </div>
                    </h4>
                    
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/user_detail.blade.php ENDPATH**/ ?>