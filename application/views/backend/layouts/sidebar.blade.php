<div class="ecaps-sidemenu-area">
    <!-- Desktop Logo -->
    <div class="ecaps-logo">
        <a href="index.html"><img class="desktop-logo" src="{{base_url('assets/frontend/')}}images/LOGO-WEB-WHITE.png" style="height:35px" alt="Desktop Logo"> <img class="small-logo" src="{{base_url('assets/frontend/')}}images/LOGO-WEB-WHITE.png" style="height:35px" alt="Mobile Logo"></a>
    </div>

    <!-- Side Nav -->
    <div class="ecaps-sidenav" id="ecapsSideNav">
        <!-- Side Menu Area -->
        <div class="side-menu-area">
            <!-- Sidebar Menu -->
            <nav>
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="
                    @if ($content == 'dashboard')
                        active 
                    @endif"
                    ><a href="{{base_url('admin/')}}index.html"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                    <li class="treeview @if ($content == 'user' || $content == 'pengurus' || $content == 'summary' || $content == 'slider') active @endif">
                        <a href="javascript:void(0)"><i class="fa fa-laptop"></i> <span>Menu Administratif</span> <i class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li class="@if ($content == 'user') active @endif"><a href="{{base_url('admin/')}}user.html">Kelola Pengguna</a></li>
                            <li class="@if ($content == 'pengurus') active @endif"><a href="{{base_url('admin/')}}pengurus.html">Kelola Pengurus</a></li>
                            <li class="@if ($content == 'slider') active @endif"><a href="{{base_url('admin/')}}slider.html">Informasi Website</a></li>
                            <li class="@if ($content == 'summary') active @endif"><a href="{{ base_url('admin/') }}summary.html">Rekap Data</a></li>
                        </ul>
                    </li>
                    <li class="treeview @if ($content == 'article' || $content == 'article-add' || $content == 'article-pending' || $content == 'categories') active @endif">
                        <a href="javascript:void(0)"><i class="fa fa-book"></i> <span>Menu Artikel</span> <i class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li class="@if ($content == 'article-add') active @endif"><a href="{{base_url('admin/article/')}}create.html">Tambah Artikel Baru</a></li>
                            <li class="@if ($content == 'article') active @endif"><a href="{{base_url('admin/')}}article.html">Kelola Artikel</a></li>
                            <li class="@if ($content == 'categories') active @endif"><a href="{{base_url('admin/article/')}}categories.html">Kelola Kategori Artikel</a></li>
                            <li class="@if ($content == 'article-pending') active @endif"><a href="{{base_url('admin/article/')}}pending.html">Kelola Artikel Pending</a></li>
                        </ul>
                    </li>
                    <li class="treeview @if ($content == 'song' || $content == 'song-add') active @endif">
                        <a href="javascript:void(0)"><i class="fa fa-headphones"></i> <span>Menu Lagu</span> <i class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li class="@if ($content == 'song-add') active @endif"><a href="{{base_url('admin/')}}song/create.html">Tambah Lagu Baru</a></li>
                            <li class="@if ($content == 'song') active @endif"><a href="{{base_url('admin/')}}song.html">Kelola Lagu</a></li>
                        </ul>
                    </li>
                    <li class="treeview @if ($content == 'documents' || $content == 'documents-add') active @endif">
                        <a href="javascript:void(0)"><i class="fa fa-folder"></i> <span>Menu Dokumen</span> <i class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li class="@if ($content == 'documents-add') active @endif"><a href="{{base_url('admin/')}}documents/create.html">Tambah Dokumen</a></li>
                            <li class="@if ($content == 'documents') active @endif"><a href="{{base_url('admin/')}}documents.html">Kelola Dokumen</a></li>
                        </ul>
                    </li>
                    <li class="treeview @if ($content == 'products' || $content == 'products-add') active @endif">
                        <a href="javascript:void(0)"><i class="fa fa-shopping-cart"></i> <span>Menu Produk</span> <i class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li class="@if ($content == 'products-add') active @endif"><a href="{{base_url('admin/')}}products/create.html">Tambah Produk Baru</a></li>
                            <li class="@if ($content == 'products') active @endif"><a href="{{base_url('admin/')}}products.html">Kelola Produk</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>