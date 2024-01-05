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
            <h1>Announcements</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Announcements</li>
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
                <button class="btn bg-primary btn-md" data-toggle="modal" data-target="#addNews"><i class="fa fa-plus-circle"></i>
                Announcements
                </button>
              </div>
               <?php include_once("newsAddModal.php"); ?>
              <!-- /.card-header -->
              <div class="card-body">
                  <?php if (isset($_SESSION["typeerror"])) { ?>
                  <div class="alert alert-warning text-center">
                    <?php echo $_SESSION["typeerror"]; ?>
                  </div>
                  <?php }
                  unset($_SESSION["typeerror"]);
                  ?>

                <?php if (isset($_SESSION['EditedNews'])) { ?>
                  <div class="alert alert-success text-center">
                    <?php echo $_SESSION['EditedNews']; ?>
                  </div>
                  <?php }
                  unset($_SESSION['EditedNews']);
                  ?>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <!-- <th>Picture/Video</th> -->
                    <th>Headline</th>
                    <th>Description</th>
                    <th>Date Upload</th>
                    <th>Status</th>
                    <th style="text-align: center; width: 80px">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                  $page = "news";
                  $i = 1;
                    $query = mysqli_query($conn, "select * from news order by time_upload desc;") or die(mysqli_error($conn));
                    while($row = mysqli_fetch_array($query)){
                      $id = $row['id'];
                      $newsImg = $row["news_img"];
                     $fileype = $row["file_type"];

                  ?>
                  <tr>
                
                    <td>
                      <?php echo $row['news_title']; ?>
                    </td>
                    <td>
                      <?php echo $row['news_descri']; ?>
                    </td>
                    <td>
                      <?php echo $row['time_upload'];?>
                    </td>
                    <td>

                      <?php 
                      
                      if($row['status']=='Unpublish') { ?>
                        <span class="badge badge-warning"> 
                          <?php echo $row['status']; ?>
                        </span>
                 
                    <?php }
                    
                     else { ?>
                      <span class="badge badge-success"> 
                      <?php echo $row['status']; ?>
                      </span>
                    <?php } ?>
                    </td>
                   
                    <td style="text-align: center; width: 200px">
                      <div class="btn-group">
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editNews<?php echo $id; ?>" >
                        <i class="fa fa-eye" style="margin-right: 3px"></i> Details
                      </button>
                      </div>
                    </td>
                  </tr>
                  <?php
                // include("deleteModal.php");
               include("newsEditModal.php");
                
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
