<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/jobs-list-layout-1-OpenStreetMap.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 08:53:38 GMT -->
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
			<div class="sidebar-container">
				
				<!-- Location -->
				

			</div>
		</div>
		<div class="col-xl-9 col-lg-8 content-left-offset">

			<h3 class="page-title">Notification</h3>

			

			<div class="listings-container compact-list-layout margin-top-35">
				<?php
                       foreach ($notifi as $n) 
                       {
                       ?>
				<!-- Job Listing -->
				<a href="" class="job-listing">

					<!-- Job Listing Details -->
					
					<div class="job-listing-details">

						<!-- Logo -->
						<!-- <div class="job-listing-company-logo">
							<img src="images/company-logo-01.png" alt="">
						</div> -->

						<!-- Details -->
						
						<div class="job-listing-description">
							<h3 class="job-listing-title"></h3>

							<!-- Job Listing Footer -->
							<div class="job-listing-footer">
								<ul>
									<li><?php echo $n->Notification?></li>
									<li><?php echo $n->notificationDate?></li>
									
								</ul>
							</div>
						</div>
						

						<!-- Bookmark -->
						<!-- <span class="notification-icon"><i class="icon-material-outline-group"></i></span> -->
					</div>

				</a>	
                       <?php
                           }
						?>

			</div>


			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12">
					<!-- Pagination -->
					<div class="pagination-container margin-top-60 margin-bottom-60">
						<nav class="pagination">
							
						</nav>
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
	
	
	<div class="footer-bottom-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					©  2021-2024 <strong>freework.co.in</strong>. All Rights Reserved.
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


<!-- Leaflet // Docs: https://leafletjs.com/ -->
<script src="js/leaflet.min.js"></script>

<!-- Leaflet Geocoder + Search Autocomplete // Docs: https://github.com/perliedman/leaflet-control-geocoder -->
<script src="js/leaflet-autocomplete.js"></script>
<script src="js/leaflet-control-geocoder.js"></script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/jobs-list-layout-1-OpenStreetMap.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 08:53:38 GMT -->
</html>