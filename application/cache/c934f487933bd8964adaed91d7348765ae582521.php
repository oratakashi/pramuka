<?php $__env->startSection('title', 'Dashboard -  Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="owl-carousel owl-theme full-width">
                        <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <img src="<?php echo e(base_url('media/slider/').$row['image']); ?>" style="height:300px;width:100%" alt="image" />
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Single Widget -->
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="text-primary"><?php echo e($user); ?></h5>
                            <p class="mb-0">Total Pengurus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Widget -->

        <!-- Single Widget -->
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="text-danger"><?php echo e($pending); ?></h5>
                            <p class="mb-0">Artikel butuh tindakan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Widget -->

        <!-- Single Widget -->
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="text-warning"><?php echo e($size_doc); ?></h5>
                            <p class="mb-0">Total Ukuran Dokumen</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Widget -->

        <!-- Single Widget -->
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="text-success"><?php echo e($size_song); ?></h5>
                            <p class="mb-0">Total Ukuran Lagu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="card ">
                <div class="card-body">
                    <div class="member-content-area">
                        <div class="member-contact-content d-flex align-items-center mb-4">
                            <div class="contact-thumb">
                                <img alt="" src="<?php echo e(base_url('media/photo_user/')); ?><?php echo $_SESSION['photo']; ?>">
                            </div>
                            <div class="member-contact-info">
                                <h5><?php echo $_SESSION['nama'] ?></h5>
                                <span class="badge badge-success badge-pill"><?php echo $_SESSION['lev_user'] ?></span>
                            </div>
                        </div>

                        <ul class="nav">
                            <li class="nav-item">
                                <div class="img-icon"><i class="fa fa-book"></i></div>
                            </li>
                            <li class="nav-item">
                                <p>Total Artikel : <?php echo e($jml_post); ?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-8">
            <div class="card ">
                <div class="card-body">
                    <h4 class="card-title mb-2">Rangking Pengurus</h4>
                    <p class="text-muted font-14 mb-4">
                        Rangking di hitung berdasarkan jumlah terbanyak posting artikel
                    </p>
                    <table id="no-config" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Ranking</th>
                                <th>Nama</th>
                                <th>Jumlah Artikel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $rank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->index + 1); ?></td>
                                    <td>
                                        <?php echo e($row['nama']); ?>

                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-danger"><?php echo e($row['jml']); ?> Artikel</span>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/dashboard.blade.php ENDPATH**/ ?>