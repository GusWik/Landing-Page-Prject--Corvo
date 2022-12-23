<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Tambah Voucher</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Voucher</li>
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
            <form method="POST" action="<?= base_url("admin/voucher/doadd"); ?>" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <h5>Tambah Voucher</h5>
                    </div>
                    <div class="card-body">
                        <!--
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Nama Kategori</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="id_produk">
                                    <option value="">-- Pilih Produk --</option>
                                    <?php foreach($dataProduk as $value){?>
                                        <option value="<?= $value->produk_id?>"><?= $value->nama_produk?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        -->
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Judul</label>
                            <div class="col-sm-6">
                                <input type="text" name="judul" class="form-control" placeholder="Judul" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Kode Voucher</label>
                            <div class="col-sm-6">
                                <input type="text" name="kode_voucher" class="form-control" placeholder="Kode Voucher" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Gambar</label>
                            <div class="col-sm-6">
                                <input type="file" name="photo" class="form-control" placeholder="Nama Kategori" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Diskon</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="type_diskon">
                                    <option value="">-- Pilih Diskon --</option>
                                    <option value="1">Harga</option>
                                    <option value="2">Persentase</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Potongan Diskon</label>
                            <div class="col-sm-6">
                                <input type="text" name="potongan_diskon" class="form-control" placeholder="Potongan Diskon" value="">
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
