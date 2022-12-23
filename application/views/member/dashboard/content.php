<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Dashboard</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
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
    <!-- Sales Cards  -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    Selamat datang, <?= $userLogin['Username'] ?>
                </div>
            </div>
            <!--
            <?php if ($this->session->loginData['Role'] == "karyawan" || $this->session->loginData['Role'] == "kepala_divisi") { ?>
                <div class="card">
                    <div class="card-body">
                        <?php echo $this->session->flashdata('msgbox') ?>
                        <h3>Absensi Harian</h3>
                        <br>
                        <?php if (empty($checkKehadiran)) { ?>
                            <form action="<?php echo base_url('admin/dashboard/masuk/') ?>" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Upload Gambar</label>
                                            <div class="col-sm-6">
                                                <input type="file" name="file" class="form-control" name="file" accept="image/*;" capture="user">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Tanggal</label>
                                            <div class="col-sm-6">
                                                <input type="Date" name="tanggal" class="form-control"  value="<?= date('Y-m-d')?>"  readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Jam Masuk</label>
                                            <div class="col-sm-6">
                                                <input type="time" name="jam_masuk" class="form-control" value="" id="txt"  readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Jam Keluar</label>
                                            <div class="col-sm-6">
                                                <input type="time" name="jam_keluar" class="form-control" value="" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                <button type="submit" class="btn btn-success" style="margin-bottom:10px">Masuk Hari ini</button>
                            </form>
                        <?php } else {
                            if (empty($checkKehadiran->jam_keluar)) { ?>
                                <form action="<?php echo base_url('admin/dashboard/keluar/') ?>" method="post" enctype="multipart/form-data">
                                    <h4>Anda sudah mengisi absensi hari ini</4><br> <br>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Upload Gambar</label>
                                            <div class="col-sm-6">
                                                <input type="file" name="file" class="form-control" name="file" accept="image/*;" capture="user">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Tanggal</label>
                                            <div class="col-sm-6">
                                                <input type="Date" name="tanggal" class="form-control"  value="<?= date('Y-m-d')?>"  readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Jam Masuk</label>
                                            <div class="col-sm-6">
                                                <input type="time" name="jam_masuk" class="form-control" value="<?= $checkKehadiran->jam_masuk?>"  readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Jam Keluar</label>
                                            <div class="col-sm-6">
                                                <input type="time" name="jam_keluar" class="form-control" id="txt" readonly>
                                            </div>
                                        </div>
                                    </div>
                                <br>
                                <br>
                                <button type="submit" class="btn btn-danger" style="margin-bottom:10px">Pulang Hari ini</button>
                                </form>
                            <?php }
                            else{?>
                                <h4>Anda sudah melengkapi absensi hari ini</h4>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Upload Gambar</label>
                                            <div class="col-sm-6">
                                                <input type="file" name="file" class="form-control" name="file" accept="image/*;" capture="user">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Tanggal</label>
                                            <div class="col-sm-6">
                                                <input type="Date" name="tanggal" class="form-control"  value="<?= date('Y-m-d')?>"  readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Jam Masuk</label>
                                            <div class="col-sm-6">
                                                <input type="time" name="jam_masuk" class="form-control" value="<?= $checkKehadiran->jam_masuk?>"  readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">Jam Keluar</label>
                                            <div class="col-sm-6">
                                                <input type="time" name="jam_keluar" class="form-control" value="<?= $checkKehadiran->jam_keluar?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                        } ?>
                    </div>
                </div>
            <?php } ?>
        -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<script type="text/javascript">
    function startTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('txt').value =
      h + ":" + m + ":" + s;
      var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
