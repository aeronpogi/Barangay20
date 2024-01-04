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
            <h1>Barangay Blotter</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Barangay_Blotter</li>
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
                <button class="btn bg-primary btn-md" data-toggle="modal" data-target="#addBlotter"><i class="fa fa-plus-circle"></i>
                     Blotter
                </button>
              </div>
               <?php include_once("blotterAddModal.php"); ?>
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

                <table id="example1" class="table table-bordered table-striped" style="text-transform: capitalize;">
                  <thead>
                  <tr>
                    <th>Blotter ID</th>
                    <th>Complainant</th>
                    <th>Case</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                  $page = "blotter";
                  $i = 1;
                    $query = mysqli_query($conn, "select * from blotter where session_no ='1'") or die(mysqli_error($conn));
                    while($row = mysqli_fetch_array($query)){
                      $id = $row['id'];
                      $blotterID = $row['blotter_id'];

                  ?>
                  <tr>
                    <td><?php echo $row['blotter_id'];?></td>
                    <td>
                      <?php echo $row['complainant']; ?>
                    </td>
                    <td>
                      <?php echo $row['natureCases']; ?>
                    </td>
                 
                   
                    <td>
                      <?php if($row['status']=='Active') { ?>
                    <span class="badge badge-warning"> 
                    <?php echo $row['status']; ?>
                    </span>
                  <?php }else { ?>
                     <span class="badge badge-success"> 
                    <?php echo $row['status']; ?>
                    </span>
                  <?php } ?>
                    </td>
                   
                    <td>
                      <div class="btn-group">
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#view<?php echo $id; ?>">
                        <i class="fa fa-eye"></i>  Details
                      </button>
                      <!-- <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#update">
                        <i class="fa fa-calendar"></i>  Session
                      </button>
                 -->
                      <a href="blotterSession.php?id=<?php echo $id;?>" class="btn btn-success btn-sm" >
                      <i class="fa fa-calendar"></i>  Session
                      </a>
                      </div>
                    </td>
                  </tr>
                  <?php
                // include("deleteModal.php");
                include("blotterViewModal.php");
                include("blotterUpdateModal.php");
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
