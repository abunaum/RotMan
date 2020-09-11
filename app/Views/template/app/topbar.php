<!--Start topbar header-->
<header class="topbar-nav">
    <nav class="navbar navbar-expand fixed-top">
        <ul class="navbar-nav mr-auto align-items-center">
            <li class="nav-item">
                <a class="nav-link toggle-menu" href="javascript:void();">
                    <i class="icon-menu menu-icon"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav align-items-center right-nav-link">
            <li class="nav-item">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                    <span class="user-profile"><img src="<?= base_url('') . '/assets/images/profile/' . $_SESSION['gambar']; ?>" class="img-circle" alt="user avatar"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown-divider"></li>
                    <a href="<?= base_url('admin/profile'); ?>">
                        <li class="dropdown-item"><i class="icon-user mr-2"></i> Profile</li>
                    </a>
                    <a href="<?= base_url('admin/password'); ?>">
                        <li class="dropdown-item"><i class="icon-lock mr-2"></i> Password</li>
                    </a>
                    <a href="<?= base_url('logout'); ?>">
                        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
                    </a>
                </ul>
            </li>
        </ul>
    </nav>
</header>
<!--End topbar header-->