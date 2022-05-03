<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 08:53:18 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Freework</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<?php include_once("topscript.php")?>

</head>
<body>

<!-- Wrapper -->
<div id="wrapper" class="wrapper-with-transparent-header">

<!-- Header Container
================================================== -->
 <?php include_once("header.php")?>
<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Intro Banner
================================================== -->
<div class="intro-banner dark-overlay" data-background-image="<?php echo base_url('resources/user/')?>images/home-background-02.jpg">

	<!-- Transparent Header Spacer -->
	<div class="transparent-header-spacer"></div>

	<div class="container">
		
		<!-- Intro Headline -->
		<div class="row">
			<div class="col-md-12">
				<div class="banner-headline">
					<h3>
						<strong>Hire experts freelancers for any job, any time.</strong>
						<br>
						<span>Huge community of designers, developers and creatives ready for your project.</span>
					</h3>
				</div>
			</div>
		</div>
		
		<!-- Search Bar -->
		

		<!-- Stats -->
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>

	</div>
</div>


<!-- Content
================================================== -->

<!-- Popular Job Categories -->
<div class="section margin-top-65 margin-bottom-30">
	<div class="container">
		<div class="row">

			<!-- Section Headline -->
			<div class="col-xl-12">
				<div class="section-headline centered margin-top-0 margin-bottom-45">
					<h3>Popular Categories</h3>
				</div>
			</div>

               <?php

                 foreach ($cates as $c) 
                 {
                 
				?>
			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				
				
				<a href="<?php echo site_url("User/discategory")?>" class="photo-box small" data-background-image="<?php echo base_url('resources/user/')?>images/job-category-01.jpg">
					<div class="photo-box-content">
						<h3><?php echo $c->CategoryName?></h3>
						
					</div>
				</a>
				
			
			</div>
			<?php
                 }
				?>
			 <div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				
			</div>
			
			

		</div>
	</div>
</div>
<!-- Features Cities / End -->



<!-- Features Jobs -->

<!-- Featured Jobs / End -->

<!-- Icon Boxes -->
<div class="section padding-top-65 padding-bottom-65">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<!-- Section Headline -->
				<div class="section-headline centered margin-top-0 margin-bottom-5">
					<h3>How It Works?</h3>
				</div>
			</div>
			
			<div class="col-xl-4 col-md-4">
				<!-- Icon Box -->
				<div class="icon-box with-line">
					<!-- Icon -->
					<div class="icon-box-circle">
						<div class="icon-box-circle-inner">
							<i class="icon-line-awesome-lock"></i>
							<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
						</div>
					</div>
					<h3>Create an Account</h3>
					<p>Bring to the table win-win survival strategies to ensure proactive domination going forward.</p>
				</div>
			</div>

			<div class="col-xl-4 col-md-4">
				<!-- Icon Box -->
				<div class="icon-box with-line">
					<!-- Icon -->
					<div class="icon-box-circle">
						<div class="icon-box-circle-inner">
							<i class="icon-line-awesome-legal"></i>
							<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
						</div>
					</div>
					<h3>Post a Task</h3>
					<p>Efficiently unleash cross-media information without. Quickly maximize return on investment.</p>
				</div>
			</div>

			<div class="col-xl-4 col-md-4">
				<!-- Icon Box -->
				<div class="icon-box">
					<!-- Icon -->
					<div class="icon-box-circle">
						<div class="icon-box-circle-inner">
							<i class=" icon-line-awesome-trophy"></i>
							<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
						</div>
					</div>
					<h3>Choose an Expert</h3>
					<p>Nanotechnology immersion along the information highway will close the loop on focusing solely.</p>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- Icon Boxes / End -->


<!-- Testimonials -->

<!-- Testimonials / End -->


<!-- Counters -->
<div class="section padding-top-70 padding-bottom-75">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<div class="counters-container">
					
					<!-- Counter -->
					<div class="single-counter">
						<i class="icon-line-awesome-suitcase"></i>
						<div class="counter-inner">
							<h3><span class="counter">1,586</span></h3>
							<span class="counter-title">Jobs Posted</span>
						</div>
					</div>

					<!-- Counter -->
					<div class="single-counter">
						<i class="icon-line-awesome-legal"></i>
						<div class="counter-inner">
							<h3><span class="counter">3,543</span></h3>
							<span class="counter-title">Tasks Posted</span>
						</div>
					</div>

					<!-- Counter -->
					<div class="single-counter">
						<i class="icon-line-awesome-user"></i>
						<div class="counter-inner">
							<h3><span class="counter">2,413</span></h3>
							<span class="counter-title">Active Members</span>
						</div>
					</div>

					<!-- Counter -->
					<div class="single-counter">
						<i class="icon-line-awesome-trophy"></i>
						<div class="counter-inner">
							<h3><span class="counter">99</span>%</h3>
							<span class="counter-title">Satisfaction Rate</span>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- Counters / End -->


<!-- Footer
================================================== -->
<?php include_once("footer.php")?>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<?php include_once("bottomscript.php")?>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 08:53:23 GMT -->
</html>