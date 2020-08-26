<?= $this->extend('template/auth'); ?>
<?= $this->section('content'); ?>
<!-- Start wrapper-->
<div id="wrapper">

    <div class="loader-wrapper">
        <div class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="card card-authentication1 mx-auto my-5">
        <div class="card-body">
            <div class="card-content p-2">
                <div class="text-center">
                    <img src="<?php base_url() ?>/assets/images/rotman.png" alt="logo icon">
                </div>
                <div class="card-title text-uppercase text-center py-3">Sign In</div>
                <form action="<?= base_url('/cek'); ?>" method="POST">
                    <div class="form-group">
                        <label for="exampleInputUsername" class="sr-only">Username</label>
                        <div class="position-relative has-icon-right">
                            <input type="text" id="username" name="username" class="form-control input-shadow" placeholder="Username" required>
                            <div class="form-control-position">
                                <i class="icon-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword" class="sr-only">Password</label>
                        <div class="position-relative has-icon-right">
                            <input type="password" id="password" name="password" class="form-control input-shadow" placeholder="Enter Password" required>
                            <div class="form-control-position">
                                <i class="icon-lock"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <hr>
                    </div>
                    <button type="submit" class="btn btn-light btn-block">Login</button>
                </form>
            </div>
        </div>
        <div class="card-footer text-center py-3">
            <p class="text-warning mb-0">Belum punya akun ? <a href="authentication-signup.html"> Daftar disini</a></p>
        </div>
    </div>
    <?= $this->endsection(); ?>