<?php
include('include/header.php');
include('include/sidebar.php');
?>

  <!-- Main Sidebar Container -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Requests</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Requests</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                
                <div class="card-header">
                  <?php
                   if($role=="2") {
                    ?>
                    <h3 class="card-title" style="margin-left: 40%"><b>LIST OF BLOOD AVAILABILITY</b></h3>
                  <?php } ?>
             
                </div> 
              
              <!-- /.card-header -->
              <div class="card-body">
                  <?php if (isset($_SESSION['error'])) { ?>
                  <div class="alert alert-warning text-center">
                    <?php echo $_SESSION['error']; ?>
                  </div>
                  <?php }
                  unset($_SESSION['error']);
                  ?>

                <?php if (isset($_SESSION['success'])) { ?>
                  <div class="alert alert-success text-center">
                    <?php echo $_SESSION['success']; ?>
                  </div>
                  <?php }
                  unset($_SESSION['success']);
                  ?>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Blood Type</th>
                    <th>Availability</th>
                    <th>Total</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                  $page = "requests";
            
                    $query = mysqli_query($conn, "SELECT DISTINCT u.blood_type, a.*,u.* from tbl_available as a INNER JOIN tbl_users u ON a.user_id=u.id where a.user_id=u.id" ) or die(mysqli_error($conn));  
                    while($row = mysqli_fetch_array($query)){
                      $id = $row['id'];
                  
                  ?>
                  <tr>
                  <td></td>
                  <td>
                        <?php echo $row['blood_type']; ?>
                  </td>
                  <td>
                      <?php echo $row['availability']; ?>
                  </td>
                  <td>
                      <?php echo $row['quantity']; ?>
                  </td>
                 
                   <!--  <td>
                        <?php if ($row['requestStatus']=='0') {
                            echo '<span class="text-warning">Pending</span>';
                        }else{
                            echo '<span class="text-success">Completed</span>';
                        } ?> 
                    </td> -->
                  
                  
                  </tr>
                  <?php } ?>
                  
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
      <!--ALL TARGET MODAL-->
    
       
      </div>
  <!-- /.content-wrapper -->
 <?php include('include/footer.php') ?>
