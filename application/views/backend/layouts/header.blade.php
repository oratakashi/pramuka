<header class="top-header-area d-flex align-items-center justify-content-between">
    <div class="left-side-content-area d-flex align-items-center">
        <!-- Mobile Logo -->
        <div class="mobile-logo mr-3 mr-sm-4">
            <img src="{{base_url('assets/frontend/')}}images/LOGO-WEB-.png" alt="logo" style="height:35px"/>
        </div>
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
                    <img src="{{ base_url('media/photo_user/') }}@php echo $_SESSION['photo']; @endphp" alt="">
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- User Profile Area -->
                    <div class="user-profile-area">
                        <div class="user-profile-heading">
                            <!-- Thumb -->
                            <div class="profile-thumbnail">
                                <img src="{{ base_url('media/photo_user/') }}@php echo $_SESSION['photo']; @endphp" alt="">
                            </div>
                            <!-- Profile Text -->
                            <div class="profile-text">
                                <h6>@php echo $_SESSION['nama'] @endphp</h6>
                                <span>@php echo $_SESSION['lev_user'] @endphp</span>
                            </div>
                        </div>
                        <a href="{{ base_url('admin/profile.html') }}" class="dropdown-item"><i class="ti-user text-default" aria-hidden="true"></i> Profile</a>
                        <a href="{{ base_url('admin/settings.html') }}" class="dropdown-item"><i class="fa fa-key text-success" aria-hidden="true"></i> Ganti Password</a>
                        <a href="{{ base_url('admin/password.html') }}" class="dropdown-item"><i class="ti-settings text-default" aria-hidden="true"></i> Pengaturan</a>
                        <a href="{{base_url('pengurus/helpdesk.html')}}" class="dropdown-item"><i class="ti-heart text-purple" aria-hidden="true"></i> Pusat Bantuan</a>
                        <a href="{{ base_url('admin/logout.aspx') }}" class="dropdown-item"><i class="ti-unlink text-warning" aria-hidden="true"></i> Log-out</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>