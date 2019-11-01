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
                                  <div class="tab-pane fade show active" id="periode" role="tabpanel" aria-labelledby="periode-tab">Home text goes here...</div>
                                  <div class="tab-pane fade" id="bulan" role="tabpanel" aria-labelledby="bulan-tab">Profile text goes here...</div>
                                  <div class="tab-pane fade" id="tahun" role="tabpanel" aria-labelledby="tahun-tab">Contact text goes here...</div>
                                  <div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="all-tab">
                                    <div class="adv-table">
                                        <table  class="display table table-bordered table-striped" id="dynamic-table">
                                            <thead>
                                                <tr>
                                                    <th>Rank</th>
                                                    <th>Nama</th>
                                                    <th>Jumlah Artikel</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $rank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($loop->index + 1); ?></td>
                                                        <td><?php echo e($row['nama']); ?></td>
                                                        <td><?php echo e($row['jml']); ?> Artikel</td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Rank</th>
                                                    <th>Nama</th>
                                                    <th>Jumlah Artikel</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <p class="text-danger">Rangking di hitung berdasarkan jumlah terbanyak posting artikel dan dalam status aktif</p>
                                  </div>
                              </div>
                            </div>
                        </section>
                    </div>
                </div>
          </section>
      </section>
      <script>
      
      </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/summary.blade.php ENDPATH**/ ?>