<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="
                    <?php if($content == 'dashboard'): ?>
                        active 
                    <?php endif; ?>
                " href="<?php echo e(base_url('pengurus/')); ?>index.html">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" class="<?php if($content == 'article' || $content == 'article-add' || $content == 'article-pending' || $content == 'categories'): ?> active <?php endif; ?>">
                    <i class="fa fa-book"></i>
                    <span>Menu Artikel</span>
                </a>
                <ul class="sub">
                    <li class="<?php if($content == 'article-add'): ?> active <?php endif; ?>"><a  href="<?php echo e(base_url('pengurus/article/')); ?>create.html">Tambah Artikel Baru</a></li>
                    <li class="<?php if($content == 'article'): ?> active <?php endif; ?>"><a  href="<?php echo e(base_url('pengurus/')); ?>article.html"">Kelola Artikel</a></li>
                    <li class="<?php if($content == 'categories'): ?> active <?php endif; ?>"><a  href="<?php echo e(base_url('pengurus/article/')); ?>categories.html">Kelola Kategori Artikel</a></li>
                </ul>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/pengurus/sidebar.blade.php ENDPATH**/ ?>