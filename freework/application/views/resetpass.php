<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 08:53:47 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>freework</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<?php include_once("topscript.php")?>
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth transparent-header">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.html"><img src="<?php echo base_url('resources/user/')?>images/freeworklogo.png" data-sticky-logo="<?php echo base_url('resources/user/')?>images/freeworklogo.png" data-transparent-logo="<?php echo base_url('resources/user/')?>images/freeworklogo.png" alt=""></a>
				</div>

				<!-- Main Navigation -->
				
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Titlebar
================================================== -->



<!-- Page Content
================================================== -->

<div class="container">
	<div class="row">
		<div class="col-xl-5 offset-xl-3">


			<div class="login-register-page">
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Forgot Password</h3>
				    <span>enter your email address</span>
				</div>
					
				<!-- Form -->
				<form method="post" id="login-form" action="<?php echo site_url("Userlogin/sendMail")?>">
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="email" class="input-text with-border" name="txtemail" id="emailaddress" placeholder="Email Address" required/>
					</div>

					
		
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form">Continue<i class="icon-material-outline-arrow-right-alt"></i></button>
				
				<!-- Social Login -->
				
					</form>
			</div>

		</div>
	</div>
</div>


</div>


<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->

<!-- Footer
================================================== -->

<!-- Footer / End -->

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<?php include_once("bottomscript.php")?>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 08:53:47 GMT -->
</html>