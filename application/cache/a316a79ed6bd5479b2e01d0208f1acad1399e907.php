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
                                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#periode" role="tab" aria-controls="periode" aria-selected="true">Rekap Per Periode</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#bulan" role="tab" aria-controls="bulan" aria-selected="false">Rekap Per Bulan</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tahun" role="tab" aria-controls="tahun" aria-selected="false">Rekap Per Tahun</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="false">Rekap Sepanjang masa</a>
                                  </li>
                              </ul>
                              <div class="tab-content" id="myTabContent">
                                  <?php echo $__env->make('backend.summary.periode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                  <?php echo $__env->make('backend.summary.bulan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                  <?php echo $__env->make('backend.summary.tahun', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                  <?php echo $__env->make('backend.summary.all', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                              </div>
                            </div>
                        </section>
                    </div>
                </div>
          </section>
      </section>
      <?php echo $__env->make('backend.summary.periode_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('backend.summary.bulan_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('backend.summary.tahun_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/summary.blade.php ENDPATH**/ ?>