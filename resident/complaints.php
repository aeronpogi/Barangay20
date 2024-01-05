<?php 
  include 'user_header.php';
?>

        <div class="main-panel" style="padding: 15px">

          <main id="main" style="height: 100%" >

            <?php 
            include 'modals/Modal_barangayclearance.php';
            include 'modals/Modal_businessclearance.php';
            include 'modals/Modal_indigency.php';
            include 'modals/Modal_travel.php';
            include 'modals/Modal_complaints.php';
            include 'modals/Modal_documents.php';
            ?>


          
          <div class="card" style="    background-color: #ffffff;     background-color: #ffffff;
    box-shadow: 0px 0px 30px rgb(127 137 161 / 25%);
    border-color: white;">





            <div class="table " style="padding: 15px; ">
            


              
         
            <div class="form" style="width: 100% !important">
            
            

                <!-- <h2 style="margin: .45em 0 .75em">History</h2> -->

                <div class="field">



                
                    <?php
                        if (isset($_SESSION["success"])) {
                          ?>
                        
                            <div class="alert alert-success" role="alert" style="margin: 15px 0; padding: 15px; background-color: #d4edda; color: #155724; border-color: #c3e6cb; text-align: center">
                              <?php echo $_SESSION["success"];?>
                            </div>
                          
                          <?php
                        }
                        unset($_SESSION["success"]);
                      
                    ?>



                  



                </div>

                <div class="table-responsive">
                  
                  <br>
                <button type="button"class="btn btn-primary" data-bs-target="#complaints" data-bs-toggle="modal" style="background: #007bff; margin: 0 0 2em; "><i class="fa fa-plus-circle"></i> Complaint</button>

                <?php include 'modals/Modal_documents.php';?>
                  <table class="table">
                    <thead>
                        <tr>
                            <th>Narration</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        
                        </tr>
                    </thead>

                      
                    <?php
                    
                    $urbi =  $_SESSION["userrbi"];
                    $residentId = $_SESSION['residentId'];
                    $page = "e-application";
                    
                    $query = mysqli_query($conn, "select * from complaints where urbi='$urbi' order by id desc") or die(mysqli_error($conn));
                            
                    while($row = mysqli_fetch_array($query)){
                      $id = $row['ID'];
                        
       
                        ?>
                    
                    
                    <tr>
                        <td><?php echo $row['narration'];?></td>
                        <td><?php echo $row['dates'];?></td>
                        <td><?php echo $row['status'];?></td>
                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#view<?php echo $id;?>"> <i class="fa fa-eye"></i> Details</button></td>
                    </tr>
                    
                    <?php


                        include 'modals/Modal_view_complaints.php';
                    }
                    ?>
                  </table>
                </div>


                      
            </div>

            </div>
          </div>
        </main><!-- End #main -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © 2022</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->

  
  </body>
</html>