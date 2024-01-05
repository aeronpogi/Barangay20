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
            <h1>Barangay Complaint</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Barangay_Complaint</li>
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
               <h3 class="card-title" style="margin-left: 37%"><b>LIST OF BARANGAY COMPLAINT</b></h3>
              </div>
               <?php include_once("complaintAddModal.php"); ?>
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
                    <th>Residint ID</th>
                    <th>Complainant</th>
                    <th>Narration</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                  $page = "complaints";
                  $i = 1;
                    $query = mysqli_query($conn, "select * from complaints") or die(mysqli_error($conn));
                    while($row = mysqli_fetch_array($query)){
                      $id = $row['ID'];
                      // $rbi = $row['urbi'];
                      // $narration = $_POST['narration'];

                  ?>
                  <tr>
                    <td>
                      <?php echo $row['residentId'];?>
                    </td>
                    <td>
                      <?php echo $row['fullname']; ?>
                    </td>
                    <td>
                      <?php echo $row['narration']; ?>
                    </td>
                   
                     <td> 
                    <?php echo date("M d(D), Y",strtotime($row['dates'])); ?>
                    </td>
                 
                

                      <td style="text-align: center;">
                        <?php 
                        
                          if($row['status']=='Active') { ?>
                            <span class="badge badge-warning"> 
                              <?php echo $row['status']; ?>
                            </span>
                    
                        <?php }
                        
                        else if ($row['status'] == 'Settled'){ ?>
                          <span class="badge badge-success"> 
                          <?php echo $row['status']; ?>
                          </span>
                      
                        <?php }?>
                    </td>
                    <td>
                      <div class="btn-group">
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#view<?php echo $id; ?>">
                        <i class="fa fa-eye"></i>  Details
                      </button>
               
                  
                   
                      </div>
                    </td>
                  </tr>
                  <?php
                include("deleteModal.php");
                include("complaintViewModal.php");
                include("complaintUpdateModal.php");
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
