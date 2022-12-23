<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Edit Kurir</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Kurir</li>
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
            <form method="POST" action="<?= base_url("admin/kurir/doUpdate/".$detailData->kurir_id); ?>">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Kurir</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Nama Kurir</label>
                            <div class="col-sm-6">
                                <input type="text" name="nama_kurir" class="form-control" placeholder="Nama Kurir" value="<?= $detailData->nama_kurir?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">No HP</label>
                            <div class="col-sm-6">
                                <input type="text" name="no_hp" class="form-control" placeholder="No HP" value="<?= $detailData->no_hp?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Jasa Pengiriman</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="jasa_pengiriman">
                                    <option value="">-- Pilih Jasa Pengiriman --</option>
                                    <option value="1" <?php if($detailData->jasa_pengiriman == 1) {echo 'selected';}?>>JNE</option>
                                    <option value="2" <?php if($detailData->jasa_pengiriman == 2) {echo 'selected';}?>>J&T</option>
                                    <option value="3" <?php if($detailData->jasa_pengiriman == 3) {echo 'selected';}?>>SICEPAT</option>
                                    <option value="4" <?php if($detailData->jasa_pengiriman == 4) {echo 'selected';}?>>POS Indonesia</option>
                                    <option value="5" <?php if($detailData->jasa_pengiriman == 5) {echo 'selected';}?>>TIKI</option>
                                    <option value="6" <?php if($detailData->jasa_pengiriman == 6) {echo 'selected';}?>>ANTERAJA</option>
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
