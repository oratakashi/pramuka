<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="
                    @if ($content == 'dashboard')
                        active 
                    @endif
                " href="{{base_url('pengurus/')}}index.html">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" class="@if ($content == 'article' || $content == 'article-add' || $content == 'article-pending' || $content == 'categories') active @endif">
                    <i class="fa fa-book"></i>
                    <span>Menu Artikel</span>
                </a>
                <ul class="sub">
                    <li class="@if ($content == 'article-add') active @endif"><a  href="{{base_url('pengurus/article/')}}create.html">Tambah Artikel Baru</a></li>
                    <li class="@if ($content == 'article') active @endif"><a  href="{{base_url('pengurus/')}}article.html"">Kelola Artikel</a></li>
                    <li class="@if ($content == 'categories') active @endif"><a  href="{{base_url('pengurus/article/')}}categories.html">Kelola Kategori Artikel</a></li>
                </ul>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>