<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="index.html">
            <img src="<?= base_url(); ?>/assets/images/rotman.png" class="logo-icon" alt="logo icon">
            <h5 class="logo-text"><?= $namaaplikasi; ?></h5>
        </a>
    </div>
    <div class="user-details">
        <div class="media align-items-center">
            <div class="avatar"><img class="mr-3 side-user-img" src="<?= base_url('') . '/assets/images/profile/' . $_SESSION['gambar']; ?>" alt="user avatar"></div>
            <div class="media-body">
                <h6 class="side-user-name"><?= $_SESSION['nama'] ?></h6>
            </div>
        </div>
    </div>
    <ul class="sidebar-menu">
        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="ti-rss-alt"></i> <span>Router</span><i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="<?= base_url('admin'); ?>"><i class="zmdi zmdi-dot-circle-alt"></i> Setting Router</a></li>
            </ul>
        </li>
        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="zmdi zmdi-layers"></i>
                <span>Setting</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="javaScript:void();"><i class="zmdi zmdi-dot-circle-alt"></i> Tema</a></li>
            </ul>
        </li>
        <li class="sidebar-header">LABELS</li>
        <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
        <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
        <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>
    </ul>

</div>
<!--End sidebar-wrapper-->