<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Tambah Kurir</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Kurir</li>
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
            <form method="POST" action="<?= base_url("admin/kurir/doadd"); ?>">
                <div class="card">
                    <div class="card-header">
                        <h5>Tambah Kurir</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Nama Kurir</label>
                            <div class="col-sm-6">
                                <input type="text" name="nama_kurir" class="form-control" placeholder="Nama Kurir" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">No HP</label>
                            <div class="col-sm-6">
                                <input type="text" name="no_hp" class="form-control" placeholder="No HP" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Jasa Pengiriman</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="jasa_pengiriman">
                                    <option value="">-- Pilih Jasa Pengiriman --</option>
                                    <option value="1">JNE</option>
                                    <option value="2">J&T</option>
                                    <option value="3">SICEPAT</option>
                                    <option value="4">POS Indonesia</option>
                                    <option value="5">TIKI</option>
                                    <option value="6">ANTERAJA</option>
                                </select>
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
