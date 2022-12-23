<!DOCTYPE html>
<html>
<head>
	<!-- HEAD -->
	<?php  $this->load->view('front/include/head') ?>
	<!-- END HEAD -->
</head>
<body>
	<div class="wrapper">
		<!-- HEADER -->
		<?php  $this->load->view('front/include/header',$customerLogin) ?>
		<!-- END Header -->

		<!-- CONTENT -->
		<?php $this->load->view($v_content) ?>
		<!-- END CONTENT -->
	</div>

	<!-- FOOTER -->
	<?php  $this->load->view('front/include/footer') ?>
	<!-- END FOOTER -->
</body>
</html>