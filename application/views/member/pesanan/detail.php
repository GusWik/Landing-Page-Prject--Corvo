<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Detail Pesanan</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Pesanan</li>
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
            <form method="POST" action="<?= base_url("admin/produk/doUpdate/"); ?>" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <h5>Detail Pesanan</h5>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th style="width:150px">No Pesanan</th>
                                <th style="width:10px">:</th>
                                <th><?= $detailData->no_transaksi?></th>
                            </tr>
                            <tr>
                                <th style="width:150px">Customer</th>
                                <th style="width:10px">:</th>
                                <th><?= $detailCustomer->customer?></th>
                            </tr>
                            <tr>
                                <th style="width:150px">No Telp</th>
                                <th style="width:10px">:</th>
                                <th><?= $detailCustomer->no_hp?></th>
                            </tr>
                            <tr>
                                <th style="width:180px">Tanggal Pemesanan</th>
                                <th style="width:10px">:</th>
                                <th><?= tgl_indo($detailData->tgl_transaksi)?></th>
                            </tr>
                            <tr>
                                <th style="width:180px">Alamat Pengiriman</th>
                                <th style="width:10px">:</th>
                                <th><?= $detailData->alamat_rumah.' Kota '.$detailData->kota?></th>
                            </tr>
                            <tr>
                                <th style="width:180px">Pengiriman</th>
                                <th style="width:10px">:</th>
                                <th><?= tgl_indo($detailData->tgl_pengiriman).' Jam '.$detailData->jam_pengiriman?></th>
                            </tr>
                            <tr>
                                <th style="width:180px">Pembayaran</th>
                                <th style="width:10px">:</th>
                                <th><?php if($detailData->payment_method == 'cashondelivery'){ echo 'Cash On Delivery';}else{echo 'Card';}?></th>
                            </tr>
                        </table>
                        <p>Detail Pesanan</p>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Produk</th>
                                    <th>QTY</th>
                                    <th>Harga Produk</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($detailPesanan as $key => $value) { ?>
                                <tr>
                                    <td><?= $value->nama_produk?></td>
                                    <td><?= $value->qty?></td>
                                    <td><?= $value->harga_produk?></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                        <hr>
                        <?php if($detailData->payment_method != 'cashondelivery'){?>
                        <p>Bukti Pembayaran</p>
                        <div class="form-group">
                            <img src="<?= base_url($detailData->bukti_pembayaran)?>" style="width: 300px;">
                        </div>
                        <?php }?>
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url('admin/pesanan');?>" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
