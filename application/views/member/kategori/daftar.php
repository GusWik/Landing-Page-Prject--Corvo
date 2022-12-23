<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Kategori</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Kategori</li>
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
                    <h5 class="card-title">Data Kategori</h5>
                </div>
                <div class="card-body">
                    <?php echo $this->session->flashdata('msgbox') ?>
                    <a href="<?php echo base_url('admin/kategori/add/') ?>" class="button-pull-right"  >
                        <button type="button" class="btn btn-sm btn-success">
                            <i class="ace-icon fa fa-plus"></i>
                            Tambah Data
                        </button>
                    </a> 
                    <div class="table-responsive" style="margin-top: 20px;">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px;">No</th>
                                    <th>Kategori</th>
                                    <th>Icon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($listData as $key => $value) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $value->nama_kategori ?></td>
                                        <td><img src="<?= base_url().$value->icon;?>" width="100px"></td>
                                        <td>
                                            <a href="<?= base_url("admin/kategori/edit/".$value->kategori_id) ?>" class="btn btn-info">Edit</a>
                                            <a href="<?= base_url("admin/kategori/doDelete/".$value->kategori_id) ?>" onclick="return confirm('Are you sure delete this data  ? ')" class="btn btn-danger">Delete</a>
                                        </td>
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
