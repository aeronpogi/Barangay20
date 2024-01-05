<?php
include('include/header.php');
include('include/sidebar.php');
$id = $_GET['id'];

  // $rbi_id = mysqli_query($conn, " select * from rbi_tenant where id = '$id'") or die (mysqli_error($conn));
  // $rbiRow = mysqli_fetch_assoc($rbi_id);
  // // $full_name = $rbiRow['full_name'];
  // // $address = $rbiRow['address'];
  
  $query = mysqli_query($conn, "select * from blotter where id = '$id';") or die(mysqli_error($conn));
  while($row = mysqli_fetch_array($query)){

    $id = $row['id'];

    $complainant = $row['complainant'];
    $complainantAddress = $row['complainantAddress'];
    $complainantAge = $row['complainantAge'];
    $complainantContact = $row['complainantContact'];

    $complainee = $row['complainee'];
    $complaineeAge = $row['complaineeAge'];
    $complaineeAddress = $row['complaineeAddress'];
    $complaineeContact = $row['complaineeContact'];

    

  }
 
?>

  <!-- Main Sidebar Container -->
  
  <!-- Content Wrapper. Contains page content    -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blotter Sessions </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Session</li>
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
               <button class="btn bg-primary btn-md" data-toggle="modal" data-target="#addSession" style="float: right" onclick="addSessionincrement()"><i class="fa fa-plus-circle"></i>
                    Session
                </button>
                 <a href="blotter.php" class="btn bg-dark btn-md" style="float: left">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
              </div>

             


              <?php include_once("blotterSessionAddModal.php"); ?>
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
                    <!-- <th>RBI</th> -->
                    <th>Session No</th>
                    <th>Complainant</th>
                    <th>Case</th>
                    <th>Status</th>
            
             
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  
                  <?php

                  $page = "blotterSession";
                  $i = 1;
                  $blotterSession_id = $_GET['id'];
                    $query = mysqli_query($conn, "select * from blotter where id ='$blotterSession_id' or blotter_id = '$blotterSession_id' ") or die(mysqli_error($conn));
                    while($row = mysqli_fetch_array($query)){
                    $id = $row['id'];
                    $img = $row['img'];
                  

                  ?>
                  <tr>
                                    
      
                    
                    <td>
                      <?php echo $row['session_no'];?>
                    </td>
                    <td>
                      <?php echo $row['complainant']; ?>
                    </td>
                     <td> 
                    <?php echo $row['natureCases']; ?>
                    </td>
                    <td> 
                    <?php echo $row['status']; ?>
                    </td>

                    
                
                   
                    <td>
                      <div class="btn-group">
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editBlotterSession<?php echo $id; ?>">
                        <i class="fa fa-eye"></i>  Details
                      </button>
                     
                   
                      </div>
                    </td>
                  </tr>
                  <?php
                // include("deleteModal.php");
               include("blotterSessioneViewModal.php");
              /*  include("complaintUpdateModal.php");*/
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
