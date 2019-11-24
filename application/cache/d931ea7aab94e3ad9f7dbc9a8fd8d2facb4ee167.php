<?php $__env->startSection('title', 'Toko - Pramuka Lumajang Tangguh'); ?>

<?php $__env->startSection('container'); ?>
<!-- Title Section -->
<div class="title-section module">
    <div class="row">

        <div class="small-12 columns">
            <h1><?php echo e($article['judul']); ?></h1>
        </div><!-- Top Row /-->

        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="index.html">Beranda</a></li>
                <li> <?php echo e($article['nm_kategori']); ?></li>
                <li><span class="show-for-sr">Current: </span> <?php echo e($article['judul']); ?></li>
            </ul><!-- Breadcrumbs /-->
        </div><!-- Bottom Row /-->
        
    </div><!-- Row /-->
</div>
<!-- Title Section Ends /-->
<!-- Content section -->
<div class="content-section module blog-page">
        	
    <div class="row">
        
        <div class="medium-9 small-12 columns posts-wrap">

            <div class="single-post">
                <div class="featured-image">
                    <a href="<?php echo e(base_url('media/article/').$article['foto_header']); ?>" target="_blank">
                        <img alt="" src="<?php echo e(base_url('media/article/').$article['foto_header']); ?>" style="width:900px;height:400px" class="thumbnail" />
                    </a>
                    <div class="post-meta"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo e(date('d F Y', strtotime($article['tgl_post']))); ?> | <i class="fa fa-user" aria-hidden="true"></i> <a href="#"><?php echo e($article['nama']); ?></a> | <i class="fa fa-list" aria-hidden="true"></i> <a href="#"><?php echo e($article['nm_kategori']); ?></a></div>
                    </div>
                
                <h3><?php echo e($article['judul']); ?></h3>
                
                <div  class="post-excerpt">
                    <?= $article['artikel'] ?>                    
                </div><!-- post excerpt ends /-->
                
                    <div class="sharing-posts">
                        <div class="medium-10 small-12 columns post-tags">
                        <ul class="tags">
                            <li><strong>Kategori:</strong></li>
                            <li><a href="#"><?php echo e($article['nm_kategori']); ?></a></li>
                        </ul>
                        </div>   
                    
                        <div class="medium-2 small-12 columns">
                    </div><!-- share post ends /-->
                <div class="clearfix"></div>
                </div><!-- sharing row ends /-->
                    
            </div><!-- post ends here /-->
            
            <div class="author-box">
                <div class="medium-2 small-2 columns">
                    <a href="single-post.html#">
                        <img alt="" src="<?php echo e(base_url('media/photo_user/').$article['photo']); ?>" />
                    </a>
                </div>
                <div class="medium-10 small-10 columns">
                    <p>
                        <strong>Penulis <?php echo e($article['nama']); ?></strong></a><br> 
                        <?php echo e($article['lev_user']); ?>

                    </p>
                </div>
                <div class="clearfix"></div>
            </div><!-- author Box ends /-->
            
            <div id="fb-root"></div>
            <div class="fb-comments" data-href="<?php echo e(current_url()); ?>" data-width="850" data-numposts="10"></div>
            
        </div><!-- Posts wrap ends /-->
        
        <div class="medium-3 small-12 columns sidebar">
            <div class="widget">
                <h2>Kategori</h2>
                
                <ul class="menu vertical">
                    <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="single-post.html#"><?php echo e($row['nm_kategori']); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div><!-- widget ends /-->
            
            <div class="widget">
                <h2>Artikel terbaru</h2>
                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="popular-post">
                        <div class="row" style="padding-left:10px">
                            <div class="col-md-4">
                                <img alt="" src="<?php echo e(base_url('media/article/').$row['foto_header']); ?>" style="width:64px;height:64px;margin:10px" class="float-left" />
                            </div>
                            <div class="col-md-8">
                            <a href="<?php echo e(base_url().$row['id_artikel'].'/'.$row['slug']); ?>.html"><strong><?php echo e($row['judul']); ?></strong></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div><!-- widget ends /-->
            
        </div><!-- right bar ends here /-->
        
    </div><!-- Row Ends /-->
    
</div>
<!-- Content Section Ends /-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/frontend/article_detail.blade.php ENDPATH**/ ?>