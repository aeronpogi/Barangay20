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
            <h1>Archive RBI</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Resident_Barangay_Inhabitant</li>
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
           
               <?php include_once("rbiAddModal.php"); ?>
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

                <?php if (isset($_SESSION["rbiError"])) { ?>
                  <div class="alert alert-warning text-center">
                    <?php echo $_SESSION["rbiError"]; ?>
                  </div>
                  <?php }
                  unset($_SESSION["rbiError"]);
                  ?>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>RBI No.</th>
                    <th>Full Name</th>
                    <!-- <th>Family No.</th>
                    <th>Address</th> -->
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                  $page = "rbi";
                  $i = 1;
                    $query = mysqli_query($conn, "select * from rbi_tenant where status<>'Active'") or die(mysqli_error($conn));
                    while($row = mysqli_fetch_array($query)){
                      // $id = $row['rbi_no'];
                      $id = $row['id'];
                      // $address = $row['address'];
                      // $householdno = $row['house_hold_no'];

                  ?>
                  <tr>
                    <td>
                      <?php echo $row['rbi_id']; ?>
                    </td>
                    <td>
                      <?php echo $row['full_name']; ?>
                    </td>
               
                    <td> 

                    <?php 
                      
                      if($row['status']=='Transferred') { ?>
                        <span class="badge badge-warning"> 
                          <?php echo $row['status']; ?>
                        </span>
                 
                    <?php }
                    
                    else { ?>
                      <span class="badge badge-danger"> 
                      <?php echo $row['status']; ?>
                      </span>
                    <?php } ?>
                    
                    </td>
               
                   
                    <td>
                      <div class="btn-group">
                  
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit<?php echo $id; ?>">
                        <i class="fa fa-eye"></i>  Details
                    </button>

                      </div>
                    </td>
                  </tr>
                  <?php
                include("archive_rbi_view_modal.php");
                include("rbiEditModal.php");
                
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
