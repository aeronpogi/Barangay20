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
            <h1 class="m-0">Report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Report</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <!-- <span class="info-box-icon bg-infos elevation-1"><i class="fas fa-people-carry"></i></span> -->
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="color: grey"><b> POPULATION</b></span>
                <span class="info-box-number">
                  <?php
                       
                      // $query = mysqli_query($conn,"SELECT id FROM rbi ");
                      // $row = mysqli_num_rows($query);

                      $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where status='Active'");
                      $row2 = mysqli_num_rows($query2);

                      // echo $row+$row2;
                      echo $row2;
                      
                     ?>
                  <small></small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <!-- <span class="info-box-icon bg-primarsy elevation-1"><i class="fas fa-male"></i></span> -->
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-male"></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="color: grey"><b> MALE</b></span>
                <span class="info-box-number">
                  <?php
                       
                    //  $query = mysqli_query($conn,"SELECT id FROM user_account where gender='Male' ORDER BY id");

                    //   $row = mysqli_num_rows($query);

                    //   echo $row;

                    // $query = mysqli_query($conn,"SELECT id FROM rbi WHERE gender='male'");
                    // $row = mysqli_num_rows($query);

                    $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE gender='male' and status='Active'");
                    $row2 = mysqli_num_rows($query2);

                    // echo $row+$row2;
                      
                    echo $row2;
                     ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <!-- <span class="info-box-icon bg-dangesr elevation-1"><i class="fas fa-female"></i></span> -->
              <span class="info-box-icon bg-primary eleprimary1"><i class="fas fa-female"></i></span>
<!--  -->

              <div class="info-box-content">
                <span class="info-box-text" style="color: grey"><b> FEMALE</b></span>
                <span class="info-box-number">
                  <?php
                       
                  // $query = mysqli_query($conn,"SELECT id FROM user_account where gender='Female' ORDER BY id");

                  //     $row = mysqli_num_rows($query);

                  //     echo $row;
                      
                      // $query = mysqli_query($conn,"SELECT id FROM rbi WHERE gender='female'");
                      // $row = mysqli_num_rows($query);

                      $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE gender='female' and status='Active'");
                      $row2 = mysqli_num_rows($query2);

                      // echo $row+$row2;
                      echo $row2;
                     ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
    
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <!-- <span class="info-box-icon bg-warnisng elevation-1"><i class="fas fa-registered"></i></span> -->
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-registered"></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="color: grey"><b>REGISTERED VOTERS</b></span>
                <span class="info-box-number">
                  <?php

                      // $query = mysqli_query($conn,"SELECT id FROM rbi WHERE voter_status='Registered' ORDER BY id");
                      // $row = mysqli_num_rows($query);

                      $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE voter_status='Registered' and status='Active' ORDER BY id");
                      $row2 = mysqli_num_rows($query2);

                 
                      // echo $row+$row2;
                      echo $row2;
                     ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

        
          <!-- /.col -->

          <!-- /.col -->

     

  
        </div>
        <!-- /.row -->

        

        <!-- Main row -->
    
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
    <br>
    

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
                      $query = mysqli_query($conn,"SELECT id FROM application where permit_type='Barangay Clearance' AND ustatus='Approved'");
                      $row = mysqli_num_rows($query);

                      echo $row;
                     ?>
                     </h3>

                <p>Total Barangay Clearance</p>
              </div>
              <div class="icon">
                <i class="far fa-sticky-note"></i>
              </div>
             
              <a href="barangay_report.php?d1=0&d2=0" class="small-box-footer">More Info </a>
            </div>
          </div>

          
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  <?php 
               $query = mysqli_query($conn,"SELECT id FROM application where permit_type='Business Clearance' AND ustatus='Approved'");

                      $row = mysqli_num_rows($query);

                      echo $row;
                     ?>
                </h3>

                <p>Total Business Clearance</p>
              </div>
              <div class="icon">
                <i class="far fa-sticky-note"></i>
              </div>
              <a href="business_report.php?d1=0&d2=0" class="small-box-footer">More Info </a>
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
               $query = mysqli_query($conn,"SELECT id FROM application where permit_type='Indigency' AND ustatus='Approved'");

                      $row = mysqli_num_rows($query);

                      echo $row;
                     ?>
                </h3>

                <p>Total Indigency Certificate</p>
              </div>
              <div class="icon">
                <i class="far fa-sticky-note"></i>
              </div>
              <a href="indigency_report.php?d1=0&d2=0" class="small-box-footer">More Info </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  <?php 
                  $query = mysqli_query($conn,"SELECT id FROM rbi_tenant ");

                      $row = mysqli_num_rows($query);

                      echo $row;
                     ?>
                </h3>

                <p>RBI</p>
              </div>
              <div class="icon">
                <i class="far fa-sticky-note"></i>
              </div>
              <a href="rbi_report.php?from=0&to=0" class="small-box-footer">More Info </a>
            </div>
          </div>


          <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                  <?php 
                  $query = mysqli_query($conn,"SELECT id FROM rbi_tenant ");

                      $row = mysqli_num_rows($query);

                      echo $row;
                     ?>
                </h3>

                <p>Deceased</p>
              </div>
              <div class="icon">
                <!-- <i class="far fa-sticky-note"></i> -->
                <i class="far fa-book-dead"></i>
              </div>
              <a href="rbi_report.php?from=0&to=0" class="small-box-footer">More Info </a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 style="visibility: hidden">
                  <?php 
                  $query = mysqli_query($conn,"SELECT id FROM rbi_tenant ");

                      $row = mysqli_num_rows($query);
                        echo "0";
                     ?>
                </h3>

                <p>Finances</p>
              </div>
              <div class="icon">
                <i class="far fa-sticky-note"></i>
              </div>
              <a href="rbi_report.php?from=0&to=0" class="small-box-footer">More Info </a>
            </div>
          </div>
        </div>

        <!-- Main row -->
    
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
     <!-- Main content -->

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


