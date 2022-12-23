<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Tambah Kategori</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Kategori</li>
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
            <form method="POST" action="<?= base_url("admin/kategori/doadd"); ?>" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <h5>Tambah Kategori</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Nama Kategori</label>
                            <div class="col-sm-6">
                                <input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Icon Kategori</label>
                            <div class="col-sm-6">
                                <input type="file" name="photo" class="form-control" placeholder="Nama Kategori" value="" required>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-default">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
