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