<?php $__env->startSection('title', 'Pencarian Artikel - Pramuka Lumajang Tangguh'); ?>

<?php $__env->startSection('container'); ?>
<!-- Title Section -->
<div class="title-section module">
    <div class="row">

        <div class="small-12 columns">
            <h1>Pencarian Artikel</h1>
        </div><!-- Top Row /-->

        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="index.html">Beranda</a></li>
                <li>Artikel</li>
                <li><span class="show-for-sr">Current: </span> Pencarian</li>
            </ul><!-- Breadcrumbs /-->
        </div><!-- Bottom Row /-->
        
    </div><!-- Row /-->
</div>
<!-- Title Section Ends /-->
<!-- Content section -->
<!-- Content section -->
<div class="content-section module blog-page">
        	
    <div class="row">
        
        <div class="medium-9 small-12 columns posts-wrap">
            <?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="blog-post">
                <div class="featured-image">
                    <a href="<?php echo e(base_url().'/'.$row['id_artikel'].'/'.$row['slug']); ?>.html">
                        <img alt="" src="<?php echo e(base_url('media/article/').$row['foto_header']); ?>" style="width:900px;height:350px" class="thumbnail" />
                    </a>
                    <div class="post-meta"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo e(date('d F Y', strtotime($row['tgl_post']))); ?> | <i class="fa fa-user" aria-hidden="true"></i> <a href="#"><?php echo e($row['nama']); ?></a> | <i class="fa fa-list" aria-hidden="true"></i> <a href="#"><?php echo e($row['nm_kategori']); ?></a></div>
                </div>
                
                <h3><a href="<?php echo e(base_url().'/'.$row['id_artikel'].'/'.$row['slug']); ?>.html"><?php echo e($row['judul']); ?></a></h3>
            </div><!-- post Ends here /-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="page-filter row">
                <?= $pagination ?>
            </div>
            
        </div><!-- Posts wrap /-->
        
        <div class="medium-3 small-12 columns sidebar">
            <div class="widget search">
                <h2>Pencarian Artikel</h2>
                <form action="<?php echo e(base_url('article/search.aspx')); ?>" method="post">
                    <input name="keyword" type="text" placeholder="Cari Artikel..." />
                </form>
            </div><!-- widget ends -->  
            <div class="widget">
                <h2>Kategori</h2>
                
                <ul class="menu vertical">
                    <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="blog1.html#"><?php echo e($row['nm_kategori']); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div><!-- widget ends /-->
            
        </div><!-- right bar ends here /-->
        
    </div><!-- Row Ends /-->
    
</div>
<!-- Content Section Ends /-->
<!-- Content Section Ends /-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/frontend/article_search.blade.php ENDPATH**/ ?>