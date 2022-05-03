<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/tasks-list-layout-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 08:53:26 GMT -->
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
		<div class="col-xl-3 col-lg-7">
			<div class="sidebar-container">
				
				<!-- Location -->
				

				<!-- Category -->
				<div class="sidebar-widget">
					<h3>Category</h3>
					<select class="form-control" data-size="7" title="All Categories" id="" name="txtcat" onchange="loadSubCats(this.value)">
               <option value=-1>select category</option>
						 <?php

                        foreach ($cats as $c)
                         {
						 ?>
						  <option value="<?php echo $c->CategoryId?>"><?php echo $c->CategoryName?></option>
                         <?php
                            }
                         ?>
					</select>
				</div>

				<!-- Keywords -->
				<div class="sidebar-widget">
					<h3>SubCategory</h3>
				    <select class="form-control" data-size="7" title="All Categories" id="subCat" name="txtSubCat" onchange="loadSkills(this.value)">
				    	</select>
				</div>

				<!-- Budget -->
				
				<!-- Hourly Rate -->
			

				<!-- Tags -->
				<div class="sidebar-widget">
					<h3>Skills</h3>

					<div class="submit-field">
						<div id="skills">

							
					 	</div>
						
	
					</div>
					<div class="clearfix"></div>

					<!-- More Skills -->
					<div class="keywords-container margin-top-20">
						
						<div class="keywords-list"><!-- keywords go here --></div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>

			</div>
		</div>
		<div class="col-xl-9 col-lg-8 content-left-offset">

			<h3 class="page-title">Display Project</h3>

			 <?php
             foreach ($project as $p)
              {
		   	?>
			<!-- Tasks Container -->
			<div class="tasks-list-container margin-top-35">
				
				<!-- Task -->

				<a href="" class="task-listing">

					<!-- Job Listing Details -->
					<div class="task-listing-details">

						<!-- Details -->
						
						<div class="task-listing-description">
							<h3 class="task-listing-title"><?php echo $p->Title?></h3>
							
							<p class="task-listing-text"><?php echo $p->Description?></p>
							<div class="task-tags">
								
	                            <?php
						  foreach ($cskills as $s)
                                {         	
						     ?>
							<span><?php echo $s->SkillName ?></span>
							<?php 
                                }
							?>
	                            
							</div><hr size="1">
							<div class="task-offers">
								<?php echo $p->Budget?><br>
								<span>Fixed Price</span>
							</div>
						</div>

					</div>
                       
					<div class="task-listing-bid">
						<div class="task-listing-bid-inner">
							<!-- <div class="task-offers">
								<?php echo $p->Budget?>
								<span>Fixed Price</span>
							</div> -->

				 <a class="button button-sliding-icon ripple-effect" href="<?php echo site_url('Displayproject/loadBidById/'.$p->ProjectId)?>">Bid Now<i class="icon-material-outline-arrow-right-alt"></i></a> 
				
			

						

						</div>
					</div>
		
                 </a>
				<?php
		      }
			?>

				<!-- Pagination -->
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-12">
						<!-- Pagination -->
						
					</div>
				</div>
				<!-- Pagination / End -->

			</div>
			
			<!-- Tasks Container / End -->

		</div>
	</div>
</div>
<script type="text/javascript">
	 function loadSubCats(cid)
 {
    if(cid!=-1)
    {
      $.ajax({
         url:"<?php echo site_url('Project/loadSubCatsByCatId/')?>"+cid,
         success:function(result)
         {
          document.getElementById('subCat').innerHTML=result;
         }
      });
    }
 }   
function loadSkills(sid)
    {
    if(sid!=-1)
    {
      $.ajax({
         url:"<?php echo site_url('Project/loadSkillsBySubCat/')?>"+sid,
         success:function(result)
         {
          document.getElementById('skills').innerHTML=result;
         }
      });
    }
 }  
 
</script>

<!-- Footer
================================================== -->
            <div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					<center>© 2021-2024 <strong>freework.co.in</strong>. All Rights Reserved.</center>
				</div>
				
				<div class="clearfix"></div>
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

<!-- Mirrored from www.vasterad.com/themes/hireo/tasks-list-layout-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 08:53:26 GMT -->
</html>