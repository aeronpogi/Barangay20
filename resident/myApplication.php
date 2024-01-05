<?php 
  include 'user_header.php';
?>

        <div class="main-panel" style="padding: 15px">

          <main id="main" style="height: 100%" >

            <?php 

            
            require_once 'includes/dbh.inc.php';
            $query = mysqli_query($conn, "SELECT * FROM content");

            $row = mysqli_fetch_array($query);

            $gName = $row["gName"];

            $gNumber = $row["gNumber"];
            $qrCode = $row["qrCode"];
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
                        if (isset($_SESSION["applicatonSuccess"])) {
                          ?>
                        
                            <div class="alert alert-success" role="alert" style="margin: 15px 0; padding: 15px; background-color: #d4edda; color: #155724; border-color: #c3e6cb; text-align: center">
                              <?php echo $_SESSION["applicatonSuccess"];?>
                            </div>
                          
                          <?php
                        }
                        unset($_SESSION["applicatonSuccess"]);
                      
                    ?>



                    <?php
                        if (isset($_SESSION["typeerror"])) {
                          ?>
                        

                        <div class="alert alert-warning" role="alert" style="background: #de4c4c; border: 1px solid #de4c4c; color: white; text-align: center;">
                                <?php echo $_SESSION["typeerror"];?>
                          </div>
                          <?php
                        }
                        unset($_SESSION["typeerror"]);
                      
                    ?>



                </div>

                <div class="table-responsive">
                  
                  <br>
                <button type="button"class="btn btn-primary" data-bs-target="#modalDocu" data-bs-toggle="modal"  style="background: #007bff; margin: 0 0 2em; "><i class="fa fa-plus-circle"></i> Request</button>

                <?php include 'modals/Modal_documents.php';?>
                  <table class="table">
                    <thead >
                      <tr>
                          <th>Permit Type</th>
                          <th>Date</th>
                          <th>Purpose</th>
                          <th>Status</th>
                      </tr>
                    </thead>

                      
                    <?php
                    
                    $uid =   $_SESSION['residentId'];
                    $page = "e-application";
                    $query = mysqli_query($conn, "select * from application where residentId='$uid' order by id desc") or die(mysqli_error($conn));
                            
                    while($row = mysqli_fetch_array($query)){
                        
                        $buid = $row['id'];
                        $status = $row['ustatus'];

                        ?>
                    
                    
                    <tr>
                        <td><?php echo $row['permit_type'];?></td>
                        <td><?php echo $row['udate'];?></td>
                        <td><?php echo $row['upurpose'];?></td>
                        <td>
                               <?php if($row['ustatus']=='Approved') { ?>
                                    <span class="alert alert-success" style="padding: 8px; display: flex; align-items: center; justify-content: center;width: 70px"> 
                                    <?php echo $row['ustatus']; ?>
                                    </span>
                                <?php }
                                else if($row['ustatus'] == 'Denied') {
                                    ?>
                                    <span class="alert alert-danger" style="padding: 8px; display: flex; align-items: center; justify-content: center; width: 70px;text-transform: capitalize;"> 
                                    <?php echo $row['ustatus']; ?>
                                    </span>
                                    <?php
                                }
                                
                                else { ?>
                                    <span class="alert alert-warning" style="padding: 8px; display: flex; align-items: center; justify-content: center;width: 70px"> 
                                    <?php echo $row['ustatus']; ?>
                                    </span>
                                <?php } ?>
                                
                        </td>
                  
                    </tr>
                    
                    <?php


                        include 'modals/deleteModal.php';
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

    <script>
            $(document).ready(function(){

                $('#permitType').bind('change', function(event) {

                  var i= $('#permitType').val();

                  if(i=="1") // equal to a selection option
                    {
                        $('#brgyClearance').show(300);
                        $('#businessClearance').hide(300); // hide the first one
                        $('#indingency').hide(300); // show the other one
                        $('#travelauthorization').hide(300); // show the other one
                    }
                  else if(i=="2")
                    {
                      $('#brgyClearance').hide(300); // hide the first one
                      $('#businessClearance').show(300); // show the other one
                      $('#indingency').hide(300); // show the other one
                      $('#travelauthorization').hide(300); // show the other one

                    }
                  else if(i=="3")
                  {
                    $('#brgyClearance').hide(300); // hide the first one
                    $('#businessClearance').hide(300); // hide the first one
                    $('#indingency').show(300); // show the other one
                    $('#travelauthorization').hide(300); // show the other one

                  }else if(i=="4"){
                    $('#brgyClearance').hide(300); // hide the first one
                    $('#businessClearance').hide(300); // hide the first one
                    $('#indingency').hide(300); // show the other one
                    $('#travelauthorization').show(300); // show the other one
                    
                  }
                });
                          


             

                $("input[name$='pickup']").click(function() {

                    if($("#walkin").is(":checked")) {
                      $("#paymentForm").hide(300);
                      $(".fee").text("Fee: Php <?php echo $barangayclearanceFee;?>");

                    }else {
                      $("#paymentForm").show(300);
                      $(".fee").text("Fee: Php <?php echo $delivery;?>");
                      $(".fees").text("<?php echo $delivery;?>");
                    }
                });

                $("input[name$='pickupIndigency']").click(function() {

                      if($("#walkinIndigency").is(":checked")) {
                      $(".paymentForm").hide(300);
                      $(".fee").text("Fee: Php <?php echo $indigency;?>");

                      }else {
                      $(".paymentForm").show(300);
                      $(".fee").text("Fee: Php <?php echo $delivery;?>");
                      }
                });


              
              
              })
          </script>
  </body>
</html>