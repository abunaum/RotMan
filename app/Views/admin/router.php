<?= $this->extend('template/app/app'); ?>
<?= $this->section('content'); ?>
<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Data Router</h4>
            </div>
        </div>
        <!-- End Breadcrumb-->
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Detail Router <?= $router[0]['nama']; ?></div>
                        <hr>
                        <form action="<?= base_url('admin/connect') . "/" . $router[0]['id']; ?>" method="post">
                            <div class="form-group row">
                                <label for="ip" class="col-sm-2 col-form-label">IP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ip" name="ip" value="<?= $router[0]['ip']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="port" class="col-sm-2 col-form-label">Port</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="port" name="port" value="<?= $router[0]['port']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="username" name="username" value="<?= $router[0]['username']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="password" name="password" value="<?= $router[0]['password']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Hotspot</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $router[0]['nama']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="login" class="col-sm-2 col-form-label">Alamat Login</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="login" name="login" value="<?= $router[0]['login']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-light waves-effect waves-light m-1"><i class="zmdi zmdi-flash"></i> Connect</button>
                                    <a href="javaScript:void();" class="btn btn-light waves-effect waves-light m-1" data-toggle="modal" data-target="#EditRouterModal"><i class="ti-pencil"></i> Edit</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Row-->
                <div class="modal fade" id="EditRouterModal" tabindex="-1" role="dialog" aria-labelledby="EditRouterModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="EditRouterModalLabel">Edit Router</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= base_url('admin/edit-router') . "/" . $router[0]['id']; ?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="ip" name="ip" placeholder="IP" value="<?= $router[0]['ip']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="port" name="port" placeholder="PORT" value="<?= $router[0]['port']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= $router[0]['username']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="password" name="password" placeholder="Password" value="<?= $router[0]['password']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Hotspot" value="<?= $router[0]['nama']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="login" name="login" placeholder="Alamat Login Hotspot" value="<?= $router[0]['login']; ?>" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?= $this->endsection(); ?>