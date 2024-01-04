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
            <h1>Application archive</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Barangay_Clearance</li>
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
                
              <!--  <div class="card-header">
                  <button class="btn bg-primary btn-md" data-toggle="modal" data-target="#brgyclearanceModal"><i class="fa fa-plus-circle"></i>
                     
                  </button>
                
                </div> 
                -->
              <?php     include("barangay_clearanceAddModal.php");?>
                
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
                    <th>RBI No.</th>
                    <th>Resident ID</th>
                    <th>Full Name</th>
                    <th>Permit Type</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                  $page = "App_archive";
                  $i = 1;
                  
                      # code...
                    $query = mysqli_query($conn, "select * from application where  permit_status='Archive' order by udate desc;") or die(mysqli_error($conn));
                  
                    while($row = mysqli_fetch_array($query)){
                    $id = $row['id'];
                    $receipt = $row['receiptImg'];
                    $urbi = $row['urbi'];
                    $residentId = $row['residentId'];
                    $uname = $row['uname'];
                    $permit = $row['permit_type'];
                    $status = $row['ustatus'];
                  ?>
                  <tr>
                    <td><?php echo $urbi; ?></td>
                    <td><?php echo $residentId; ?></td>
                  <td>
                      <?php echo $uname; ?>
                  </td>
                  <td>
                      <?php echo $permit; ?>
                    </td>
            
                
                    <td style="text-align: center;">
                      <?php 
                      
                        if($row['ustatus']=='Pending') { ?>
                          <span class="badge badge-warning"> 
                            <?php echo $row['ustatus']; ?>
                          </span>
                   
                      <?php }
                      
                      else if ($row['ustatus'] == 'Approved'){ ?>
                        <span class="badge badge-success"> 
                        <?php echo $row['ustatus']; ?>
                        </span>
                     
                      <?php }else { ?>
                        <span class="badge badge-danger"> 
                        <?php echo $row['ustatus']; ?>
                        </span>
                      <?php } ?>
                      
                    </td>
                    <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#view<?php echo $id; ?>"><i class="fa fa-eye"></i>
                       Details
                      </button>
                  

                  
                      </div>
                     
                    </td>
                  </tr>
                  <?php
                  
                include("deleteModal.php");
               include("archive_applicationView_modal.php");

                
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
