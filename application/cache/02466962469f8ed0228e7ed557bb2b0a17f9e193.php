<?php $__env->startSection('title', 'Kwaran - Pramuka Lumajang Tangguh'); ?>

<?php $__env->startSection('container'); ?>
<!-- Title Section -->
<div class="title-section module">
    <div class="row">

        <div class="small-12 columns">
            <h1>Daftar Kwaran</h1>
        </div><!-- Top Row /-->

        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="index.html">Beranda</a></li>
                <li><span class="show-for-sr">Current: </span> Kwaran</li>
            </ul><!-- Breadcrumbs /-->
        </div><!-- Bottom Row /-->
        
    </div><!-- Row /-->
</div>
<!-- Title Section Ends /-->
<!-- Content Area Starts -->
<div class="content-area module faq">
    <div class="row">
        <table class="table">
            <tr>
                <th>No</th>
                <th>Kwaran</th>
                <th>Gugusdepan</th>
                <th>Anggota</th>
            </tr>
            <?php $__currentLoopData = $kwaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($row['id_kecamatan']); ?></td>
                    <td><?php echo e($row['nama_kecamatan']); ?></td>
                    <td><?php echo e($row['gugusdepan']); ?></td>
                    <td><?php echo e($row['anggota']); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>    
    </div><!-- row / -->
</div> 	    	
<!-- Content Area Ends /-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/frontend/kwaran.blade.php ENDPATH**/ ?>