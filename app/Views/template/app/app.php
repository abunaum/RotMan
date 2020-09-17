<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title . ' - ' . $namaaplikasi; ?></title>
    <!--favicon-->
    <link rel="icon" href="<?= base_url(); ?>/favicon.ico" type="image/x-icon">
    <!-- simplebar CSS-->
    <link href="<?= base_url(); ?>/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="<?= base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="<?= base_url(); ?>/assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="<?= base_url(); ?>/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="<?= base_url(); ?>/assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="<?= base_url(); ?>/assets/css/app-style.css" rel="stylesheet" />
    <?php if (isset($scheader)) : ?>
        <?php foreach ($scheader as $sc) : ?>
            <link href="<?= base_url() . $sc; ?>" rel="stylesheet" />
        <?php endforeach; ?>
    <?php endif; ?>

</head>

<body class="bg-theme bg-theme1">

    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- end loader -->

    <!-- Start wrapper-->
    <div id="wrapper">
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

        <!-- start content -->
        <?= $this->renderSection('content'); ?>
        <!-- end content -->

        <!--start overlay-->
        <div class="overlay toggle-menu"></div>
        <!--end overlay-->
    </div>
    <!-- End container-fluid-->

    </div>
    <!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--Start footer-->
    <footer class="footer">
        <div class="container">
            <div class="text-center">
                Copyright © <?= date('Y'); ?> RotMan
            </div>
        </div>
    </footer>
    <!--End footer-->

    <!--start color switcher-->
    <div class="right-sidebar">
        <div class="switcher-icon">
            <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
        </div>
        <div class="right-sidebar-content">

            <p class="mb-0">Gaussion Texture</p>
            <hr>

            <ul class="switcher">
                <li id="theme1"></li>
                <li id="theme2"></li>
                <li id="theme3"></li>
                <li id="theme4"></li>
                <li id="theme5"></li>
                <li id="theme6"></li>
            </ul>

            <p class="mb-0">Gradient Background</p>
            <hr>

            <ul class="switcher">
                <li id="theme7"></li>
                <li id="theme8"></li>
                <li id="theme9"></li>
                <li id="theme10"></li>
                <li id="theme11"></li>
                <li id="theme12"></li>
                <li id="theme13"></li>
                <li id="theme14"></li>
                <li id="theme15"></li>
            </ul>

        </div>
    </div>
    <!--end color switcher-->

    </div>
    <!--End wrapper-->


    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="<?= base_url(); ?>/assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="<?= base_url(); ?>/assets/js/sidebar-menu.js"></script>

    <!-- Custom scripts -->
    <script src="<?= base_url(); ?>/assets/js/app-script.js"></script>
    <?php if (isset($jsfooter)) : ?>
        <?php foreach ($jsfooter as $js) : ?>
            <script src="<?= base_url() . $js; ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
    <?php if (isset($scfooter)) : ?>
        <?php foreach ($scfooter as $sc) : ?>
            <script>
                <?= $sc; ?>
            </script>
        <?php endforeach; ?>
    <?php endif; ?>
    <?php if (isset($pesan)) : ?>
        <?= $pesan; ?>
    <?php endif; ?>
</body>

</html>