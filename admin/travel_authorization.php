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
            <h1>Travel Authorization</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Barangay_Officials</li>
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
                <!-- <button class="btn bg-primary btn-md" data-toggle="modal" data-target="#addUser"><i class="fa fa-plus-circle"></i>
                    Add Officials
                </button> -->
              </div>
               <?php include_once("kagawadAddModal.php"); ?>
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
                    <th>RBI</th>
                    <th>Fullname</th>
                    <th>Address to travel</th>
                    <th>Contact No.</th>
                    <th>Date request</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                  $page = "travel";;
                  $i = 1;
                    $query = mysqli_query($conn, "select * from application where permit_type='Travel Authorization'") or die(mysqli_error($conn));
                    while($row = mysqli_fetch_array($query)){
                      $id = $row['id'];
                      $receipt = $row['receiptImg'];

                  ?>
                  <tr>
                    <td><?php echo $row['urbi']?></td>
                     <td>
                     <?php echo $row['uname']; ?>
                      </a>
                    </td>
                    <td>
                      <?php echo $row['to_travel']; ?>
                    </td>
               
                    <td>
                      0<?php echo $row['ucontactno']; ?>
                    </td>
                    <td>
                    <?php echo $row['udate']?>
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
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#view<?php echo $id; ?>">
                        <i class="fa fa-pencil-alt"></i>  View
                      </button>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?php echo $id; ?>">
                        <i class="fa fa-trash"></i>  Delete
                      </button>
                      </div>
                    </td>
                  </tr>
                  <?php
                include("deleteModal.php");
                include("travel_authorizationViewModal.php");
                
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
