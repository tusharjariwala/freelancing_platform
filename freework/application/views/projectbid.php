<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/single-task-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 08:53:30 GMT -->
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
<body>

<!-- Wrapper -->
<div id="wrapper">


<!-- Header Container
================================================== -->
<?php include_once("header.php")?>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Titlebar
================================================== -->
<div class="single-page-header" data-background-image="images/single-task.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						
						<div class="header-details">
							
							<img src="<?php echo base_url("resources/shared/images/".$_SESSION['propic'])?>" alt="" height="150">
							
						<h3><?php echo $Project->Title; ?></h3>
							<ul>
								
								<li><div class="verified-badge-with-title">Verified</div></li>
							</ul>
							<h3><?php echo $Project->CreateDate?></h3><br>
						<!-- 	$EndingDate=time() -->
							<!-- <h3><?php echo $Project->EndingDate?></h3> -->
			
							
						</div>
					</div>
					<div class="right-side">
						<div class="salary-box">
							<div class="salary-type">Project Budget</div>
							<div class="salary-amount"><?php echo $Project->Budget?></div>
						</div>
					</div>
					<?php
						if($Project->Status==1 and isset($updates[0]))
						{
					?>

					<a href="<?php echo site_url("/Displayproject/loadAddComplaint/$Project->ProjectId/".$updates[0]->UserId);?>">Post Complaint</a>
					<?php
						}
					?>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		
		<!-- Content -->
		<div class="col-xl-8 col-lg-8 content-right-offset">
			
			<!-- Description -->
			<div class="single-page-section">
				<h3 class="margin-bottom-25">Project Description</h3>
				<?php echo  $Project->Description?>

			</div>

			<!-- Atachments -->
			<div class="single-page-section">
				<h3>Attachments</h3>
				<div class="attachments-container">
					<a href="<?php echo base_url('resources/shared/images/'.$Project->UploadFile)?>" class="attachment-box ripple-effect"><span>Project Brief</span></a>
				</div>
			</div>

			<!-- Skills -->
			<div class="single-page-section">
				<h3>Skills Required</h3>
				<div class="task-tags">
			                     <?php
						  foreach ($cskills as $s)
                                {         	
						     ?>
							<span><?php echo $s->SkillName ?></span>
							<?php 
                                }
							?>
	                            
				</div>
			</div>
			<div class="clearfix"></div>
			
			<!-- Freelancers Bidding -->
			<?php
				if($Project->Status==0)
				{
			?>

			<div class="boxed-list margin-bottom-60">
				<div class="boxed-list-headline">
					<h3><i class="icon-material-outline-group"></i> Freelancers Bidding</h3>
				</div>

				<ul class="boxed-list-ul">
					<?php 
                       foreach ($bidsadd as $b) 
                        {
						?>
					<li>
						<div class="bid">
							
							<!-- Avatar -->
							<div class="bids-avatar">
								<div class="freelancer-avatar">
									<div class="verified-badge"></div>
									<a href="single-freelancer-profile.html"><img src="<?php echo base_url('resources/shared/images/'.$b->ProfilePic)?>" alt=""></a>
								</div>
							</div>
							
							<!-- Content -->
							<div class="bids-content">
								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="<?php echo site_url("EditprofileE/loadOtherUserProfile/".$b->UserId)?>"><?php echo $b->UserName; ?></a></h4>
								</div>
							</div>
							
							<!-- Bid -->
							<div class="bids-bid">
								<div class="bid-rate">
									<div class="rate"><?php echo $b->Budget?></div>
									<span><?php echo $b->CreateDate?></span>
								</div>
							</div>
							<div class="bids-bid">
								
				<?php
	           if($UserId != $ProjectUid) {
	           	?>			
              <a class="button ripple-effect move-on-hover full-width margin-top-30" href="<?php echo site_url('Displayproject/removebid/'.$b->ProjectId)?>"><span>remove</span></a> 
				<?php
				}
				else {
				?>				
				<a class="button ripple-effect move-on-hover full-width margin-top-30" href="<?php echo site_url('Displayproject/approvebid/'.$b->ProjectBidId)?>"><span>Approve</span></a> 
				<?php
				}
				?>					
							</div>
							
						</div>
					</li>
					<?php
                             }
							?>
				</ul>
			</div>
			<?php
				}
			?>

			<?php
				if($Project->Status==1)
				{
			?>


			<div class="boxed-list margin-bottom-60">
				<div class="boxed-list-headline">
					<h3><i class="icon-material-outline-group"></i> Project Updates</h3>

					<h3><a href="<?php echo site_url("Displayproject/loadEditProject/".$Project->ProjectId)?>">+ &nbsp;&nbsp;&nbsp;Add Updates</a></h3>
				</div>
				<ul class="boxed-list-ul">
					<?php 
                       foreach ($updates as $u) 
                        {
						?>
					<li>
						<div class="bid">
							
							<!-- Content -->
							<div class="bids-content">
								<!-- Name -->
								<div class="freelancer-name">
									<h4><?php echo $u->Title; ?></h4>
								<br>
								<br>
								</div>
									<div class="rate"><?php echo $u->Description?></div>
							</div>
							
							<!-- Bid -->
							<div class="bids-bid">
								<div class="bid-rate">
									<span><?php echo $u->CreateDate?></span>
								</div>
							</div>
								
						</div>
					</li>
					<?php
                             }
							?>

				</ul>
			</div>
			<?php
				}
			?>
			<div class="boxed-list margin-bottom-60">
				
				<div class="boxed-list-headline">
<!-- 
                 //    if(!$projects)
                 // echo  '  
 -->				
                   
				
				</div>
			
                           
                  
				<ul class="boxed-list-ul">
					
				</ul>
			</div>
             

		</div>
	

		<!-- Sidebar -->
		<?php
			if($Project->Status==0)
			{
		?>
		
		<div class="col-xl-4 col-lg-4">
			<div class="sidebar-container">

				<div class=""></div>
                 <form method="post" action="<?php echo site_url("Displayproject/addBid/$Project->ProjectId")?>">
                 	
                    
	           <?php
	           if($UserId != $ProjectUid) {
	           	?>
				<div class="sidebar-widget">
					<div class="bidding-widget">
						<div class="bidding-headline"><h3>Bid on this Project!</h3></div>
						<div class="bidding-inner">
                        <h5>Project Message</h5>
						<input type="text" class="with-border" name="txtMess">
							<!-- Headline -->
							<hr>
							
							<span class="bidding-detail">Set your <strong>minimal Budget</strong></span>

							<!-- Price Slider -->
							<div class="bidding-value">RS<span id="biddingVal"></span></div>
							<input class="bidding-slider" type="text" value="" data-slider-handle="custom" data-slider-currency="RS" data-slider-min="0" data-slider-max="4500" data-slider-value="auto" data-slider-step="50" data-slider-tooltip="hide" name="txtbudget"/>
							<!-- Headline -->
						
						  
						  
							<!-- Fields -->
							<div class="bidding-fields">
								<div class="bidding-field">
									
									<h5>Creating Date</h5>
								<!--  <input type="Date" name="txtcreatedate">  -->
                                <?php echo $Project->CreateDate?>
								</div>
								<div class="bidding-field">
									
								</div>
							</div><br>
                              
							<!-- Button -->
							<?php
							if(!$hasBid)
								echo '<button id="snackbar-place-bid" class="button ripple-effect move-on-hover full-width margin-top-30"><span>Add Bid</span></button>';
							else
							echo '<label style="color:red">cant bid!</label>';
							?>
                  
                       
                      <?php
                   if($saveStatus=="no")
                    {
                   ?>
                 <a class="button ripple-effect move-on-hover full-width margin-top-30" href="<?php echo site_url('Displayproject/saveProject/'.$Project->ProjectId)?>"><span>Save Project</span></a>
                    <?php
                     }
                    else
                    {
                  ?>
                    <a class="button ripple-effect move-on-hover full-width margin-top-30" href="<?php echo site_url('Displayproject/unSaveProject/'.$Project->ProjectId)?>"><span>unsave Project</span></a>
                    <?php
                       }
                    ?>
                
						</div>
                 
						
					</div>
				</div>
				<?php
				}
				// else echo "You cannot bid for this project!";
				else {
				?>				
				<div class="bidding-widget">

						<div class="bidding-headline"><h3>You cannot bid for this project!!</h3></div>
						<div class="bidding-inner">
                     
							
							<div class="bidding-fields">
							
								</div>
								<div class="bidding-field">
									
								</div>
								
							</div><br>
						</div>
                 
						
					</div>
				<?php
				}
				?>		
			
			</form>

				<!-- Sidebar Widget -->
			

			</div>
		</div>
		<?php
			}
		?>
	</div>
</div>


<!-- Spacer -->
<div class="margin-top-15"></div>
<!-- Spacer / End-->

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


<!-- Sign In Popup
================================================== -->

<!-- Sign In Popup / End -->


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

// Snackbar for "place a bid" button
$('#snackbar-place-bid').click(function() { 
	Snackbar.show({
		text: 'Your bid has been placed!',
	}); 
}); 


// Snackbar for copy to clipboard button
$('.copy-url-button').click(function() { 
	Snackbar.show({
		text: 'Copied to clipboard!',
	}); 
}); 
</script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/single-task-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 08:53:30 GMT -->
</html>