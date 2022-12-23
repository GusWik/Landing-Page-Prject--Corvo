<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Edit User</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="<?= base_url("admin/user/doUpdate/".$detailData->user_id); ?>">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit User</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Nama User</label>
                            <div class="col-sm-6">
                                <input type="text" name="nama" class="form-control" placeholder="Nama User" value="<?= $detailData->nama ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Username</label>
                            <div class="col-sm-6">
                                <input type="text" name="username" class="form-control" placeholder="username" value="<?= $detailData->username ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Password</label>
                            <div class="col-sm-6">
                                <input type="password" name="password" class="form-control" placeholder="password" value="">
                                <small>*) Isi Password untuk rubah password</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Role</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="role">
                                    <option value="admin" <?= ($detailData->role == "admin")?"selected":""; ?>>Admin</option>
                                    <option value="kepala_divisi" <?= ($detailData->role == "hrd")?"selected":""; ?>>Kepala Divisi</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-default">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
