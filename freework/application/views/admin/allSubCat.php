<?php
$title="View All SubCategory";
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
     <a href="<?php echo site_url("admin/Category/loadAddSubCat/$CategoryId")?>" class="btn btn-primary">Add SubCategory</a>
       <div clas="box">
        <div class="box-body">
          <table class="table table-striped">
            <thead>
              <tr>
               <td>SubCategoryid</td>
               <td>SubCategoryname</td>
               <td>Delete</td>
               <td>Update</td>
              
               
              </tr>
            </thead>
            <tbody>
              <?php
               foreach ($subcats as $sc)
                {
                ?> 
               <tr>
                <td><?php echo $sc->SubCategoryId;?></td>
                <td><?php echo $sc->SubCategoryName;?></td>
                <td><a href="<?php echo site_url("admin/Category/removeSubcat/$sc->SubCategoryId/$sc->CategoryId")?>">Delete</a></td>
                <td><a href="<?php echo site_url("admin/Category/loadEditSubsCat/".$sc->SubCategoryId)?>">Update</a></td>
               
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
