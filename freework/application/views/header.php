<header id="header-container" class="fullwidth">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="#"><img src="<?php echo base_url('resources/user/')?>images/freeworklogo.png" data-sticky-logo="<?php echo base_url('resources/user/')?>images/freeworklogo.png" data-transparent-logo="<?php echo base_url('resources/user/')?>images/freeworklogo.png" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

						<li><a href="<?php echo site_url("User")?>">Home</a>
							
						</li>
                        <li><a href="<?php echo site_url("Project/loadAddProject")?>">Add Project</a>
							
						</li>
						 <li><a href="<?php echo site_url("Displayproject/loadProject")?>">Find Project</a>
							
						</li>
					 <li><a href="<?php echo site_url("Displayproject/allSaveProject/")?>">Save Project</a>
							
						
						</li>
						<li><a href="<?php echo site_url("Displayproject/myProject")?>" >My Project</a>
							
						</li>
					
						 <li><a href="<?php echo site_url("EditprofileE/feedbackuser")?>">Feedback</a>
							
						</li>
                        <!-- <li><a href="#">Explore Project</a>

							<ul class="dropdown-nav">
								  <li><a href="<?php echo site_url("Project/loadAddProject")?>" class="current">Add Project</a>
							
						</li>
					<li>
							<a href="<?php echo site_url("Displayproject/loadProject")?>">Find Projects</a>
						          </li>
								<li><a href="<?php echo site_url("Displayproject/allSaveProject/")?>">Save Project</a></li>
						          
							</ul>
					</li>

						<li><a href="#">Project</a>

							<ul class="dropdown-nav">
								  <li><a href="<?php echo site_url("Displayproject/myProject")?>" class="current">MyProject</a>
								 </li>
								 <li><a href="<?php echo site_url("Displayproject/approvebid")?>" class="current">ApprovalProject</a>
								  	</li>
								  	


							
					
					</ul> -->
						
                       
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">

				<!--  User Notifications -->
				<div class="header-widget hide-on-mobile">
					
					<!-- Notifications -->
					<div class="header-notifications">

						<!-- Trigger -->
						<div class="header-notifications-trigger">
							<a href="#"><i class="icon-feather-bell"></i></a>
						</div>

						<!-- Dropdown -->
						 <div class="header-notifications-dropdown">

							<div class="header-notifications-headline">
							 <a href="<?php echo site_url("Displayproject/notificationdisplay")?>"><h4>Notifications</h4>
								</a> 
							</div>

							

						</div> 

					</div>
					
					<!-- Messages -->
					

				</div>
				<!--  User Notifications / End -->

				<!-- User Menu -->
				<div class="header-widget">

					<!-- Messages -->
					<div class="header-notifications user-menu">
						<div class="header-notifications-trigger">
							<a href="#"><div class="user-avatar status-online"><img src="<?php echo base_url("resources/shared/images/".$_SESSION['propic'])?>" alt=""></div></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<!-- User Status -->
							<div class="user-status">

								<!-- User Name / Avatar -->
								<div class="user-details">
									<div class="user-avatar status-online">
							 <img src="<?php echo base_url("resources/shared/images/".$_SESSION['propic'])?>" alt=""> </div>

									<div class="user-name">
										<?php echo $_SESSION['uname']?>
									</div>
								</div>
								
								<!-- User Status Switcher -->
									
						</div>
						
						<ul class="user-menu-small-nav">
						
							<li><a href="<?php echo site_url("EditprofileE/editProfile")?>"><i class="icon-material-outline-settings"></i>Settings</a></li>
							<li><a href="<?php echo site_url("Userlogin/logout/")?>"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>
         
						</div>
					</div>

				</div>
				<!-- User Menu / End -->

				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>