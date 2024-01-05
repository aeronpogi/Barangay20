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
            <h1>Barangay Staff</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Barangay_Staff</li>
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
                    Add Staff
                </button>
              </div>
               <?php include_once("staffAddModal.php"); ?>
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

                <?php if (isset($_SESSION['failed'])) { ?>
                  <div class="alert alert-warning text-center">
                    <?php echo $_SESSION['failed']; ?>
                  </div>
                  <?php }
                  unset($_SESSION['failed']);
                  ?>

<?php
                            if (isset($_SESSION["typeerror"])) {
                            ?>
                            

                            <div class="alert alert-danger text-center" role="alert" >
                                <?php echo $_SESSION["typeerror"];?>
                                </div>
                            
                            <?php
                            }
                            unset($_SESSION["typeerror"]);
                        
                        ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Picture</th>
                    <th>Full Name</th>
                    <th>Position</th>
                    <th>Account Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                  $page = "staff";
                  $i = 1;
                    $query = mysqli_query($conn, "select * from brgy_account where role ='3'") or die(mysqli_error($conn));
                    while($row = mysqli_fetch_array($query)){
                      $id = $row['id'];

                      $staffImg = $row['image_picture'];
                  ?>
                  <tr>
                    <td>
                    <a href="officialsimg/<?php echo $staffImg;?>" target="_blank">
                    <img src="officialsimg/<?php echo $staffImg;?>" alt="" style="width: 70px; height: 70px; object-fit: cover;">
                     
                    </td>
                    <td>
                      <?php echo $row['fullname']; ?>
                    </td>
                    <td>
                      <?php echo $row['position']; ?>
                    </td>
                  
                    <td>
             
                      <?php 
  
                      if($row['accountStatus']=='Deactivated') { ?>
                        <span class="badge badge-warning"> 
                          <?php echo $row['accountStatus']; ?>
                        </span>
  
                      <?php }
  
                      else if ($row['accountStatus'] == 'Active'){ ?>
                        <span class="badge badge-success"> 
                        <?php echo $row['accountStatus']; ?>
                        </span>
  
                      <?php }else { ?>
                        <span class="badge badge-danger"> 
                        <?php echo $row['accountStatus']; ?>
                        </span>
                      <?php } ?>




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
                include("deleteModal.php");
                include("staffEditModal.php");
                
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
