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
    <!-- Bootstrap core CSS-->
    <link href="<?= base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="<?= base_url(); ?>/assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="<?= base_url(); ?>/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Custom Style-->
    <link href="<?= base_url(); ?>/assets/css/app-style.css" rel="stylesheet" />
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

    <!-- start content -->
    <?= $this->renderSection('content'); ?>
    <!-- end content -->

    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

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
    <!--wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/bootstrap.min.js"></script>

    <!-- sidebar-menu js -->
    <script src="<?= base_url(); ?>/assets/js/sidebar-menu.js"></script>

    <!-- Custom scripts -->
    <script src="<?= base_url(); ?>/assets/js/app-script.js"></script>
    <!-- Custom scripts -->
    <script src="<?= base_url(); ?>/assets/js/app-script.js"></script>
    <script src="<?= base_url(); ?>/assets/plugins/swal/sweetalert2.all.min.js"></script>
    <?php if ($pesan == 'password-salah') : ?>
        <script>
            function pesan() {
                Swal.fire({
                    icon: 'error',
                    title: 'Maaf',
                    text: 'Password yang anda masukkan salah.'
                })
            }
            pesan();
        </script>
    <?php endif; ?>
    <?php if ($pesan == 'login-error') : ?>
        <script>
            function pesan() {
                Swal.fire({
                    icon: 'error',
                    title: 'Maaf',
                    text: 'Username yang anda masukkan tidak ditemukan.'
                })
            }
            pesan();
        </script>
    <?php endif; ?>
    <?php if ($pesan == 'logout') : ?>
        <script>
            function pesan() {
                Swal.fire({
                    icon: 'success',
                    title: 'Terimakasih',
                    text: 'Anda berhasil logout.'
                })
            }
            pesan();
        </script>
    <?php endif; ?>
    <?php if ($pesan == 'belum-login') : ?>
        <script>
            function pesan() {
                Swal.fire({
                    icon: 'error',
                    title: 'Maaf',
                    text: 'Anda belum login.'
                })
            }
            pesan();
        </script>
    <?php endif; ?>
    <?php if ($pesan == 'bukan-admin') : ?>
        <script>
            function pesan() {
                Swal.fire({
                    icon: 'error',
                    title: 'Maaf',
                    text: 'Anda bukan admin.'
                })
            }
            pesan();
        </script>
    <?php endif; ?>
</body>

</html>