<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/tasks-list-layout-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 08:53:26 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>freework</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="<?php echo base_url('resources/user/')?>css/style.css">
<link rel="stylesheet" href="<?php echo base_url('resources/user/')?>css/colors/blue.css">

</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<?php include_once("header.php")?>

<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Spacer -->
<div class="margin-top-90"></div>
<!-- Spacer / End-->

<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-3 col-lg-4">
			
		</div>
		<div class="col-xl-9 col-lg-8 content-left-offset">

			<h3 class="page-title">Saved Projects</h3>

		
			
			<!-- Tasks Container -->
			<div class="tasks-list-container compact-list margin-top-35">
				
				<!-- Task -->
				<?php
                 foreach ($saves as $s) 
                 {
                 
				?>
				<a href="single-task-page.html" class="task-listing">

					<!-- Job Listing Details -->
					<div class="task-listing-details">
                     
						<!-- Details -->
						<div class="task-listing-description">
							<h3 class="task-listing-title"><?php echo $s->Title?></h3>
							<ul class="task-icons">
								
							</ul>
							<p class="task-listing-text"><?php echo $s->Description?></p>
							<div class="task-tags">
								<?php
						  foreach ($cskills as $as)
                                {         	
						     ?>
							<span><?php echo $as->SkillName ?></span>
							<?php 
                                }
							?>
							</div><hr>
							<div class="task-offers">
								<strong><?php echo $s->Budget?></strong><br>
								<span>Fixed Price</span>
							</div>
						</div>

					</div>

					<div class="task-listing-bid">
						<div class="task-listing-bid-inner">
							
							<!-- <span class="button button-sliding-icon ripple-effect">Remove Project<i class="icon-material-outline-arrow-right-alt"></i></span> -->
							  <!--   <a class="button ripple-effect move-on-hover full-width margin-top-30" href="<?php echo site_url('Displayproject/removeSaveProject/'.$s->ProjectId)?>"><span>remove Project</span></a> --> 
							  <a class="button ripple-effect move-on-hover full-width margin-top-30" href="<?php echo site_url('Displayproject/loadBidById/'.$s->ProjectId)?>"><span>Go To Project</span></a> 
                 
						</div>
					</div>
				</a>
				<?php
                }
				?>
           
				<!-- Task -->
				
			</div>
			<!-- Tasks Container / End -->


			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12">
					<!-- Pagination -->
					<div class="pagination-container margin-top-60 margin-bottom-60">
						
					</div>
				</div>
			</div>
			<!-- Pagination / End -->

		</div>
	</div>
</div>


<!-- Footer
================================================== -->
<div id="footer">
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
<script src="<?php echo base_url('resources/user/')?>js/jquery-3.4.1.min.js"></script>
<script src="<?php echo base_url('resources/user/')?>js/jquery-migrate-3.1.0.min.html"></script>
<script src="<?php echo base_url('resources/user/')?>js/mmenu.min.js"></script>
<script src="<?php echo base_url('resources/user/')?>js/tippy.all.min.js"></script>
<script src="<?php echo base_url('resources/user/')?>js/simplebar.min.js"></script>
<script src="<?php echo base_url('resources/user/')?>js/bootstrap-slider.min.js"></script>
<script src="<?php echo base_url('resources/user/')?>js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url('resources/user/')?>js/snackbar.js"></script>
<script src="<?php echo base_url('resources/user/')?>js/clipboard.min.js"></script>
<script src="<?php echo base_url('resources/user/')?>js/counterup.min.js"></script>
<script src="<?php echo base_url('resources/user/')?>js/magnific-popup.min.js"></script>
<script src="<?php echo base_url('resources/user/')?>js/slick.min.js"></script>
<script src="<?php echo base_url('resources/user/')?>js/custom.js"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 
</script>

<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);
	}
</script>

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaoOT9ioUE4SA8h-anaFyU4K63a7H-7bc&amp;libraries=places"></script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/tasks-list-layout-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 08:53:26 GMT -->
</html>