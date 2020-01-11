<div class="ecaps-sidemenu-area">
    <!-- Desktop Logo -->
    <div class="ecaps-logo">
        <a href="index.html"><img class="desktop-logo" src="<?php echo e(base_url('assets/frontend/')); ?>images/LOGO-WEB-WHITE.png" style="height:35px" alt="Desktop Logo"> <img class="small-logo" src="<?php echo e(base_url('assets/frontend/')); ?>images/LOGO-WEB-WHITE.png" style="height:35px" alt="Mobile Logo"></a>
    </div>

    <!-- Side Nav -->
    <div class="ecaps-sidenav" id="ecapsSideNav">
        <!-- Side Menu Area -->
        <div class="side-menu-area">
            <!-- Sidebar Menu -->
            <nav>
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="
                    <?php if($content == 'dashboard'): ?>
                        active 
                    <?php endif; ?>"
                    ><a href="<?php echo e(base_url('admin/')); ?>index.html"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                    <li class="treeview <?php if($content == 'user' || $content == 'pengurus' || $content == 'summary' || $content == 'slider'): ?> active <?php endif; ?>">
                        <a href="javascript:void(0)"><i class="fa fa-laptop"></i> <span>Menu Administratif</span> <i class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li class="<?php if($content == 'user'): ?> active <?php endif; ?>"><a href="<?php echo e(base_url('admin/')); ?>user.html">Kelola Pengguna</a></li>
                            <li class="<?php if($content == 'pengurus'): ?> active <?php endif; ?>"><a href="<?php echo e(base_url('admin/')); ?>pengurus.html">Kelola Pengurus</a></li>
                            <li class="<?php if($content == 'slider'): ?> active <?php endif; ?>"><a href="<?php echo e(base_url('admin/')); ?>slider.html">Informasi Website</a></li>
                            <li class="<?php if($content == 'summary'): ?> active <?php endif; ?>"><a href="<?php echo e(base_url('admin/')); ?>summary.html">Rekap Data</a></li>
                        </ul>
                    </li>
                    <li class="treeview <?php if($content == 'article' || $content == 'article-add' || $content == 'article-pending' || $content == 'categories'): ?> active <?php endif; ?>">
                        <a href="javascript:void(0)"><i class="fa fa-book"></i> <span>Menu Artikel</span> <i class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li class="<?php if($content == 'article-add'): ?> active <?php endif; ?>"><a href="<?php echo e(base_url('admin/article/')); ?>create.html">Tambah Artikel Baru</a></li>
                            <li class="<?php if($content == 'article'): ?> active <?php endif; ?>"><a href="<?php echo e(base_url('admin/')); ?>article.html">Kelola Artikel</a></li>
                            <li class="<?php if($content == 'categories'): ?> active <?php endif; ?>"><a href="<?php echo e(base_url('admin/article/')); ?>categories.html">Kelola Kategori Artikel</a></li>
                            <li class="<?php if($content == 'article-pending'): ?> active <?php endif; ?>"><a href="<?php echo e(base_url('admin/article/')); ?>pending.html">Kelola Artikel Pending</a></li>
                        </ul>
                    </li>
                    <li class="treeview <?php if($content == 'song' || $content == 'song-add'): ?> active <?php endif; ?>">
                        <a href="javascript:void(0)"><i class="fa fa-headphones"></i> <span>Menu Lagu</span> <i class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li class="<?php if($content == 'song-add'): ?> active <?php endif; ?>"><a href="<?php echo e(base_url('admin/')); ?>song/create.html">Tambah Lagu Baru</a></li>
                            <li class="<?php if($content == 'song'): ?> active <?php endif; ?>"><a href="<?php echo e(base_url('admin/')); ?>song.html">Kelola Lagu</a></li>
                        </ul>
                    </li>
                    <li class="treeview <?php if($content == 'documents' || $content == 'documents-add'): ?> active <?php endif; ?>">
                        <a href="javascript:void(0)"><i class="fa fa-folder"></i> <span>Menu Dokumen</span> <i class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li class="<?php if($content == 'documents-add'): ?> active <?php endif; ?>"><a href="<?php echo e(base_url('admin/')); ?>documents/create.html">Tambah Dokumen</a></li>
                            <li class="<?php if($content == 'documents'): ?> active <?php endif; ?>"><a href="<?php echo e(base_url('admin/')); ?>documents.html">Kelola Dokumen</a></li>
                        </ul>
                    </li>
                    <li class="treeview <?php if($content == 'products' || $content == 'products-add'): ?> active <?php endif; ?>">
                        <a href="javascript:void(0)"><i class="fa fa-shopping-cart"></i> <span>Menu Produk</span> <i class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li class="<?php if($content == 'products-add'): ?> active <?php endif; ?>"><a href="<?php echo e(base_url('admin/')); ?>products/create.html">Tambah Produk Baru</a></li>
                            <li class="<?php if($content == 'products'): ?> active <?php endif; ?>"><a href="<?php echo e(base_url('admin/')); ?>products.html">Kelola Produk</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/layouts/sidebar.blade.php ENDPATH**/ ?>