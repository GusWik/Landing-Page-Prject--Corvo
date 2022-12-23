<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Edit Kategori</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Kategori</li>
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
            <form method="POST" action="<?= base_url("admin/kategori/doUpdate/".$detailData->kategori_id); ?>" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Kategori</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Nama Kategori</label>
                            <div class="col-sm-6">
                                <input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori" value="<?= $detailData->nama_kategori ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Nama Kategori</label>
                            <div class="col-sm-6">
                                <input type="file" name="photo" class="form-control" placeholder="Nama Kategori">
                                <span style="font-size: 10px;color: red;">Pilih Untuk Ganti Icon</span>
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
