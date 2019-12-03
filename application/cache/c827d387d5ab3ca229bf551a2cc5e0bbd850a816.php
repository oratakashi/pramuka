<?php $__env->startSection('title', 'Rekap Data - Pramuka Lumajang'); ?>

<?php $__env->startSection('container'); ?>
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-sm-12">
                <section class="card">
                    <div class="card-body">
                    <ul class="nav nav-tabs mb-2" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#slider" role="tab" aria-controls="periode" aria-selected="true">Kelola Slider</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#visi" role="tab" aria-controls="bulan" aria-selected="false">Kelola Visi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#misi" role="tab" aria-controls="tahun" aria-selected="false">Kelola Misi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#deskripsi" role="tab" aria-controls="all" aria-selected="false">Kelola Deskripsi Website</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <?php echo $__env->make('backend.information.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo $__env->make('backend.information.visi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo $__env->make('backend.information.misi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo $__env->make('backend.information.deskripsi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/information.blade.php ENDPATH**/ ?>