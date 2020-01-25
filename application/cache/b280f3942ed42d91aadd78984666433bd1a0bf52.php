<?php $__env->startSection('title', 'Kedai - Pramuka Lumajang Tangguh'); ?>

<?php
    $text = "Saya ingin membeli produk ".$product['nm_product']." apakah masih tersedia ?";
    $endcoded = str_replace(" ", "%20", $text);
?>
<?php $__env->startSection('container'); ?>
<!-- Title Section -->
<div class="title-section module">
    <div class="row">

        <div class="small-12 columns">
            <h1><?php echo e($product['nm_product']); ?></h1>
        </div><!-- Top Row /-->

        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="index.html">Beranda</a></li>
                <li> Kedai</li>
                <li><span class="show-for-sr">Current: </span> Detail</li>
            </ul><!-- Breadcrumbs /-->
        </div><!-- Bottom Row /-->
        
    </div><!-- Row /-->
</div>
<!-- Title Section Ends /-->
<!-- Content section -->
<div class="content-section module single-products-page products-page">
    <div class="row">
        
        <div class="medium-12 small-12 columns">
            
            <div class="medium-5 small-12 columns product-thumbnail">
                <img alt="" src="<?php echo e(base_url('media/product/').$product['foto']); ?>" class="thumbnail" />
            </div><!-- Product Image Ends -->
            
            <div class="medium-7 small-12 columns product-detail">

                <h2><?php echo e($product['nm_product']); ?></h2>

                <div class="product-meta">
                    ID Product: <?php echo e($product['id_product']); ?>

                </div><!-- Product Meta -->
                
                <p><?php echo e($product['deskripsi']); ?></p>
                
                <div class="price">
                    <span class="normal"><?php echo e("Rp " . number_format($product['harga'],2,',','.')); ?></span>
                </div>
                
                <div class="add-cart-option">
                    <a href="https://api.whatsapp.com/send?phone=6285236464170&text=<?php echo e($endcoded); ?>" class="button primary" target="_blank">Beli Sekarang</a> 
                </div><!-- add cart option -->
            
            </div><!-- Product Detail Ends -->
            
        </div> <!-- Product Area Ends /-->
        
    </div><!-- Row Ends /-->
</div>
<!-- Content Section Ends /-->

<!-- Related Products -->
<div class="our-store grey-bg">
    <div class="row">
        <div class="section-title-wrapper">
            <div class="section-title">
                <h2>Rekomendasi Produk</h2>
                <p></p>
            </div>
        </div><!-- title ends -->
        
        <div class="products-wrap">
            <?php $__currentLoopData = $data_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $text = "Saya ingin membeli produk ".$row['nm_product']." apakah masih tersedia ?";
                $endcoded = str_replace(" ", "%20", $text);
            ?>
            <div class="medium-3 small-12 columns">
                <div class="single-product">
                    <div class="product-img thumbnail">
                        <a href="single-product.html">
                            <img alt=""  class="front-image" src="<?php echo e(base_url('media/product/').$row['foto']); ?>">
                        </a>
                        <div class="add-to-cart-top">
                                <a href="https://api.whatsapp.com/send?phone=6285236464170&text=<?php echo e($endcoded); ?>" class="button primary">Beli Sekarang</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <h6><a href="<?php echo e(base_url('stores/').$row['id_product'].'/'.$row['slug']); ?>.html"><?php echo e($row['nm_product']); ?></a></h6>
                        <div class="price">
                            <span class="normal"><?php echo e("Rp " . number_format($row['harga'],2,',','.')); ?></span>
                        </div>
                    </div>
                </div>
            </div><!-- product Ends here -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div><!-- products wrap -->
        
    </div><!-- Row Ends -->
</div>
<!-- Related Products Ends /-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/frontend/store_detail.blade.php ENDPATH**/ ?>