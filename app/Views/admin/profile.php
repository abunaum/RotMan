<?= $this->extend('template/app/app'); ?>
<?= $this->section('content'); ?>
<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Profile</h4>
            </div>
        </div>
        <!-- End Breadcrumb-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <center>
                            <div class="col-md-4 mt-3 m-0">
                                <img src="<?= base_url('') . '/assets/images/profile/' . $_SESSION['gambar']; ?>" class="card-img">
                                <div class="card-body">
                                    <h5 class="card-title">Username : <?= $_SESSION['username'] ?></h5>
                                    <p class="card-text">Nama : <?= $_SESSION['nama'] ?></p>
                                    <a href="javaScript:void();">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditProfileModal">
                                            <i class="fas fa-user-edit"> Edit Profile</i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div><!-- End Row-->
        <div class="modal fade" id="EditProfileModal" tabindex="-1" role="dialog" aria-labelledby="EditProfileModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="EditProfileModalLabel">Edit Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('admin/edit-profile') ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <center>
                                <img src="<?= base_url('') . '/assets/images/profile/' . $_SESSION['gambar']; ?>" class="img-thumbnail img-prev">
                            </center>
                            <br>
                            <div class="form-group">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $_SESSION['nama']; ?>" required>
                            </div>
                            <div class="custom-file">
                                <input class="custom-file-input" name="file" id="file" type="file" onchange="previewImg()">
                                <label class="custom-file-label" for="file">Pilih file...</label>
                                <label class="col-form-label">Ukuran file maksimal 2Mb , format harus .png atau .jpg</label>
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