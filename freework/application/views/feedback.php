<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/freelancers-list-layout-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 08:53:31 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>FreeWork</title>
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
<?php include_once("header.php") ?>

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

			<h3 class="page-title">Feedback</h3>

			
			
			<!-- Freelancers List Container -->
			<div class="freelancers-container freelancers-list-layout margin-top-35">
				
				<!--Freelancer -->
				<div class="freelancer">

					<!-- Overview -->
					<div class="freelancer-overview">
						<div class="freelancer-overview-inner">
							
							<!-- Bookmark Icon -->
							<span class="bookmark-icon"></span>
							
							<!-- Avatar -->
						

							<!-- Name -->
						
						</div>
					</div>
					
					<!-- Details -->
					<div class="freelancer-details">
						<div class="freelancer-details-list">
							<div class="sidebar-widget">
					<div class="bidding-widget">

						<div class="bidding-headline"><h3>Enter your Feedback</h3></div>
						<div class="bidding-inner">
                     
							<!-- Headline -->
							<hr>
					 <div class="feedback-yes-no">
						<strong>Your Feedback</strong>
						
					</div>
							<form method="post" action="<?php echo site_url('EditprofileE/insertfeedback')?>">
								<div class="bidding-fields">
								
								<textarea class="with-border" placeholder="Enter your feedback!!" name="txtfeedback" id="" cols="7" required></textarea>
                             <!--    <?php echo $Project->CreateDate?> -->
								</div>
								<div class="bidding-field">
									<button type="submit" class="button ripple-effect move-on-hover full-width margin-top-30"><span>Send</span></button> 
							</div><br>
								</div>
							</form>
                            
							
						</div>
                 
						
					</div>
				</div>
						</div>
						
					</div>
				</div>
				<!-- Freelancer / End -->

				<!--Freelancer -->
				<div class="freelancer">

					<!-- Overview -->
					
					
					<!-- Details -->
				
				</div>
				<!-- Freelancer / End -->

				<!--Freelancer -->
				<div class="freelancer">

					<!-- Overview -->
			
					
					<!-- Details -->
					
				</div>
				<!-- Freelancer / End -->

				<!--Freelancer -->
				<div class="freelancer">

					<!-- Overview -->
					
					</div>
					
					<!-- Details -->
					
				</div>
				<!-- Freelancer / End -->
	
			</div>
			<!-- Tasks Container / End -->


			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12">
					<!-- Pagination -->
					
				</div>
			</div>
			<!-- Pagination / End -->

		</div>
	</div>
</div>


<!-- Footer
================================================== -->
<div id="footer">
	
	<!-- Footer Top Section -->
	
	<!-- Footer Top Section / End -->

	<!-- Footer Middle Section -->
	
	<!-- Footer Middle Section / End -->
	
	<!-- Footer Copyrights -->
	<div class="footer-bottom-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					© 2021-2024 <strong>Freework.co.in</strong>. All Rights Reserved.
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

<!-- Mirrored from www.vasterad.com/themes/hireo/freelancers-list-layout-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 08:53:31 GMT -->
</html>