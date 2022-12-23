<!DOCTYPE html>
<html>
	<!-- HEAD -->
	<?php  $this->load->view('user/include/head') ?>
	<!-- END HEAD -->
<body>
	<?php  $this->load->view('user/include/header',$customerLogin) ?>
	<!--CONTENT -->
	<?php $this->load->view($v_content) ?>
	<!-- END CONTENT -->

	<!-- FOOTER -->
	<?php  $this->load->view('user/include/scripts') ?>
	<!-- END FOOTER -->
</body>
</html>