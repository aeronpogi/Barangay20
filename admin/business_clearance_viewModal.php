<div class="modal fade" id="view<?php echo $id?>">
       <form  id="myForm" action="business_clearanceDenied.php" method="POST" enctype="multipart/form-data" >
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark" >
                    <h5 class="modal-title text-center">
                        <i class="fa fa-eye" style="margin-right: 3px"></i>
                        View Business Clearance Request
                    </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                        <input name="id" type="hidden" value="<?php echo $id ?>"/>

                        <?php
                            if($requestMode == 'Walkin') {
                                ?>
                                <div class="col-sm-12">

                                <div class="row">
  

                                <div class="form-group col-sm-6">
                                    <label for="stats">RBI: <span style="color:red;">*</span></label>
                                    <input type="number" class="form-control" maxlength="100" id="cn" name="cnumber" value="<?php echo $row['urbi'] ?>" readonly>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="stats">Resident ID: <span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" maxlength="100" id="cn" name="cnumber" value="<?php echo $residentId?>" readonly>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="stats">Requestor: <span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" maxlength="100" id="cn" name="uname" value="<?php echo $row['uname'] ?>" readonly>
                                        
                                </div>

                                <div class="form-group col-sm-6">
                                        <label for="stats">Date Request: <span style="color:red;">*</span></label>
                                          <input type="text" class="form-control" maxlength="100" id="cn" name="time_upload" value="<?php echo $row['udate'] ?>" readonly>
                                            
                                      </div>


                                </div>
                                <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="cn">Business Name: <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" maxlength="100"  name="businessName" value="<?php echo $row['businessName'] ?>" readonly>
                                        </div>
                                        <div class="form-group col-sm-6">
                                        <label for="stats">Business Type: <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" name="businessType"  value="<?php echo $row['businessType'] ?>" readonly> 
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="cn">Business Address: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" maxlength="100" id="cn" name="businessAddress" value="<?php echo $row['businessAddress'] ?>" placeholder="Enter Quantity" readonly>
                                    </div>
                                </div>
                            
                            

                                <?php
                            }else {
                                ?>
                                    <div class="col-sm-12">

                                    <div class="row">


                                    <div class="form-group col-sm-6">
                                        <label for="stats">RBI: <span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" maxlength="100" id="cn" name="cnumber" value="<?php echo $row['urbi'] ?>" readonly>
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label for="stats">Resident ID: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" maxlength="100" id="cn" name="cnumber" value="<?php echo $residentId?>" readonly>
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label for="stats">Requestor.: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" maxlength="100" id="cn" name="uname" value="<?php echo $row['uname'] ?>" readonly>
                                        
                                    </div>
                                
                                    <div class="form-group col-sm-6">
                                                <label for="stats">Date Request: <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" maxlength="100" id="cn" name="time_upload" value="<?php echo $row['udate'] ?>" readonly>
                                                    
                                            </div>





                                    </div>
                                    <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label for="cn">Business Name: <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" maxlength="100"  name="businessName" value="<?php echo $row['businessName'] ?>" readonly>
                                            </div>
                                            <div class="form-group col-sm-6">
                                            <label for="stats">Business Type: <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" name="businessType"  value="<?php echo $row['businessType'] ?>" readonly> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label for="cn">Business Address: <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" maxlength="100" id="cn" name="businessAddress" value="<?php echo $row['businessAddress'] ?>" placeholder="Enter Quantity" readonly>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="stats">Email: <span style="color:red;">*</span></label>
                                                <input type="email" class="form-control" maxlength="100" id="email" name="businessEmail" value="<?php echo $row['uemail'] ?>" readonly >
                                                <input type="hidden" class="form-control" maxlength="100" id="bemail" value="<?php echo $row['uemail'] ?>" readonly >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                            <label for="stats">Contact No.: <span style="color:red;">*</span></label>
                                                <input type="number" class="form-control" maxlength="100" id="cn" name="businessContactno" value="<?php echo $row['ucontactno'] ?>" readonly>
                                                
                                            </div>

                                            <div class="form-group col-sm-6">
                                                <label for="stats">Type of claim: <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" maxlength="100" id="cn" name="cnumber" value="<?php echo $row['pickupMode'] ?>" readonly>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="">Fee</label>
                                                <input type="number" class="form-control" name="fee" placeholder="Fee">
                                            </div>
                                                            
                                        </div>
                                  

                                <?php
                            }
                        ?>
                               
                                <input type="hidden" class="form-control" id="body" value="Your business clearance request has been denied.">
                                <input type="hidden" class="form-control" id="approved" value="Your business clearance request has been approved.">
                                <input type="hidden" class="form-control" id="subject" value="Barangay Application">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer">
                  <div class="btn-group">
                      <?php
                        if($status =='Cancelled'){
                            ?>

                            <div style="cursor: not-allowed;"> 
                                <button type="submit" style="display: none" class="btn btn-warning" name="denied" onclick="deniedBusiness();myFunction()" style="pointer-events: none;"><i class="fa fa-ban" value="0"></i> Denied</button>
                                <button type="submit" style="display: none" class="btn btn-success" id="abtn" name="btn_update" onclick="approveBusiness();myFunction()" value="1"><i class="fa fa-check"></i> Approved</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close" ><i class="fa-solid fa-xmark"></i> Close</button>
                            </div>

                            <?php
                        }else {
                            ?>
                            <button type="submit" class="btn btn-warning" name="denied" onclick="deniedBusiness();myFunction()"><i class="fa fa-ban" value="0"></i> Denied</button>
                            <button type="submit" class="btn btn-success" id="abtn" name="btn_update" onclick="approveBusiness();myFunction()" value="1"><i class="fa fa-check"></i> Approved</button>

                            <?php
                            if($row['ustatus'] <> 'Approved'){
                                ?>
                                <div style="cursor: not-allowed;"> 
                                <a href="business_clearance_print.php?id=<?php echo $id?>" type="submit" class="btn btn-primary" name="btn_edit" target="_blank" style="pointer-events: none;"><i class="fa fa-print"></i> Print</a>
                                </div>
                                <?php
                            }else {
                                ?>
                                <a href="business_clearance_print.php?id=<?php echo $id?>" type="submit" class="btn btn-primary" name="btn_edit" target="_blank"><i class="fa fa-print"></i> Print</a>
                                <?php
                            }
                            ?>
                            <?php
                        }
                      ?>

                

                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>


  <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript">
        function deniedBusiness() {
            var email = $("#bemail");
            // var body = $("#body");
            // var sub = $("#sub");

            $.ajax({
               url: 'sendEmail.php',
               method: 'POST',
               dataType: 'json',
               data: {
                   email: email.val(),
                   subject: "Business Clearance",
                   body: "Hi! <br><br> We want to you inform you that your Business clearance request has been denied. Please proceed to Barangay Hall to discuss your problem.<br><br> Thank you!  <br><br>Regards, <br> <b>BRGY Dinalupihan</b>"
               }, success: function (data) {
                    $('#myForm')[0].reset();
                   /* $('.sent-notification').text("Message Sent Successfully.");*/
               }
            });
            // if (isNotEmpty(email) && isNotEmpty(body)) {
            // }
            alert("Message sent to the resident email!");
        }

        function approveBusiness() {
            var email = $("#bemail");
            var body = $("#approved");

            $.ajax({
               url: 'sendEmail.php',
               method: 'POST',
               dataType: 'json',
               data: {
                   email: email.val(),
                   subject: "Business Clearance",
                   body: "Hi! <br><br> We want to inform you that your Business clearance request has been approved. <br><br> Please proceed to barangay hall to discuss the payment and claim your clearance.<br><br> Thank you!  <br><br>Regards, <br> <b>BRGY Dinalupihan</b>"
               }, success: function (data) {
                    $('#myForm')[0].reset();
                   /* $('.sent-notification').text("Message Sent Successfully.");*/
               }
            });
            // if (isNotEmpty(email) && isNotEmpty(body)) {
            // }
            alert("Message sent to the resident email!");
        }

    
    </script>

