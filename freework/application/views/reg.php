<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 08:53:54 GMT -->
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
<header id="header-container" class="fullwidth">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.html"><img src="<?php echo  base_url('resources/user/')?>images/freeworklogo.png" alt=""></a>
				</div>

				<!-- Main Navigation -->
				
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			
			<!-- Right Side Content / End -->

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
					<h3 style="font-size: 26px;">Let's create your account!</h3>
					<span>Already have an account? <a href="<?php echo site_url("Userlogin")?>">Log In!</a></span>
				</div>

				
					
				<!-- Form -->
				<form method="post" enctype="multipart/form-data" id="register-account-form" action="<?php echo site_url("Userlogin/RegisterUser/")?>">
					<div class="input-with-icon-left">
						<i class="icon-feather-user"></i>
						<input type="text" class="input-text with-border" name="txtUname" id="username-register" placeholder="User Name" required/>
					</div>
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="email" class="input-text with-border" name="txtemail" id="emailaddress-register" placeholder="Email Address" required/>
					</div>

					<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="txtpwd" id="password-register" placeholder="Password" required/>
   					</div>
   					<div class="input-with-icon-left">
						<i class="icon-material-outline-account-circle"></i>
						<input type="file" class="input-text with-border" name="fups" id="image" title="Upload Image" />
					</div>
					<div class="input-with-icon-left">
						<i class="icon-feather-phone"></i>
						<input type="text" class="input-text with-border" name="txtcont" id="contactno" placeholder="Contact NO" required/>
					</div>
					<div class="input-with-icon-left">
                 <select class="form-control" data-size="7" title="Select CityName" name="txtctyname" id="" >
					<option value="-1">Select a City</option>
							<?php
						  foreach ($citys as $c)
                                {
                                            	
						     ?>
							<option value="<?php echo $c->CityId?>"><?php echo $c->CityName?></option>
							<?php 
                                }
							?>
				</select>
					</div>                    
                   
					<!-- <div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password-repeat-register" id="password-repeat-register" placeholder="Repeat Password" required/>
					</div> -->
					<!--  <div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="txtCid" id="city-id" placeholder="city Name" required/>
					</div> -->
					
				<!--  <?php
                 if(isset($LoginErr))
                  {
				 ?>
				<p style="color:red"><?php echo $LoginErr?></p>
				<?php
                 }
				?> -->
				
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit">Register<i class="icon-material-outline-arrow-right-alt"></i></button>
               

                <!--   <button class="btn btn-primary">Register Now</button> -->

           
				</form>
				<!-- Social Login -->
			
				
			</div>

		</div>
	</div>
		

	</div>
	
	<!-- Video Container -->


</div>
	

 <!-- videos images -->


<!-- Spacer -->
<div class="margin-top-80"></div>
<!-- Spacer / End-->

<!-- Footer
================================================== -->
<div id="footer">
	
	<!-- Footer Middle Section / End -->
	
	<!-- Footer Copyrights -->
	<div class="footer-bottom-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					© 2021-2024 <strong>freework.co.in</strong>. All Rights Reserved.
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Copyrights / End -->

</div> 
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<?php include_once("bottomscript.php")?>
</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 08:53:54 GMT -->
</html>