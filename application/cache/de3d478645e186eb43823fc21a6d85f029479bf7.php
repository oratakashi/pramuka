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
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#faq" role="tab" aria-controls="periode" aria-selected="true">Pertanyaan Umum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="bulan" aria-selected="false">Hubungi Pengembang</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <?php echo $__env->make('backend.helpdesk.faq', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo $__env->make('backend.helpdesk.contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/helpdesk.blade.php ENDPATH**/ ?>