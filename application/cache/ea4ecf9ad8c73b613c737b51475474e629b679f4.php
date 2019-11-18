<?php $__env->startSection('title', 'Daftar Pengurus - Pramuka Lumajang Tangguh'); ?>

<?php $__env->startSection('container'); ?>
<!-- Title Section -->
<div class="title-section module">
    <div class="row">

        <div class="small-12 columns">
            <h1>Daftar Pengurus</h1>
        </div><!-- Top Row /-->

        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="index.html">Beranda</a></li>
                <li><span class="show-for-sr">Current: </span> Pengurus</li>
            </ul><!-- Breadcrumbs /-->
        </div><!-- Bottom Row /-->
        
    </div><!-- Row /-->
</div>
<!-- Title Section Ends /-->
<!-- Meet your Team Sect -->
<div class="module">
    <div class="row">
        <?php $__currentLoopData = $pengurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="medium-4 small-12 columns" style="margin-bottom:20px">
            <div class="shadow">
                <div class="staff-box">
                    <a href="#"><img  alt="" src="<?php echo e(base_url('media/pengurus/').$row['photo']); ?>" style="width:350px;height:300px" /></a>
                    </div><!-- staff box /-->       
                    <div class="staff-detail">
                    <h4><a href="#"><?php echo e($row['nama']); ?></a><br><span><?php echo e($row['jabatan']); ?></span></h4>                                                                                
                    </div>                                                
            </div>                    
        </div><!-- Staff -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div><!-- Row -->
</div>
<!-- Meet your Team Ends -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/frontend/pengurus.blade.php ENDPATH**/ ?>