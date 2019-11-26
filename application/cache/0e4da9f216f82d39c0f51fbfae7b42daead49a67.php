<div class="header">
    <div class="row">
        <div class="medium-4 small-12 columns">
            <div class="logo">
                <a href="<?php echo e(base_url('index.html')); ?>">
                    <img src="<?php echo e(base_url('assets/frontend/')); ?>images/LOGO-WEB-.png" alt="Webful Education" />
                </a>    
            </div><!-- logo /-->
        </div><!-- left Ends /-->
        
        <div class="medium-8 small-12 columns nav-wrap">
            <!-- navigation Code STarts here.. -->
            <div class="top-bar">
                <div class="top-bar-title">
                    <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
                        <a data-toggle><span class="menu-icon dark float-left"></span></a>
                    </span>
                </div>
                
                <nav id="responsive-menu">
                    <ul class="menu vertical medium-horizontal float-right" data-responsive-menu="accordion medium-dropdown">
                        <li><a href="<?php echo e(base_url('index.html')); ?>">Beranda</a>
                        </li>
                        <li class="single-sub parent-nav"><a href="#"> Kategori </a>
                            <ul class="child-nav menu vertical">
                                <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(base_url('categories/').$row['id_kategori'].'/'.$row['slug']); ?>.html"><?php echo e($row['nm_kategori']); ?></a></li>                                       
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                        <li><a href="<?php echo e(base_url('stores.html')); ?>">Toko</a>
                        </li>
                            <li class="single-sub parent-nav"><a href="#"> Download</a>
                            <ul class="child-nav menu vertical">
                                <li><a href="<?php echo e(base_url('documents.html')); ?>">Berkas / Dokumen</a></li>
                                <li><a href="<?php echo e(base_url('song.html')); ?>">Lagu Pramuka</a></li>                                        
                            </ul>
                        </li>
                        <li><a href="<?php echo e(base_url('kwaran.html')); ?>">Kwaran</a></li>
                        <li><a href="<?php echo e(base_url('pengurus.html')); ?>">Pengurus</a></li>
                        <li><a href="https://www.sipapramukajatim.or.id/">SIPA</a></li>
                        <li><a href="<?php echo e(base_url('pengurus')); ?>">Login</a></li>
                    </ul>
                </nav>
            </div><!-- top-bar Ends -->
            <!-- Navigation Code Ends here -->
            <div class="search-wrap float-right">
                <a href="index.html#" class="search-icon-toggle" data-toggle="search-dropdown"><i class="fa fa-search"></i></a>
            </div><!-- search wrap ends -->
            <div class="dropdown-pane" id="search-dropdown" data-dropdown data-auto-focus="true">
                <form action="<?php echo e(base_url('search.aspx')); ?>" method="post">
                    <input type="text" name="keyword" placeholder="Cari apa saja yang kamu butuhkan .... " />
                </form>
            </div>
        </div><!-- right Ends /-->
        
    </div><!-- Row Ends /-->
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/frontend/layout/header.blade.php ENDPATH**/ ?>