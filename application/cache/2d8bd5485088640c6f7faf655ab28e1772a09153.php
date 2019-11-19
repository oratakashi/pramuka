<?php $__env->startSection('title', 'Download Berkas - Pramuka Lumajang Tangguh'); ?>

<?php $__env->startSection('container'); ?>
<!-- Title Section -->
<div class="title-section module">
    <div class="row">

        <div class="small-12 columns">
            <h1>Download Berkas / Dokumen</h1>
        </div><!-- Top Row /-->

        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="index.html">Beranda</a></li>
                <li><a href="#">Download</a></li>
                <li><span class="show-for-sr">Current: </span> Dokumen / Berkas</li>
            </ul><!-- Breadcrumbs /-->
        </div><!-- Bottom Row /-->
        
    </div><!-- Row /-->
</div>
<!-- Title Section Ends /-->
<!-- Content Area Starts -->
<div class="content-area module faq">
	    	<div class="row">
            
        		<div class="medium-9 small-12 columns">
					<ul class="accordion" data-accordion>
                        <?php $__currentLoopData = $dokumen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="accordion-item" data-accordion-item>
                            <a href="#" class="accordion-title"><?php echo e($row['nama_file']); ?></a>
                            <div class="accordion-content" data-tab-content>
                                <table>
                                    <tr>
                                        <th>Nama File</th>
                                        <th>Pengunggah</th>
                                        <th>Jumlah Download</th>
                                        <th>Ukuran</th>
                                        <th>Download</th>
                                    </tr>
                                </table>
                            </div>
                        </li>                     
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                  
                	</ul> <!-- reasons accordion ends -->
           		</div> <!-- right sidebar ends -->

           	    <div class="medium-3 small-12 columns sidebar">
                    <div class="icon-box">
                        <div class="icon-side float-left">
                            <i class="fa fa-archive" aria-hidden="true"></i>
                        </div><!-- icon side /-->
                        <div class="info-side float-left">
                            <p><strong>Keterangan : </strong><br>
                            <p>Total Ukuran : <?php echo e($size); ?></p>
                            <p>Jumlah Berkas : <?php echo e(count($dokumen)); ?> Berkas</p>
                        </div><!-- info side /-->
                        <div class="clearfix"></div>
                    </div><!-- icon-box /-->
            	</div><!-- icon-box ends -->
            
    	    </div><!-- row / -->
		</div> 	    	
        <!-- Content Area Ends /-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/frontend/documents.blade.php ENDPATH**/ ?>