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
            <!-- <h1>Document Fees</h1> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Document_FEe</li>
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

                    <?php

                        $query = mysqli_query($conn, "SELECT * FROM content");
                        $row = mysqli_fetch_array($query);

                        $barangay_clearance = $row["barangay_clearance"];
                        $business_clearance = $row["business_clearance"];
                        $indigency = $row["indigency"];
                        $delivery_fee = $row["delivery_fee"];

                        $qrCode = $row['qrCode'];
                        $gName = $row['gName'];
                        $gNumber = $row['gNumber'];

                    ?>
                <form id="viewFOrm">
                <h4>Document Fees</h4>
                <hr>

                <div class="row">
                       <div class="col col-md-6">
                          <label for="" style="font-size: 1rem">Barangay Clearance Fee</label>
                          <input type="text" class="form-control" name="barangay_clearance" value="<?php echo $barangay_clearance;?>" readonly>
                        </div>
                        <div class="col col-md-6">
                          <label for="" style="font-size: 1rem">Business Clearance Fee</label>
                          <input type="text" class="form-control" name="business_clearance" value="<?php echo $business_clearance;?>" readonly>
                        </div>
                    </div>
                    <hr>


                    <div class="row">
                        <div class="col col-md-6">
                          <label for="" style="font-size: 1rem">Indigency Fee</label>
                          <input type="text" class="form-control"  name="indigency" value="<?php echo $indigency;?>" readonly>
                        </div>
                        <div class="col col-md-6">
                          <label for="" style="font-size: 1rem">Delivery Fee</label>
                          <input type="text" class="form-control" name="delivery_fee" value="<?php echo $delivery_fee;?>" readonly>
                        </div>
                    </div>
                    <hr>

                   
                    <br>
                    <br>
                    <h4>Payment Mode (Gcash Only) </h4>
        

                    <hr>


                    <label for="" style="font-size: 1rem">Qr Code</label>
                    <div class="row">
                        <div class="col col-md-6">
                           <img style="width: 100px; margin: 15px 0;" src="../resident/gcash/<?php echo $qrCode;?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-6">
                          <label for="" style="font-size: 1rem">Gcash Name</label>
                          <input type="text" class="form-control" name="gName" value="<?php echo $gName;?>" readonly>
                        </div>
                        <div class="col col-md-6">
                          <label for="" style="font-size: 1rem">Gcash Number</label>
                          <input type="text" class="form-control"  name="gNumber" value="<?php echo $gNumber;?>" readonly>
                        </div>
                    </div>
                 
                    <hr>

                                    
                    <div style="display: flex; justify-content: flex-end"> 

                      <button type="button" class="btn btn-primary" onclick="editFee()" >Edit</button>
                    </div>

                </form>


                <form id="editForm" style="display: none" action="contentDoucmetEdit.php" method="post" enctype="multipart/form-data" >

                <h4>Document Fees</h4>
                <hr>

                <div class="row">
                       <div class="col col-md-6">
                          <label for="" style="font-size: 1rem">Barangay Clearance Fee</label>
                          <input type="text" class="form-control" name="barangay_clearance" value="<?php echo $barangay_clearance;?>" >
                        </div>
                        <div class="col col-md-6">
                          <label for="" style="font-size: 1rem">Business Clearance Fee</label>
                          <input type="text" class="form-control" name="business_clearance" value="<?php echo $business_clearance;?>" >
                        </div>
                    </div>
                    <hr>


                    <div class="row">
                        <div class="col col-md-6">
                          <label for="" style="font-size: 1rem">Indigency Fee</label>
                          <input type="text" class="form-control"  name="indigency" value="<?php echo $indigency;?>" >
                        </div>
                        <div class="col col-md-6">
                          <label for="" style="font-size: 1rem">Delivery Fee</label>
                          <input type="text" class="form-control" name="delivery_fee" value="<?php echo $delivery_fee;?>" >
                        </div>
                    </div>
                    <hr>

                   
                    <br>
                    <br>
                    <h4>Payment Mode (Gcash Only)</h4>
        

                    <hr>


                    <label for="" style="font-size: 1rem">Qr Code</label>
                    <div class="row">
                        <div class="col col-md-6">
                        <input type="file" class="form-control" name="qrCode">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col col-md-6">
                          <label for="" style="font-size: 1rem">Gcash Name</label>
                          <input type="text" class="form-control" name="gName" value="<?php echo $gName;?>" >
                        </div>
                        <div class="col col-md-6">
                          <label for="" style="font-size: 1rem">Gcash Number</label>
                          <input type="text" class="form-control"  name="gNumber" value="<?php echo $gNumber;?>" >
                        </div>
                    </div>
                 
                    <hr>

                    <div style="display: flex; justify-content: flex-end"> 
                      <button type="button" class="btn btn-primary" onclick="cancel()" style="margin-right: 3px">Cancel</button>
                      <button type="submit" name="submit" class="btn btn-primary" onclick="editFee()">Save</button>
                    </div>


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
      <script>
        function editFee(){
            document.getElementById('viewFOrm').style.display = "none";  
            document.getElementById('editForm').style.display = "block";
        }

        function cancel(){
            document.getElementById('viewFOrm').style.display = "block";  
            document.getElementById('editForm').style.display = "none";
        }
    </script>
    
  <!-- /.content-wrapper -->
 <?php include('include/footer.php') ?>
