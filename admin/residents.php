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
            <h1>Barangay Residents' Account</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Barangay_Residents</li>
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
                <button class="btn bg-primary btn-md" data-toggle="modal" data-target="#addUser"><i class="fa fa-plus-circle"></i>
                     Resident
                </button>

              
              </div>
               <?php include_once("residentAddModal.php"); ?>
              <!-- /.card-header -->
              <div class="card-body">
                  <?php if (isset($_SESSION['error'])) { ?>
                  <div class="alert alert-warning text-center">
                    <?php echo $_SESSION['error']; ?>
                  </div>
                  <?php }
                  unset($_SESSION['error']);
                  ?>

                <?php if (isset($_SESSION['accountExist'])) { ?>
                  <div class="alert alert-warning text-center">
                    <?php echo $_SESSION['accountExist']; ?>
                  </div>
                  <?php }
                  unset($_SESSION['accountExist']);
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
                    <th>Resident ID</th>
                    <th>Full Name</th>
                    <th>Contact No.</th>
                    <th>Account Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                  $page = "resident";
                  $i = 1;
                    $query = mysqli_query($conn, "select * from user_account") or die(mysqli_error($conn));
                    while($row = mysqli_fetch_array($query)){
                      $id = $row['id'];
                      $status = $row['ustatus'];
                      $residentId = $row['residentId'];

                      $rbiStatus = '';

                      $rbiQuery = mysqli_query($conn, "select * from rbi_tenant where resident_no='$residentId'") or die(mysqli_error($conn));
                      while($row2 = mysqli_fetch_array($rbiQuery)) {
                        $rbiStatus = $row2['status']; 
                      }

                   


                     
                    

                      // $rbiQuery = mysqli_query($conn, "select * from rbi_tenant where id='$id'") or die(mysqli_error($conn));
                      // $row2 = mysqli_fetch_array($rbiQuery);
                      // $rbiStatus = $row2['status']; 

                  ?>
                  <tr>
                    <td>
                      <?php echo $row['residentId']; ?>
                    </td>
                    <td>
                      <?php echo $row['ufullname']; ?>
                    </td>
                 
                    <td>
                    <?php 
                     echo $row['ucontactno'];
                    ?>
                    </td>
                 
                    <td>

                      <?php 

                      if($rbiStatus =='Active') {
                       ?>
                          <span class="badge badge-success"> 
                          Active
                          </span>
                       <?php
                      }else {
                        ?>
                         <span class="badge badge-warning"> 
                          Deactivated
                          </span>
                        <?php
                      }
                        // echo $rbiStatus;
                      
                     ?>

                 
                    </td>
                   
                    <td>
                      <div class="btn-group">
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editUser<?php echo $id; ?>">
                        <i class="fa fa-eye"></i>  Details
                      </button>
                      
                      </div>
                    </td>
                  </tr>
                  <?php
                include("residentsEditModal.php");
                
                } ?>
                  
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
