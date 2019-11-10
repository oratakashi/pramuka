<header class="header white-bg">
    <div class="sidebar-toggle-box">
        <i class="fa fa-bars"></i>
    </div>
    <!--logo start-->
    <a href="index-2.html" class="logo">Pramuka Lumajang </a>
    <!--logo end-->
    <div class="top-nav ">
        <!--search & user info start-->
        <ul class="nav float-right top-menu">
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="" class="rounded-circle" style="height:25px;width:25px" src="{{ base_url('media/photo_user/') }}@php echo $_SESSION['photo']; @endphp">
                    <span class="username">@php echo $_SESSION['nama'] @endphp</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout dropdown-menu-right">
                    <div class="log-arrow-up"></div>
                    @if($_SESSION['lev_user']=='Administrator')
                    <li><a href="{{ base_url('admin/profile.html') }}"><i class=" fa fa-user"></i>Profile</a></li>
                    <li><a href="{{ base_url('admin/settings.html') }}"><i class="fa fa-cog"></i> Pengaturan</a></li>
                    <li><a href="{{ base_url('admin/password.html') }}"><i class="fa fa-key"></i> Change Password</a></li>
                    <li><a href="{{ base_url('admin/logout.aspx') }}"><i class="fa fa-sign-out"></i> Log Out</a></li>
                    @else
                    <li><a href="{{ base_url('admin/profile.html') }}"><i class=" fa fa-user"></i>Profile</a></li>
                    <li><a href="{{ base_url('admin/settings.html') }}"><i class="fa fa-cog"></i> Pengaturan</a></li>
                    <li><a href="#"><i class="fa fa-key"></i> Change Password</a></li>
                    <li><a href="{{ base_url('admin/logout.aspx') }}"><i class="fa fa-sign-out"></i> Log Out</a></li>
                    @endif
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!--search & user info end-->
    </div>
</header>