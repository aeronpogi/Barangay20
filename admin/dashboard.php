<?php
include 'include/header.php';
include 'include/sidebar.php';
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    

    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
       
          <div class="col-lg-3 col-6" >
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3> 
                   <?php 
                      $query = mysqli_query($conn,"SELECT id FROM application where permit_type='Barangay Clearance' AND ustatus='Pending'");
                      $row = mysqli_num_rows($query);

                      echo $row;
                     ?>
                     </h3>

                <p>Barangay Clearance</p>
              </div>
              <div class="icon">
                <i class="far fa-sticky-note"></i>
              </div>
             
              <a href="#" class="small-box-footer">Pending Request </a>
            </div>
          </div>

          
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  <?php 
               $query = mysqli_query($conn,"SELECT id FROM application where permit_type='Business Clearance' AND ustatus='Pending'");

                      $row = mysqli_num_rows($query);

                      echo $row;
                     ?>
                </h3>

                <p>Business Clearance</p>
              </div>
              <div class="icon">
                <i class="far fa-sticky-note"></i>
              </div>
              <a href="#" class="small-box-footer">Pending Request </a>
            </div>
          </div>
          <!-- ./col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  <?php 
               $query = mysqli_query($conn,"SELECT id FROM application where permit_type='Indigency' AND ustatus='Pending'");

                      $row = mysqli_num_rows($query);

                      echo $row;
                     ?>
                </h3>

                <p>Indigency Certificate</p>
              </div>
              <div class="icon">
                <i class="far fa-sticky-note"></i>
              </div>
              <a href="#" class="small-box-footer">Pending Request </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  <?php 
                  $query = mysqli_query($conn,"SELECT id FROM business where bstatus='Pending'");

                      $row = mysqli_num_rows($query);

                      echo $row;
                     ?>
                </h3>

                <p>Business</p>
              </div>
              <div class="icon">
                <i class="far fa-sticky-note"></i>
              </div>
              <a href="#" class="small-box-footer">Pending Request </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
    
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                 <h3 class="card-title" style="margin-left: 39%"><b>LIST OF BARANGAY OFFICIALS</b></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Picture</th>
                    <th>Fullname</th>
                    <th>Position</th>
                    <th>Contact No.</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                  $page = "officials";
                  $i = 1;
                    $query = mysqli_query($conn, "select * from brgy_account where role='2';") or die(mysqli_error($conn));
                    while($row = mysqli_fetch_array($query)){
                      $id = $row['id'];
                       $staffImg = $row['image_picture'];

                  ?>
                  <tr>
                     <td>
                      <a href="officialsimg/<?php echo $staffImg;?>" target="_blank">
                      <img src="officialsimg/<?php echo $staffImg;?>" alt="" style="width: 70px; height: 70px; object-fit: cover;">
                      </a>
                    </td>
                    <td>
                      <?php echo $row['fullname']; ?>
                    </td>
                    <td>
                      <?php echo $row['position']; ?>
                    </td>
                    <td>
                      <?php echo $row['contact_no']; ?>
                    </td>
                  </tr>
                  <?php
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
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
<?php  include 'include/footer.php'; ?>


