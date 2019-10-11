<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="
                    <?php if($content == 'dashboard'): ?>
                        active 
                    <?php endif; ?>
                " href="index.html">
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
                    <li class="<?php if($content == 'user'): ?> active <?php endif; ?>"><a href="user.html">Kelola Pengguna</a></li>
                    <li class=""><a href="user.html">Rekap Data</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-book"></i>
                    <span>Menu Artikel</span>
                </a>
                <ul class="sub">
                    <li><a  href="general.html">Tambah Artikel Baru</a></li>
                    <li><a  href="buttons.html">Kelola Artikel</a></li>
                    <li><a  href="modal.html">Kelola Artikel Pending</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-headphones"></i>
                    <span>Menu Lagu</span>
                </a>
                <ul class="sub">
                    <li><a  href="grids.html">Tambah Lagu Baru</a></li>
                    <li><a  href="calendar.html">Kelola Lagu</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-folder"></i>
                    <span>Menu Dokumen</span>
                </a>
                <ul class="sub">
                    <li><a  href="form_component.html">Tambah Dokumen</a></li>
                    <li><a  href="advanced_form_components.html">Kelola Dokumen</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-shopping-cart"></i>
                    <span>Menu Produk</span>
                </a>
                <ul class="sub">
                    <li><a  href="basic_table.html">Tambah Produk baru</a></li>
                    <li><a  href="responsive_table.html">Kelola Produk</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/layouts/sidebar.blade.php ENDPATH**/ ?>