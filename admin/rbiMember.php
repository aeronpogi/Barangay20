<?php
include('include/header.php');
include('include/sidebar.php');
$id = $_GET['id'];

  // $rbi_id = mysqli_query($conn, " select * from rbi_tenant where id = '$id'") or die (mysqli_error($conn));
  // $rbiRow = mysqli_fetch_assoc($rbi_id);
  // // $full_name = $rbiRow['full_name'];
  // // $address = $rbiRow['address'];
  
  $query = mysqli_query($conn, "select * from rbi_tenant where rbi_id = '$id';") or die(mysqli_error($conn));
  while($row = mysqli_fetch_array($query)){
    // $address = $row['address'];
    // $householeno = $row['house_hold_no'];
    $street = $row['street'];
  }
 
?>

  <!-- Main Sidebar Container -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>RBI: <?php echo $id; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Member</li>
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
               <button class="btn bg-primary btn-md" data-toggle="modal" data-target="#addFamily" style="float: right" onclick="increment()"><i class="fa fa-plus-circle"></i>
                    Family
                </button>
                 <!-- <a href="rbi.php" class="btn bg-dark btn-md" style="float: left"> -->
                 <a type="button" onclick="history.back()" class="btn bg-dark btn-md" style="float: left">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
              </div>

             


              <?php include_once("rbiMemberAddModal.php"); ?>
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
                    <th>Family ID</th>
                    <!-- <th>Family Head</th> -->
                    <!-- <th>Address</th>
                    <th>Birth Place</th>
                    <th>Birth Date</th>
                    <th>Gender</th> -->
                    <th>Members</th>
                    <!-- <th>Voter Status</th> -->
                    <!-- <th>Relationship to Household</th> -->
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                  

                  $page = "rbiMember";
                  $i = 1;
                  $rbi = $_GET['id'];

                  
                  // $query2 = mysqli_query($conn,"SELECT distinct family_no FROM rbi_tenant WHERE rbi_id='$id' ORDER BY id");
                  // $row2 = mysqli_num_rows($query2);
                  
              

                  $query = mysqli_query($conn, "select * from rbi_tenant where rbi_id='$rbi' ") or die(mysqli_error($conn));
                  // $query = mysqli_query($conn, "select distinct family_no from rbi_tenant where rbi_id='$rbi'") or die(mysqli_error($conn));
                    while($row = mysqli_fetch_array($query)){
                      $id = $row['id'];
                      $rbi_id = $row['rbi_id'];
                      // $familyNo = $row['family_no'];
                      $civil_status = $row['civil_status'];
                      $voter_status = $row['voter_status'];
                      
                      $full_name = $row['full_name'];


                    $query = mysqli_query($conn, "select distinct family_no from rbi_tenant where rbi_id='$rbi'") or die(mysqli_error($conn));
                    // $query = mysqli_query($conn, "select distinct family_no from rbi_tenant where rbi_id='$rbi'") or die(mysqli_error($conn));
                    while($row = mysqli_fetch_array($query)){
                      // $rbi_id = $row['rbi_id'];
                      $familyNo = $row['family_no'];
                      // $id = $row['id'];


                      $membertotalquery = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE rbi_id='$rbi_id' and family_no ='$familyNo'  ORDER BY id");
                      $membertotal = mysqli_num_rows($membertotalquery);
                      

                  ?>
                  <tr>
              
                    
                    <td>
                      <?php echo $rbi_id;?>-<?php echo $row['family_no'];?>
                    </td>
                 
                     <td> 
                    <?php echo $membertotal; ?>
                    </td>
      
                
                   
                    <td>
                      <div class="btn-group">
                      <a href="rbiMemberFamily.php?id=<?php echo $rbi_id;?>&&familyNo=<?php echo $familyNo;?>" type="button" class="btn btn-info btn-sm">
                        <i class="fa fa-eye"></i>   Member
                      </a>
                     
                 
                      </div>
                    </td>
                  </tr>
                  <?php
                // include("deleteModal.php");
              /*  include("complaintUpdateModal.php");*/
                } 
              }?>
                  
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
