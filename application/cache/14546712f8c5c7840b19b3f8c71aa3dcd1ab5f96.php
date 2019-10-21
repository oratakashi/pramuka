<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="
                    <?php if($content == 'dashboard'): ?>
                        active 
                    <?php endif; ?>
                " href="<?php echo e(base_url('admin/')); ?>index.html">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" class="<?php if($content == 'user'): ?> active <?php endif; ?>">
                    <i class="fa fa-laptop"></i>
                    <span>Menu Administratif</span>
                </a>
                <ul class="sub active">
                    <li class="<?php if($content == 'user'): ?> active <?php endif; ?>"><a href="<?php echo e(base_url('admin/')); ?>user.html">Kelola Pengguna</a></li>
                    <li class=""><a href="user.html">Rekap Data</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" class="<?php if($content == 'article' || $content == 'article-add' || $content == 'article-pending' || $content == 'categories'): ?> active <?php endif; ?>">
                    <i class="fa fa-book"></i>
                    <span>Menu Artikel</span>
                </a>
                <ul class="sub">
                    <li class="<?php if($content == 'article-add'): ?> active <?php endif; ?>"><a  href="<?php echo e(base_url('admin/article/')); ?>create.html">Tambah Artikel Baru</a></li>
                    <li class="<?php if($content == 'article'): ?> active <?php endif; ?>"><a  href="<?php echo e(base_url('admin/')); ?>article.html"">Kelola Artikel</a></li>
                    <li class="<?php if($content == 'categories'): ?> active <?php endif; ?>"><a  href="<?php echo e(base_url('admin/article/')); ?>categories.html">Kelola Kategori Artikel</a></li>
                    <li class="<?php if($content == 'article-pending'): ?> active <?php endif; ?>"><a  href="<?php echo e(base_url('admin/article/')); ?>pending.html">Kelola Artikel Pending</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" class="<?php if($content == 'song' || $content == 'song-add'): ?> active <?php endif; ?>">
                    <i class="fa fa-headphones"></i>
                    <span>Menu Lagu</span>
                </a>
                <ul class="sub">
                    <li class="<?php if($content == 'song-add'): ?> active <?php endif; ?>"><a  href="<?php echo e(base_url('admin/')); ?>song/create.html">Tambah Lagu Baru</a></li>
                    <li class="<?php if($content == 'song'): ?> active <?php endif; ?>"><a  href="<?php echo e(base_url('admin/')); ?>song.html">Kelola Lagu</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="<?php if($content == 'documents' || $content == 'documents-add'): ?> active <?php endif; ?>">
                    <i class="fa fa-folder"></i>
                    <span>Menu Dokumen</span>
                </a>
                <ul class="sub">
                    <li class="<?php if($content == 'documents-add'): ?> active <?php endif; ?>"><a  href="<?php echo e(base_url('admin/')); ?>documents/create.html">Tambah Dokumen</a></li>
                    <li class="<?php if($content == 'documents'): ?> active <?php endif; ?>"><a  href="<?php echo e(base_url('admin/')); ?>documents.html">Kelola Dokumen</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="<?php if($content == 'products' || $content == 'products-add'): ?> active <?php endif; ?>">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Menu Produk</span>
                </a>
                <ul class="sub">
                    <li class="<?php if($content == 'products-add'): ?> active <?php endif; ?>"><a  href="products/create.html">Tambah Produk baru</a></li>
                    <li class="<?php if($content == 'products'): ?> active <?php endif; ?>"><a  href="products.html">Kelola Produk</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/layouts/sidebar.blade.php ENDPATH**/ ?>