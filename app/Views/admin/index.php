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
                    <div class="card-header">
                        <i class="fa fa-table"></i> Data Router = <?= $totalrouter; ?>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="mb-3">
                                <a href="javaScript:void();" class="btn btn-light waves-effect waves-light m-1" data-toggle="modal" data-target="#TambahRouterModal">
                                    <i class="fa fa-fw fa-plus"></i><span> Tambah Router</span>
                                </a>
                            </div>
                            <table id="default-datatable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>IP:Port</th>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>Alamat Login</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($router as $r) : ?>
                                        <?php $id = $r['id']; ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td>
                                                <a href="<?= base_url('admin'); ?>/router-detail/<?= $id ?>">
                                                    <i class="ti-pencil"></i>
                                                    <span> <?= $r['ip'] . ":" . $r['port']; ?></span>
                                                </a>
                                            </td>
                                            <td><?= $r['username']; ?></td>
                                            <td><?= $r['nama']; ?></td>
                                            <td><?= $r['login']; ?></td>
                                            <td>
                                                <form action="<?= base_url('/admin/router') . "/" . $id; ?>" method="post" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn-social btn-social-circle waves-effect waves-light m-1"><i class="ti-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Row-->
        <div class="modal fade" id="TambahRouterModal" tabindex="-1" role="dialog" aria-labelledby="TambahRouterModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TambahRouterModalLabel">Tambah Router</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('admin/tambah-router') ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="ip" name="ip" placeholder="IP" required>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" id="port" name="port" placeholder="PORT" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Hotspot" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="login" name="login" placeholder="Alamat Login Hotspot" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?= $this->endsection(); ?>