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
	    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_front/gombo/css/')?>semantic.min.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="sign-inup">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-5">
						<div class="sign-form">
							<div class="sign-inner">
								<div class="sign-logo" id="logo">
									<a href="#"><img src="<?= base_url('uploads/logo.png');?>" alt=""></a>
									<a href="#"><img class="logo-inverse" src="<?= base_url('uploads/logo.png');?>" alt=""></a>
								</div>
								<div class="form-dt">
									<div class="form-inpts checout-address-step">
										<form method="post" action="<?= base_url('login/doRegisterCustomer');?>">
											<div class="form-title"><h6>Sign Up</h6></div>

											<div class="form-group pos_rel">
												<input name="name" type="text" placeholder="Enter Fullname" class="form-control lgn_input" required="">
												<i class="fa fa-user lgn_icon"></i>
											</div>

											<div class="form-group pos_rel">
												<input name="number" type="number" placeholder="Enter Phone Number" class="form-control lgn_input" required="">
												<i class="fa fa-phone lgn_icon"></i>
											</div>

											<div class="form-group pos_rel">
												<input name="email" type="email" placeholder="Enter Email" class="form-control lgn_input" required="">
												<i class="fa fa-envelope lgn_icon"></i>
											</div>

											<div class="form-group pos_rel">
												<input name="username" type="text" placeholder="Enter Username" class="form-control lgn_input" required="">
												<i class="fa fa-user-circle-o lgn_icon"></i>
											</div>

											<div class="form-group pos_rel">
												<input id="password1" name="password" type="password" placeholder="Enter Password" class="form-control lgn_input" required="">
												<i class="fa fa-unlock-alt lgn_icon"></i>
											</div>
											<button class="login-btn hover-btn" type="submit">Sign Up</button>
										</form>
									</div>
									<!--
									<div class="password-forgor">
										<a href="forgot_password.html">Forgot Password?</a>
									</div>
								-->
									<div class="signup-link">
										<p>I have an account? -  <a href="<?= base_url('login/customer')?>">Sign In Now</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="<?= base_url('assets_front/gombo/js/');?>jquery-3.3.1.min.js"></script>
		<script src="<?= base_url('assets_front/gombo/js/');?>night-mode.js"></script>

	</body>
</html>