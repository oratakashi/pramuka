<header class="top-header-area d-flex align-items-center justify-content-between">
    <div class="left-side-content-area d-flex align-items-center">
        <!-- Mobile Logo -->
        <div class="mobile-logo mr-3 mr-sm-4">
            <img src="{{base_url('assets/backend/')}}img/core-img/small-logo-color.png" alt="logo"/>
        </div>
        <!-- Triggers -->
        <div class="ecaps-triggers mr-1 mr-sm-3">
            <div class="menu-collasped" id="menuCollasped">
                <i class="zmdi zmdi-menu"></i>
            </div>
            <div class="mobile-menu-open" id="mobileMenuOpen">
                <i class="zmdi zmdi-menu"></i>
            </div>
        </div>
        <!-- Left Side Nav -->
        <ul class="left-side-navbar d-flex align-items-center">
            <li class="nav-item dropdown ml-1 ml-sm-3">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lihat Website <i class="fa fa-angle-down"></i></button>
                <!-- Dropdown Menu -->
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                    <a href="{{base_url()}}" class="dropdown-item" target="_blank">- Halaman Utama</a>
                    <a href="{{base_url('article.html')}}" class="dropdown-item" target="_blank">- Halaman Artikel</a>
                    <a href="{{base_url('stores.html')}}" class="dropdown-item" target="_blank">- Halaman Kedai</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="right-side-navbar d-flex align-items-center justify-content-end">
        <!-- Mobile Trigger -->
        <div class="right-side-trigger" id="rightSideTrigger">
            <i class="ti-align-left"></i>
        </div>

        <!-- Top Bar Nav -->
        <ul class="right-side-content d-flex align-items-center">

            <li class="nav-item dropdown">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ base_url('media/photo_user/') }}@php echo $_SESSION['photo']; @endphp" alt="" style="height:25px;width:25px">
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- User Profile Area -->
                    <div class="user-profile-area">
                        <div class="user-profile-heading">
                            <!-- Thumb -->
                            <div class="profile-thumbnail">
                                <img src="{{ base_url('media/photo_user/') }}@php echo $_SESSION['photo']; @endphp" alt="" style="height:25px;width:25px">
                            </div>
                            <!-- Profile Text -->
                            <div class="profile-text">
                                <h6>@php echo $_SESSION['nama'] @endphp</h6>
                                <span>@php echo $_SESSION['lev_user'] @endphp</span>
                            </div>
                        </div>
                        @if($_SESSION['lev_user']=='Administrator')
                        <a href="{{ base_url('admin/profile.html') }}" class="dropdown-item"><i class="ti-user text-default" aria-hidden="true"></i> Profile</a>
                        <a href="{{ base_url('admin/password.html') }}" class="dropdown-item"><i class="fa fa-key text-success" aria-hidden="true"></i> Ganti Password</a>
                        <a href="{{ base_url('admin/settings.html') }}" class="dropdown-item"><i class="ti-settings text-default" aria-hidden="true"></i> Pengaturan</a>
                        <a href="{{ base_url('admin/logout.aspx') }}" class="dropdown-item"><i class="ti-unlink text-warning" aria-hidden="true"></i> Log-out</a>
                        @elseif($_SESSION['lev_user']=='Pengurus')
                        <a href="{{ base_url('pengurus/profile.html') }}" class="dropdown-item"><i class="ti-user text-default" aria-hidden="true"></i> Profile</a>
                        <a href="{{ base_url('pengurus/password.html') }}" class="dropdown-item"><i class="fa fa-key text-success" aria-hidden="true"></i> Ganti Password</a>
                        <a href="{{ base_url('pengurus/settings.html') }}" class="dropdown-item"><i class="ti-settings text-default" aria-hidden="true"></i> Pengaturan</a>
                        <a href="{{ base_url('pengurus/logout.aspx') }}" class="dropdown-item"><i class="ti-unlink text-warning" aria-hidden="true"></i> Log-out</a>
                        @endif
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>