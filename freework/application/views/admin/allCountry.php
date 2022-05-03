<?php
$title="View All Country";
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title?></title>
  <?php include_once("topscript.php");?>
 </head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 <?php include_once("header.php");?>
  <!-- Left side column. contains the logo and sidebar -->
 <?php include_once('nav.php')?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <h1>
        <?php echo $title?>
      
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
     <a href="<?php echo site_url("admin/Country/loadAddCoun")?>" class="btn btn-primary">Add Country</a>
       <div clas="box">
        <div class="box-body">
          <table class="table table-striped">
            <thead>
              <tr>
               <td>Countryid</td>
               <td>Countryname</td>
               <td>Delete</td>
               <td>Update</td>
               <td>All State</td>
               
              </tr>
            </thead>
            <tbody>
              <?php
               foreach ($coun as $c)
                {
                ?> 
               <tr>
                <td><?php echo $c->CountryId;?></td>
                <td><?php echo $c->CountryName;?></td>
                <td><a href="<?php echo site_url("admin/Country/removeCountry/".$c->CountryId)?>">Delete</a></td>
                <td><a href="<?php echo site_url("admin/Country/loadEditCoun/".$c->CountryId)?>">Update</a></td>
                <td><a href="<?php echo site_url("admin/Country/loadAllStateId/".$c->CountryId)?>">All State</a></td>
                </tr>
               <?php 
                 }
               ?>
              
            </tbody>
          </table>
        </div>
       </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include_once("footer.php")?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<?php include_once("bottomscript.php");?>

</body>
</html>
