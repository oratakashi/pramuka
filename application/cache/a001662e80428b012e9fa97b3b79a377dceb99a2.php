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
                    <img alt="" class="rounded-circle" style="height:25px" src="<?php echo e(base_url('media/photo_user/')); ?><?php echo $_SESSION['photo']; ?>">
                    <span class="username"><?php echo $_SESSION['nama'] ?></span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout dropdown-menu-right">
                    <div class="log-arrow-up"></div>
                    <li><a href="#"><i class=" fa fa-user"></i>Profile</a></li>
                    <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                    <li><a href="#"><i class="fa fa-key"></i> Change Password</a></li>
                    <li><a href="<?php echo e(base_url('admin/logout.aspx')); ?>"><i class="fa fa-sign-out"></i> Log Out</a></li>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!--search & user info end-->
    </div>
</header><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/backend/layouts/header.blade.php ENDPATH**/ ?>