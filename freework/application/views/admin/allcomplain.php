<?php
$title="View All Complaint";
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
     
       <div clas="box">
        <div class="box-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <td>ComlaintId</td>
               <td>Subject</td>
               <td>Message</td>
                <td>CreateDate</td>
               
               
               
              </tr>
            </thead>
            <tbody>
              <?php
               foreach ($complainn as $c)
                {
                ?> 
               <tr>
                <td><?php echo $c->ComplaintId?></td>
                <td><?php echo $c->Subject;?></td>
                <td><?php echo $c->Message;?></td>
                <td><?php echo $c->CreateDate;?></td>
             
                
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
