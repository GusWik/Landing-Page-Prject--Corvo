<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
	    <meta name="description" content="Gambolthemes">
	    <meta name="author" content="Gambolthemes">
	    <title>Bako - Mart</title>

	    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('uploads/logo.png');?>">

	    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	    <link href='<?= base_url("assets_front/gombo/css/")?>unicons.css' rel='stylesheet'>
	    <link href="<?= base_url('assets_front/gombo/css/')?>style.css" rel="stylesheet">
	    <link href="<?= base_url('assets_front/gombo/css/')?>responsive.css" rel="stylesheet">
	    <link href="<?= base_url('assets_front/gombo/css/')?>night-mode.css" rel="stylesheet">

	    <link href="<?= base_url('assets_front/gombo/css/')?>all.min.css" rel="stylesheet">
	    <link href="<?= base_url('assets_front/gombo/css/')?>owl.carousel.css" rel="stylesheet">
	    <link href="<?= base_url('assets_front/gombo/css/')?>owl.theme.default.min.css" rel="stylesheet">
	    <link href="<?= base_url('assets_front/gombo/css/')?>bootstrap.min.css" rel="stylesheet">
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


		<!-- ================ MODAL =================== -->

		<div class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="modalVerifikasi">
		    <div class="modal-dialog">
		    
		      	<!-- Modal content-->
		      	<div class="modal-content">
			        <div class="modal-header">
			          	<h4 class="modal-title">Verifikasi Email</h4>
			        </div>
			        <form method="post" action="<?= base_url('login/verifikasi/').$this->uri->segment(3);?>">
				        <div class="modal-body">
			          		<input type="text" name="kode" placeholder="Enter Your Code" class="form-control">
				        </div>
				        <div class="modal-footer">
				        	<button type="submit" class="btn btn-primary">Verifikasi</button>
				          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
			        </form>
		      	</div>
		      
		    </div>
	  	</div>
		<!-- ================ END MODAL =================== -->
	</head>
	<body>
		<div class="sign-inup">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-5">
						<div class="sign-form">
							<div class="sign-inner">
								<div class="sign-logo" id="logo">
									<a href="index.html"><img src="<?= base_url('uploads/logo.png');?>" alt=""></a>
									<a href="index.html"><img class="logo-inverse" src="<?= base_url('uploads/logo.png');?>" alt=""></a>
								</div>
								<?php echo $this->session->flashdata('msgbox') ?>
								<div class="form-dt">
									<div class="form-inpts checout-address-step">
										<form method="post" action="<?= base_url('login/doLoginCustomer');?>">
											<div class="form-title"><h6>Sign In</h6></div>
											<div class="form-group pos_rel">
												<input id="phone[number]" name="username" type="text" placeholder="Enter Usename" class="form-control lgn_input" required="">
												<i class="uil uil-mobile-android-alt lgn_icon"></i>
											</div>
											<div class="form-group pos_rel">
												<input id="password" name="password" type="password" placeholder="Enter Password" class="form-control lgn_input" required="">
												<i class="uil uil-padlock lgn_icon"></i>
											</div>
											<button class="login-btn hover-btn" type="submit">Sign In Now</button>
										</form>
									</div>
									<!--
									<div class="password-forgor">
										<a href="forgot_password.html">Forgot Password?</a>
									</div>
								-->
									<div class="signup-link">
										<p>Don't have an account? - <a href="<?= base_url('login/registerCustomer');?>">Sign Up Now</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			<?php $s = $this->uri->segment(3);?>
			if(<?= "'".$s."'"?> != ''){
	            $('#modalVerifikasi').modal('show');
			}
		</script>

	</body>
</html>