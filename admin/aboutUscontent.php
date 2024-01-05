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
            <h1>About Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">About_page</li>
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
              
              <!-- /.card-header -->
              <div class="card-body">
              

                <?php if (isset($_SESSION['success'])) { ?>
                  <div class="alert alert-success text-center">
                    <?php echo $_SESSION['success']; ?>
                  </div>
                  <?php }
                  unset($_SESSION['success']);
                  ?>

                <?php

                $query = mysqli_query($conn, "SELECT * FROM content");
                $row = mysqli_fetch_array($query);
                $mission = $row['mission'];
                $vision = $row['vission'];
                $aboutus = $row['aboutus'];

                ?>
                <form id="aboutForm">

                  <div class="row">
                    <div class="col col-md-6">
                        <label for="" style="font-size: 1rem">About us</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control" readonly><?php echo $aboutus;?></textarea>
                      </div>
                  </div>

                  <br>
                  <hr>


                  <div class="row">
                    <div class="col col-md-6">
                      <label for="" style="font-size: 1rem">Mission</label>
                          <textarea name="" id="" cols="30" rows="8" class="form-control" readonly><?php echo $mission;?></textarea>
                        </div>
                        <div class="col col-md-6">
                          <label for="" style="font-size: 1rem">Vision</label>
                          <textarea name="" id="" cols="30" rows="8" class="form-control" readonly><?php echo $vision;?></textarea>
                        </div>
                    </div>

                    <hr>

                    <button type="button" class="btn btn-primary" onclick="editAbout()">Edit</button>


                </form>


                <form id="aboutFormEdit" style="display: none" action="aboutUscontentAdd.php" method="POST">

                  <div class="row">
                      <div class="col col-md-6">
                          <label for="" style="font-size: 1rem">About us</label>
                          <textarea name="aboutus" id="" cols="30" rows="10" class="form-control" ><?php echo $aboutus;?></textarea>
                        </div>
                    </div>

                  <br>
                  <hr>


                  <div class="row">
                    <div class="col col-md-6">
                      <label for="" style="font-size: 1rem">Mission</label>
                          <textarea name="mission" id="" cols="30" rows="8" class="form-control" ><?php echo $mission;?></textarea>
                        </div>
                        <div class="col col-md-6">
                          <label for="" style="font-size: 1rem">Vision</label>
                          <textarea name="vision" id="" cols="30" rows="8" class="form-control" ><?php echo $vision;?></textarea>
                        </div>
                    </div>

                    <hr>

                    <button type="button" class="btn btn-primary" onclick="cancel()">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="submit"> Save</button>


                  </form>
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

  <script>
    function editAbout(){
      document.getElementById('aboutForm').style.display ="none";
      document.getElementById('aboutFormEdit').style.display ="block";
    }

    function cancel(){
      document.getElementById('aboutForm').style.display ="block";
      document.getElementById('aboutFormEdit').style.display ="none";
    }
  </script>
 <?php include('include/footer.php') ?>
