<?php $__env->startSection('title', 'Pencarian - Pramuka Lumajang Tangguh'); ?>

<?php $__env->startSection('container'); ?>
<!-- Title Section -->
<div class="title-section module">
    <div class="row">

        <div class="small-12 columns">
            <h1>Pencarian</h1>
        </div><!-- Top Row /-->

        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="index.html">Beranda</a></li>
                <li><span class="show-for-sr">Current: </span> Pencarian Global</li>
            </ul><!-- Breadcrumbs /-->
        </div><!-- Bottom Row /-->
        
    </div><!-- Row /-->
</div>
<div class="content-area module faq">
    <!-- Artikel -->
    <div class="row">
        <div class="medium-12 small-12 columns">
            <h3>Pencarian Artikel</h3>
            <?php if(count($article)==0): ?>
                <ul class="accordion" data-accordion>
                    <li class="accordion-item" data-accordion-item>
                        <span class="accordion-title">Data Tidak Ditemukan</span>
                    </li>
                </ul>
            <?php else: ?>
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
            <?php endif; ?>
        </div>
    </div>
    <hr>
    <!-- Pengurus -->
    <div class="row">
        <div class="medium-12 small-12 columns">
            <h3>Pencarian Pengurus</h3>
            <?php if(count($pengurus)==0): ?>
                <ul class="accordion" data-accordion>
                    <li class="accordion-item" data-accordion-item>
                        <span class="accordion-title">Data Tidak Ditemukan</span>
                    </li>
                </ul>
            <?php else: ?>
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
            <?php endif; ?>
        </div>
    </div>
    <hr>
    <!-- Dokumen -->
    <div class="row">
        <div class="medium-12 small-12 columns">
            <h3>Pencarian Dokumen / Berkas</h3>
            <?php if(count($dokumen)==0): ?>
                <ul class="accordion" data-accordion>
                    <li class="accordion-item" data-accordion-item>
                        <span class="accordion-title">Data Tidak Ditemukan</span>
                    </li>
                </ul>
            <?php else: ?>  
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
                                <tr>
                                    <td>
                                        <?php
                                            if(strlen($row['nama_file'])>43){
                                                echo substr($row['nama_file'], 0, 40)."...";
                                            }else{
                                                echo $row['nama_file'];
                                            }
                                        ?>
                                    </td>
                                    <td><?php echo e($row['nama']); ?></td>
                                    <td><?php echo e($row['total_download']); ?></td>
                                    <td>
                                        <?php
                                            $real_size = $row['size'] / 1024;
                                            $real_size = round($real_size, 2);
                                            $ext = "";
                                            if($real_size < 1){
                                                $real_size = $row['size'];
                                                $ext = "Kb";
                                            }elseif($real_size < 1024){
                                                $ext = "Mb";
                                            }elseif($real_size < 1048576){
                                                $ext = "Gb";
                                            }else{
                                                $ext = "Tb";
                                            }
                                            echo $real_size.$ext;
                                        ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(base_url('documents/').$row['id_dokumen'].'/'.$row['nama_file']); ?>" class="btn btn-primary" target="_blank"><i class="fa fa-download"></i> Download</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </li>                     
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                  
                </ul>
            <?php endif; ?>            
        </div>           
    </div>
    <hr>
    <!-- Song -->
    <div class="row">
        <div class="medium-12 small-12 columns">
            <h3>Pencarian Lagu Pramuka</h3>
            <?php if(count($song)==0): ?>
                <ul class="accordion" data-accordion>
                    <li class="accordion-item" data-accordion-item>
                        <span class="accordion-title">Data Tidak Ditemukan</span>
                    </li>
                </ul>
            <?php else: ?>
                <ul class="accordion" data-accordion>
                    <?php $__currentLoopData = $song; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                <tr>
                                    <td>
                                        <?php
                                            if(strlen($row['nama_file'])>43){
                                                echo substr($row['nama_file'], 0, 40)."...";
                                            }else{
                                                echo $row['nama_file'];
                                            }
                                        ?>
                                    </td>
                                    <td><?php echo e($row['nama']); ?></td>
                                    <td><?php echo e($row['total_download']); ?></td>
                                    <td>
                                        <?php
                                            $real_size = $row['size'] / 1024;
                                            $real_size = round($real_size, 2);
                                            $ext = "";
                                            if($real_size < 1){
                                                $real_size = $row['size'];
                                                $ext = "Kb";
                                            }elseif($real_size < 1024){
                                                $ext = "Mb";
                                            }elseif($real_size < 1048576){
                                                $ext = "Gb";
                                            }else{
                                                $ext = "Tb";
                                            }
                                            echo $real_size.$ext;
                                        ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(base_url('song/').$row['id_lagu'].'/'.$row['nama_file']); ?>" class="btn btn-primary" target="_blank"><i class="fa fa-download"></i> Download</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </li>                     
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                  
                </ul> <!-- reasons accordion ends -->
            <?php endif; ?>
        </div> <!-- right sidebar ends -->
    </div>
    <hr>
    <!-- Product -->
    <div class="row">
        <div class="medium-12 small-12 columns">
            <h3>Pencarian Product</h3>
            <?php if(count($product)==0): ?>
                <ul class="accordion" data-accordion>
                    <li class="accordion-item" data-accordion-item>
                        <span class="accordion-title">Data Tidak Ditemukan</span>
                    </li>
                </ul>
            <?php else: ?>
                <div class="products-wrap">
                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="medium-4 small-12 columns">
                            <div class="single-product">
                                <?php
                                    $text = "Saya ingin membeli produk ".$row['nm_product']." apakah masih tersedia ?";
                                    $endcoded = str_replace(" ", "%20", $text);
                                ?>
                                <div class="product-img thumbnail">
                                    <a href="<?php echo e(base_url('stores/').$row['id_product'].'/'.$row['slug']); ?>.html">
                                        <img alt=""  class="front-image" src="<?php echo e(base_url('media/product/').$row['foto']); ?>">
                                    </a>
                                    <div class="add-to-cart-top">
                                            <a href='https://api.whatsapp.com/send?phone=6282301117118&text=<?php echo e($endcoded); ?>' target="_blank" class='button primary'>Beli Sekarang</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h6><a href="#"><?php echo e($row['nm_product']); ?></a></h6>
                                    <div class="price">
                                        <span class="normal"><?php echo e("Rp " . number_format($row['harga'],2,',','.')); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- product Ends here /-->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="clearfix"></div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <hr>
    <!-- Kwaran -->
    <div class="row">
        <div class="medium-12 small-12 columns">
            <h3>Pencarian Kwaran</h3>
            <?php if(count($kwaran)==0): ?>
                <ul class="accordion" data-accordion>
                    <li class="accordion-item" data-accordion-item>
                        <span class="accordion-title">Data Tidak Ditemukan</span>
                    </li>
                </ul>
            <?php else: ?>
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
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/frontend/search.blade.php ENDPATH**/ ?>