<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Tambah Produk</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Produk</li>
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
            <form method="POST" action="<?= base_url("admin/produk/doadd"); ?>" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <h5>Tambah Produk</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Kategori</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="id_kategori">
                                    <option value="">-- Pilih Kategori --</option>
                                    <?php foreach($dataKategori as $value){?>
                                    <option value="<?= $value->kategori_id?>"><?= $value->nama_kategori?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Kode Produk</label>
                            <div class="col-sm-6">
                                <input type="text" name="kode_produk" class="form-control" placeholder="Kode Produk" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Nama Produk</label>
                            <div class="col-sm-6">
                                <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Harga</label>
                            <div class="col-sm-6">
                                <input type="number" name="harga" class="form-control" placeholder="Harga" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Stok</label>
                            <div class="col-sm-6">
                                <input type="text" name="stok" class="form-control" placeholder="Stok" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Deskripsi Produk</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="deskripsi"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Gambar Produk</label>
                            <div class="col-sm-6">
                                <input type="file" name="photo" class="form-control" placeholder="Nama Produk" value="">
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
