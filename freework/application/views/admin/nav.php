<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url("resources/shared/images/".$_SESSION['profpic'])?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['aname']?></p>
         
        </div>
      </div>
      <!-- search form -->
     <!--  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
         <li class="active treeview">
          
         
            <li class=""><a href="<?php echo site_url("admin/Category")?>"><i class="fa fa-circle-o"></i>Category</a>
            </li>
             <li class=""><a href="<?php echo site_url("admin/User/")?>"><i class="fa fa-circle-o"></i>User</a>
             </li>
            
             <li class=""><a href="<?php echo site_url("admin/Country")?>"><i class="fa fa-circle-o"></i>Country</a>
             </li>
              <li class=""><a href="<?php echo site_url("admin/User/feedback")?>"><i class="fa fa-circle-o"></i>Feedback</a>
             </li>
             <li class=""><a href="<?php echo site_url("admin/User/complaint")?>"><i class="fa fa-circle-o"></i>Complaint</a>
             </li>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>