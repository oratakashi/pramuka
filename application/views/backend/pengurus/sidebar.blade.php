<div class="ecaps-sidemenu-area">
    <!-- Desktop Logo -->
    <div class="ecaps-logo">
        <a href="index.html"><img class="desktop-logo" src="{{base_url('assets/frontend/')}}images/LOGO-WEB-WHITE.png" style="height:35px" alt="Desktop Logo"> <img class="small-logo" src="{{base_url('assets/backend/')}}img/core-img/small-logo.png" alt="Mobile Logo"></a>
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
                    ><a href="{{base_url('pengurus/')}}index.html"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                    <li class="treeview @if ($content == 'article' || $content == 'article-add' || $content == 'article-pending' || $content == 'categories') active @endif">
                        <a href="javascript:void(0)"><i class="fa fa-book"></i> <span>Menu Artikel</span> <i class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li class="@if ($content == 'article-add') active @endif"><a href="{{base_url('pengurus/article/')}}create.html">Tambah Artikel Baru</a></li>
                            <li class="@if ($content == 'article') active @endif"><a href="{{base_url('pengurus/')}}article.html">Kelola Artikel</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>