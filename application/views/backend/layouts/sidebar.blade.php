<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="
                    @if ($content == 'dashboard')
                        active 
                    @endif
                " href="{{base_url('admin/')}}index.html">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" class="@if ($content == 'user' || $content == 'summary' || $content == 'slider') active @endif">
                    <i class="fa fa-laptop"></i>
                    <span>Menu Administratif</span>
                </a>
                <ul class="sub active">
                    <li class="@if ($content == 'user') active @endif"><a href="{{base_url('admin/')}}user.html">Kelola Pengguna</a></li>
                    <li class="@if ($content == 'slider') active @endif"><a href="{{base_url('admin/')}}slider.html">Informasi Website</a></li>
                    <li class="@if ($content == 'summary') active @endif"><a href="{{ base_url('admin/') }}summary.html">Rekap Data</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" class="@if ($content == 'article' || $content == 'article-add' || $content == 'article-pending' || $content == 'categories') active @endif">
                    <i class="fa fa-book"></i>
                    <span>Menu Artikel</span>
                </a>
                <ul class="sub">
                    <li class="@if ($content == 'article-add') active @endif"><a  href="{{base_url('admin/article/')}}create.html">Tambah Artikel Baru</a></li>
                    <li class="@if ($content == 'article') active @endif"><a  href="{{base_url('admin/')}}article.html"">Kelola Artikel</a></li>
                    <li class="@if ($content == 'categories') active @endif"><a  href="{{base_url('admin/article/')}}categories.html">Kelola Kategori Artikel</a></li>
                    <li class="@if ($content == 'article-pending') active @endif"><a  href="{{base_url('admin/article/')}}pending.html">Kelola Artikel Pending</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" class="@if ($content == 'song' || $content == 'song-add') active @endif">
                    <i class="fa fa-headphones"></i>
                    <span>Menu Lagu</span>
                </a>
                <ul class="sub">
                    <li class="@if ($content == 'song-add') active @endif"><a  href="{{base_url('admin/')}}song/create.html">Tambah Lagu Baru</a></li>
                    <li class="@if ($content == 'song') active @endif"><a  href="{{base_url('admin/')}}song.html">Kelola Lagu</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="@if ($content == 'documents' || $content == 'documents-add') active @endif">
                    <i class="fa fa-folder"></i>
                    <span>Menu Dokumen</span>
                </a>
                <ul class="sub">
                    <li class="@if ($content == 'documents-add') active @endif"><a  href="{{base_url('admin/')}}documents/create.html">Tambah Dokumen</a></li>
                    <li class="@if ($content == 'documents') active @endif"><a  href="{{base_url('admin/')}}documents.html">Kelola Dokumen</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="@if ($content == 'products' || $content == 'products-add') active @endif">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Menu Produk</span>
                </a>
                <ul class="sub">
                    <li class="@if ($content == 'products-add') active @endif"><a  href="{{base_url('admin/')}}products/create.html">Tambah Produk baru</a></li>
                    <li class="@if ($content == 'products') active @endif"><a  href="{{base_url('admin/')}}products.html">Kelola Produk</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>