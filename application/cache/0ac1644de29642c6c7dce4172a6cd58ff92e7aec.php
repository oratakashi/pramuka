<?php $__env->startSection('title', 'Beranda - Pramuka Lumajang Tangguh'); ?>

<?php $__env->startSection('container'); ?>
<!-- Banner Starts -->
<?php if(count($slider)!=0): ?>
<div class="main-banner">
    <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1">
        <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
        <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" data-version="5.0.7">
            <ul>	<!-- SLIDE  -->
                <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li data-index="rs-16" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off">
                    <!-- MAIN IMAGE -->
                    <img src="<?php echo e(base_url('media/slider/').$row['image']); ?>"  alt="First Slide"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" />
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper layer1 tp-resizeme rs-parallaxlevel-0" 
                            id="slide-16-layer-3" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                    data-width="full"
                        data-height="full"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                
                            data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                            data-transform_out="s:300;s:300;" 
                        data-start="1000" 
                        data-basealign="slide" 
                        data-responsive_offset="on"> 
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption Newspaper-Title-Centered layer2 tp-resizeme rs-parallaxlevel-0" 
                            id="slide-16-layer-1" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','1']" 
                            data-fontsize="['50','50','50','30']"
                        data-lineheight="['55','55','55','35']"
                        data-width="['721','721','721','420']"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                            data-transform_out="auto:auto;s:1000;" 
                            data-mask_in="x:0px;y:0px;" 
                            data-mask_out="x:0;y:0;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on"><?php echo e($row['title']); ?>

                    </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <div class="tp-static-layers"></div>
            <div class="tp-bannertimer"></div>	
        </div>
    </div><!-- END REVOLUTION SLIDER -->
</div>
<?php endif; ?>
<!-- Banner Ends /-->

<!-- Blog Posts -->
<div class="blog-posts module grey-bg">
    <div class="section-title-wrapper">
        <div class="section-title">
            <h2>Berita Terbaru</h2>
            <p></p>
        </div>
    </div> <!-- Title Ends /-->
    
    <div class="row">
        
        <div class="posts-wrapper">
            
            <?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="medium-4 small-12 columns" style="margin-bottom:20px">
                    <div class="post">
                        <div class="post-thumb">
                            <a href="<?php echo e(base_url('').$row['id_artikel'].'/'.$row['slug']); ?>.html">
                                <img src="<?php echo e(base_url('media/article/').$row['foto_header']); ?>" alt="photo" style="width:500px;height:230px" />
                            </a>    
                        </div><!-- Thumb /-->
                        <div class="post-content">
                            <h4><a href="<?php echo e(base_url('').$row['id_artikel'].'/'.$row['slug']); ?>.html"><?php echo e($row['judul']); ?></a></h4>
                            <div class="post-meta"><?php echo e(date('d F Y', strtotime($row['tgl_post']))); ?> | <a href="<?php echo e(base_url('categories/').$row['slug_kategori']); ?>"><?php echo e($row['nm_kategori']); ?></a> | <strong>Penulis:</strong> <?php echo e($row['nama']); ?></div>
                            <a href="<?php echo e(base_url('').$row['id_artikel'].'/'.$row['slug']); ?>.html" class="btn btn-primary">Lihat Selengkapnya</a>
                        </div><!-- post content /-->
                    </div><!-- Post /-->
                </div><!-- Post column /-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div><!-- Posts Wrapper /-->
        
        
    </div><!-- Row Ends /-->
    <div class="row">
        <div class="load-more text-center">
            <a href="<?php echo e(base_url('article.html')); ?>" class="button primary bordered-dark">Lihat lainnya</a>
        </div><!-- Load more /-->
    </div>

</div>
<!-- Blog Posts Ends /-->
<div class="gallery-wrapper module">
    <div class="section-title-wrapper">
        <div class="section-title">
            <h2>Instagram Kami</h2>
            <p>Followers : <?php echo e($profile_ig['counts']['followed_by']); ?></p>
        </div>
    </div> <!-- Title Ends /-->
    <div class="gallery-container">
        <?php $__currentLoopData = $instagram; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e($row['link']); ?>" target="_blank">
            <img class="gallery-thumb" src="<?php echo e($row['images']['standard_resolution']['url']); ?>" alt="" style="width:500px;height:267px"/>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div><!-- Gallery Container /-->
</div>

<!-- Our Teachers -->
<div class="our-teachers module">
    <div class="row">
        <div class="section-title-wrapper">
            <div class="section-title">
                <h2>Pengurus</h2>
                <p>Daftar Pengurus di Kwartir Cabang Lumajang</p>
            </div>
        </div> <!-- Title Ends /-->
        
        <div class="teachers-wrapper">
            <?php $__currentLoopData = $pengurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="teacher">
                <div class="teacher-thumb">
                    <img src="<?php echo e(base_url('media/pengurus/').$row['photo']); ?>" alt="photo" style="height:250px"/>
                </div><!-- Teacher thumb /-->
                <div class="teacher-meta">
                    <h3><a href="#">
                        <?php
                            if(strlen($row['nama'])>18){
                                echo substr($row['nama'], 0, 15)."...";
                            }else{
                                echo $row['nama'];
                            }
                        ?>
                    </a></h3>
                    <p><?php echo e($row['jabatan']); ?></p>
                </div><!-- teacher meta /-->    
            </div><!-- Teacher Ends /-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div><!-- Teachers Wrapper /-->
        
    </div><!-- row /-->
</div>
<!-- Our Teachers /-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/frontend/home.blade.php ENDPATH**/ ?>