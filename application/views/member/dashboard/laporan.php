<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Laporan Pesanan</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Pesanan</li>
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
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Data Pesanan</h5>
                </div>
                <div class="card-body">
                    <form method="get" action="<?= base_url('admin/laporan/');?>">
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input type="date" name="dari" class="form-control" value="<?php if($_GET){echo $_GET['dari'];}?>">
                            </div>
                            -
                            <div class="col-md-4">
                                <input type="date" name="sampai" class="form-control" value="<?php if($_GET){echo $_GET['sampai'];}?>">
                            </div>
                            <div class="col-md-3">
                                <label></label>
                                <button type="submit" class="btn btn-default">Filter</button>
                            </div>
                        </div>
                    </form>
                    <?php echo $this->session->flashdata('msgbox') ?>
                    <div class="table-responsive" style="margin-top: 20px;">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px;">No</th>
                                    <th>No Transaksi</th>
                                    <th>Customer</th>
                                    <th>Produk</th>
                                    <th>Qty</th>
                                    <th>Harga Produk</th>
                                    <th>Tanggal Transaksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($listData as $key => $value) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $value->no_transaksi ?></td>
                                        <td><?= $value->customer ?></td>
                                        <td><?= $value->nama_produk ?></td>
                                        <td><?= $value->qty ?></td>
                                        <td><?= $value->harga_produk ?></td>
                                        <td><?= tgl_indo($value->tgl_transaksi) ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
