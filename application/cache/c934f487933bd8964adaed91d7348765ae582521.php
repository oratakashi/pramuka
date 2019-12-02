<?php $__env->startSection('title', "Dashboard -  Pramuka Lumajang"); ?>

<?php $__env->startSection('container'); ?>
<section id="main-content">
    <section class="wrapper">
        <!--state overview start-->
        <div class="row state-overview">
            <div class="col-lg-3 col-sm-6">
                <section class="card">
                    <div class="symbol terques">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="value">
                        <h1 class="count">
                            <?php echo e($user); ?>

                        </h1>
                        <p>Total Pengurus</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="card">
                    <div class="symbol red">
                        <i class="fa fa-book"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count2">
                            <?php echo e($pending); ?>

                        </h1>
                        <p>Artikel butuh tindakan</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="card">
                    <div class="symbol yellow">
                        <i class="fa fa-archive"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count3">
                            <?php echo e($size_doc); ?>

                        </h1>
                        <p>Total Ukuran Dokumen</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="card">
                    <div class="symbol blue">
                        <i class="fa fa-archive"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count4">
                            <?php echo e($size_song); ?>

                        </h1>
                        <p>Total Ukuran Lagu</p>
                    </div>
                </section>
            </div>
        </div>
        <!--state overview end-->
        <div class="row">
            <div class="col-lg-4">
                <!--user info table start-->
                <section class="card">
                    <div class="card-body">
                        <a href="#" class="task-thumb">
                        <img alt="" class="rounded-circle" style="height:80px; width:80px; margin-top:10px" src="<?php echo e(base_url('media/photo_user/')); ?><?php echo $_SESSION['photo']; ?>">
                        </a>
                        <div class="task-thumb-details">
                            <h1><a href="#"><?php echo $_SESSION['nama'] ?></a></h1>
                            <p><?php echo $_SESSION['lev_user'] ?></p>
                        </div>
                    </div>
                    <table class="table table-hover personal-task">
                        <tbody>
                            <tr>
                                <td>
                                    <i class=" fa fa-book"></i>
                                </td>
                                <?php if($_SESSION['lev_user']=='Administrator'): ?>
                                <td><a href="<?php echo e(base_url('admin/profile.html')); ?>">Total Artikel</a></td>
                                <?php elseif($_SESSION['lev_user']=='Pengurus'): ?>
                                <td><a href="<?php echo e(base_url('pengurus/profile.html')); ?>">Total Artikel</a></td>
                                <?php endif; ?>
                                <td> <?php echo e($jml_post); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </section>
                <!--user info table end-->
            </div>
            <div class="col-lg-8">
                <!--work progress start-->
                <section class="card">
                    <div class="card-body progress-card">
                        <div class="task-progress">
                            <h1>Ranking Pengurus</h1>
                            <p>Rangking di hitung berdasarkan jumlah terbanyak posting artikel</p>
                        </div>
                    </div>
                    <table class="table table-hover personal-task">
                        <thead>
                            <tr>
                                <th>Rank</th>
                                <th>Nama</th>
                                <th>Jumlah Artikel</th>
                                <th></th>
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
                                    <td>
                                        <div id="work-progress1"></div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </section>
                <!--work progress end-->
            </div>
        </div>
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="carousel-item <?php if($loop->index == 0): ?> <?php echo e('active'); ?> <?php endif; ?>">
                        <img src="<?php echo e(base_url('media/slider/').$row['image']); ?>" style="height:300px"  alt="First Slide" class="d-block w-100"/>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
</section>
<script>
    $('.carousel').carousel({
        interval: 2000
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/dashboard.blade.php ENDPATH**/ ?>