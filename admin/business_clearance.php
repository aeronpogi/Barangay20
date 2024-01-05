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
            <h1>Business Clearance</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Business_Clearance</li>
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

                <button class="btn bg-primary btn-md" data-toggle="modal" data-target="#businessclearanceModal"><i class="fa fa-plus-circle" style="margin-right: 3px"></i>Request
                     
                     </button>
                <?php include("business_clearanceAddModal.php");?>

                    <!-- <h3 class="card-title" style="margin-left: 35%"><b>LIST OF BUSINESS CLEARANCE REQUEST</b></h3> -->
      

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

                <?php if (isset($_SESSION['added'])) { ?>
                  <div class="alert alert-success text-center">
                    <?php echo $_SESSION['added']; ?>
                  </div>
                  <?php }
                  unset($_SESSION['added']);
                  ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <!-- <th>RBI</th> -->
                    <th>Resident ID</th>
                    <th>Requestor</th>
                    <th>Business Name</th>
              
                    <th>Date Request</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                  $page = "business";
                  $i = 1;
                  
                      # code...
                      $query = mysqli_query($conn, "select * from application where permit_type='BusinessClearance' order by id desc;") or die(mysqli_error($conn));
                  
                    while($row = mysqli_fetch_array($query)){
                      $id = $row['id'];
                      $receipt = $row['receiptImg'];
                      $status = $row['ustatus'];
                      $residentId = $row['residentId'];
                      $requestMode = $row['requestMode'];
                  ?>
                  <td><?php echo $residentId?></td>
                  <td><?php echo $row['uname']?></td>
                    <td>
                      <?php echo $row['businessName']; ?>
                    </td>
                   
                 
                    <td>
                    <?php $date = $row['udate']; ?>
                      <?php
                          echo date('m-d-Y',strtotime($date));
                      ?>
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
                // include("deleteModal.php");
               include("business_clearance_viewModal.php");

                
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
