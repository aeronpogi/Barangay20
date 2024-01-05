<?php 
  include 'user_header.php';
?>
        
        <div class="main-panel" style="padding: 15px">

          <main id="main" style=" height: 100%">

          <?php 
            // include 'modals/Modal_barangayclearance.php';
            // include 'modals/Modal_businessclearance.php';
            // include 'modals/Modal_indigency.php';
            // include 'modals/Modal_travel.php';
            include 'modals/Modal_complaints.php';
            include 'modals/Modal_documents.php';
            ?>


            <div class="card" style="    background-color: #ffffff;     background-color: #ffffff;
                box-shadow: 0px 0px 30px rgb(127 137 161 / 25%);
                border-color: white;">


            <div class="table" style="padding: 15px; ">
            

                <div class="form" style="width: 100% !important">

                    <!-- Trigger the modal with a button -->
                    <br>
                    <div class="field">



                    
                        <?php
                            if (isset($_SESSION["BusinessAdded"])) {
                            ?>
                            
                                <div class="alert alert-success" role="alert" style="margin: 15px 0; padding: 15px; background-color: #d4edda; color: #155724; border-color: #c3e6cb; text-align: center">
                                <?php echo $_SESSION["BusinessAdded"];?>
                                </div>
                            
                            <?php
                            }
                            unset($_SESSION["BusinessAdded"]);
                        
                        ?>



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

                    <!-- <button type="button"class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBusiness" style="background-color: #4c6085; border-color: #4c6085; margin: 0 0 2em "></i>Add Business</button> -->
                    <button type="button"class="btn btn-primary" data-bs-target="#addBusiness" data-bs-toggle="modal"  style="background: #007bff; margin: 0 0 2em "><i class="fa fa-plus-circle"></i> Business</button>
                    <table id="customers" style="width: 100%;" class="table">
                      <thead>
                          <tr>
                              <th>Business Name</th>
                              <th>Business Photo</th>
                              <!-- <th>Business Product</th> -->
                              <th>Business Contact No.</th>
                              <th>Business Email</th>
                              <th>Status</th>
                              <th>Action</th>
                          </tr>
                      </thead>

                        <?php
                        
                        $residentId =  $_SESSION["residentId"];
                        $page = "business";
                        $query = mysqli_query($conn, "select * from business where residentId='$residentId'") or die(mysqli_error($conn));
                                
                        while($row = mysqli_fetch_array($query)){
                            
                            $buid = $row['ID'];
                            $img = $row['businessImg'];
                            $status = $row['bstatus'];
                            ?>
                        <tr>
                            <td><?php echo $row['businessName'];?></td>
                            <td>
                              <a href="businessImage/<?php echo $img;?>" target="_blank">
                               <img src="businessImage//<?php echo $img;?>" alt="" style="width: 70px; height: 70px; object-fit: cover; border-radius: 0 !important">                        
                            </td>
                            <td><?php echo $row['businessContactno'];?></td>
                            <td><?php echo $row['businessEmail'];?></td>
                            <td>

                              <?php if($row['bstatus']=='Approved') { ?>
                                    <span class="alert alert-success" style="padding: 8px; display: flex; align-items: center; justify-content: center;width: 70px"> 
                                    <?php echo $row['bstatus']; ?>
                                    </span>
                                <?php }
                                else if($row['bstatus'] == 'Denied') {
                                    ?>
                                    <span class="alert alert-danger" style="padding: 8px; display: flex; align-items: center; justify-content: center; width: 70px;text-transform: capitalize;"> 
                                    <?php echo $row['bstatus']; ?>
                                    </span>
                                    <?php
                                }
                                
                                else { ?>
                                    <span class="alert alert-warning" style="padding: 8px; display: flex; align-items: center; justify-content: center;width: 70px"> 
                                    <?php echo $row['bstatus']; ?>
                                    </span>
                                <?php } ?>
                            </td>

                            <td>
                            <?php if($row['bstatus']=='Approved') { ?>
                                   <button type="submit" class="btn btn-primary" data-bs-target="#editBusiness<?php echo $buid;?>" data-bs-toggle="modal" >Edit</button>
                                <?php }
                              
                                
                                else { ?>
                                      <button type="submit" class="btn btn-primary" style="display: none">Edit</button>
                                <?php } ?>
                            </td>
                         
                        </tr>
                        
                        <?php

                            include 'modals/Modal_editBusiness.php';
                            include 'modals/deleteModal.php';
                        }
                        ?>
                        
                    </table>

                        
                </div>
                </div>



            </div>


            <div class="modal fade" id="addBusiness" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" >Add Business</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      
                    </div>
                    <div class="modal-body">
                        <div class="form">

                            <form action="includes/business.inc.php" method="POST" enctype="multipart/form-data">
                                <div class="element" style="margin-bottom: 1em">
                                    <label for="">Business Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bname" required placeholder="Name">
                                </div>

                             

                                <input type="hidden" name="uname" value="<?php echo $fullname;?>">
                                <input type="hidden" name="uemail" value="<?php echo $uemail;?>">

                                <!-- <div class="element">
                                    <label for="">Business Type</label>

                                    <select name="btype" class="form-select" aria-label="Default select example" required style="width: 100%; outline: none; padding: .5em 1em; border: 1px solid #b3b3b3; border-radius: 3px;">
                                        <option value="Select" disabled selected>Select</option>
                                        <option value="Sole">Sole</option>
                                        <option value="Parntership">Parntership</option>
                                        <option value="Corporate">Corporate</option>
                                    </select>
                                </div>
                                <div class="element">
                                    <label for="">Business Product</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="product"required placeholder="Product">
                                </div>

                                <div class="element">
                                    <label for="">Contact No.</label>
                                    <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bcontactno"required placeholder="Contact">
                                </div>

                                <div class="element">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bemail"required placeholder="Email" style="text-transform: lowercase;">
                                </div>
                                <div class="element">
                                    <label for="">Opening Hours</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="ophrs" required placeholder="Opening Hours">
                                </div> -->

                                <div class="element" style="margin-bottom: 1em">
                                    <label for="">Contact No.</label>
                                    <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bcontactno"required placeholder="Contact">
                                </div>
                        
                                
                                <div class="element" style="margin-bottom: 1em">
                                    <label for="">Business Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bemail"required placeholder="Contact">
                                </div>

                                <div class="element" style="margin-bottom: 1em">
                                    <label for="">Location</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lacation" required style="text-transform: ;" placeholder="Location">
                                </div>
                            
                                <div class="element" style="margin-bottom: 1em">
                                    <label for="">Business Photo</label>
                                    <input type="file" class="form-control" id="img" name="img" required>	
                                </div>
                                <div class="element" style="margin-bottom: 1em">
                                    <label for="">Description</label>
                                    <textarea class="form-control" id="Purpose" rows="3" required name="description" autofocus></textarea>
                                </div>
                                <br>
                                <div class="btn-footer" style="float: right">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                                    <input type="hidden" name="businessId" value="<?php echo $residentId;?>">
                                    <button type="submit" class="btn btn-primary" name="submit">ADD</button>
                                </div>
                            </form>
                        </div>
                    </div>
                   
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
                }
                });

                $("input[name$='pickupIndigency']").click(function() {

                  if($(".walkinIndigency").is(":checked")) {
                  $(".paymentForm").hide(300);
                  $(".fee").text("Fee: Php <?php echo $indigency;?>");

                  }else {
                  $(".paymentForm").show(300);
                  $(".fee").text("Fee: Php <?php echo $delivery;?>");
                  }
                });

                $("input[name$='pickupTravel']").click(function() {

                  if($(".walkinTravel").is(":checked")) {
                    $(".paymentForm").hide(300);
                    $(".fee").text("Fee: Php 0");

                  }else {
                    $(".paymentForm").show(300);
                    $(".fee").text("Fee: Php 20");
                  }
                });


              
              
              })
          </script>
  </body>
</html>