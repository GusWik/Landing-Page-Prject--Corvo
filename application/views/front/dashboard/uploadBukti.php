<div class="body__overlay"></div>
<!-- Start Offset Wrapper -->
<!-- Start Category Area -->
<section class="htc__category__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Upload Bukti Pembayaran</h2>
                </div>
            </div>
        </div>
        <div class="htc__product__container" style="margin-top: 20px;">
            <div class="row">
                <div class="col-md-6">
                    <p>Berhasil Checkout dengan kode transaksi <?= $detailTransaksi->no_transaksi?> Harap bayar ke Bank Central Asia 123456789 (Atas Nama: PT Bakomart), barang dikirim sesuai dengan alamat Customer"</p>
                </div>
                <div class="col-md-6">
                    <form method="post" action="<?= base_url('front/dashboard/doUploadBukti/'.$detailTransaksi->transaksi_id);?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Upload Bukti Pembayaran</label>
                            <input type="file" name="bukti" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default">Upload Bukti</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- End Category Area -->