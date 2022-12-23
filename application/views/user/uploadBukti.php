<div class="wrapper">
    <div class="gambo-Breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('front/dashboard');?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Upload Bukti Pembayaran</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="all-product-grid">
        <div class="container">
            <div class="product-list-view">
                <div class="row">
                    <div class="col-md-6">
                        <p>Berhasil Checkout dengan kode transaksi <?= $detailTransaksi->no_transaksi?> Harap bayar ke bank xxxx no 123456789 , barang dikirim sesuai dengan alamat Customer"</p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-dt" style="margin-top:auto">
                            <div class="form-inpts checout-address-step">
                                <form method="post" action="<?= base_url('front/dashboard/doUploadBukti/'.$detailTransaksi->transaksi_id);?>" enctype="multipart/form-data">
                                    <div class="form-group pos_rel">
                                        <input type="file" name="bukti" class="form-control">
                                    </div>
                                    <button class="login-btn hover-btn" type="submit">Upload</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>