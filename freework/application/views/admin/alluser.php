<?php
$title="View All USER";
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
               <td>Userid</td>
               <td>Username</td>
                <td>Password</td>
               <td>EmailId</td>
               <td>ContactNo</td>
               <td>CityName</td>
               <td>RegistrationDate</td>
               <td>ProfilePic</td>
               
               
              </tr>
            </thead>
            <tbody>
              <?php
               foreach ($users as $u)
                {
                ?> 
               <tr>
                <td><?php echo $u->UserId;?></td>
                <td><?php echo $u->UserName;?></td>
                <td><?php echo $u->Password;?></td>
                <td><?php echo $u->EmailId;?></td>
                <td><?php echo $u->ContactNo;?></td>
                <td><?php echo $u->CityName;?></td>
                <td><?php echo $u->RegistrationDate;?></td>
                <td><img src="<?php echo base_url("resources/shared/images/$u->ProfilePic")?>" height="75px"></td>
                
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
