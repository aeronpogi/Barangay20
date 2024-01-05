<div class="modal fade" id="view<?php echo $id?>">
     <form  id="myForm" action="barangay_indigencyViewDenied.php" method="POST" enctype="multipart/form-data" >
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-eye"></i>
                        Indigency Request
                    </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                        <input name="id" type="hidden" value="<?php echo $id ?>"/>
                            <div class="col-sm-12">
                            <div class="row">

                            <div class="form-group col-sm-6">
                                      <label for="stats">RBI: <span style="color:red;">*</span></label>
                                      <input type="number" class="form-control" maxlength="100" id="cn" name="cnumber" value="<?php echo $row['urbi'] ?>" readonly>
                                    </div>

                                    <div class="form-group col-sm-6">
                                      <label for="stats">Resident ID: <span style="color:red;">*</span></label>
                                          <input type="text" class="form-control"  name="residentId" value="<?php echo $row['residentId'] ?>" readonly>
                                    </div>
                                 
                                   
                                </div>
                                <hr>
                                <?php
                              if($requestMode == 'Walkin'){
                                ?>

                                  <div class="row">
                                   <div class="form-group col-sm-6">
                                        <label for="stats">Requestor: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control"  name="usersFullname" value="<?php echo $row['uname'] ?>" readonly>
                                    </div>
    
                                    <div class="form-group col-sm-6">
                                      <label for="stats">Request Purpose: <span style="color:red;">*</span></label>
                                      <textarea type="text" class="form-control" name="usersPurpose" readonly><?php echo $row['upurpose'] ?></textarea>
                                    </div>
    
                                  </div>
    
                          
                                
                                  
                    
                       
                                <?php
                              }else {
                                ?>
                                
                                <div class="row">
                                   <div class="form-group col-sm-6">
                                        <label for="stats">Requestor: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control"  name="usersFullname" value="<?php echo $row['uname'] ?>" readonly>
                                    </div>
    
                                    <div class="form-group col-sm-6">
                                        <label for="stats">Contact Number: <span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" maxlength="100" id="cn" name="cnumber" value="0<?php echo $row['ucontactno'] ?>" readonly>
                                    </div>
    
                                  </div>
    
                                <div class="row">
                                  
                                <div class="form-group col-sm-6">
                                      <label for="cn">Email: <span style="color:red;">*</span></label>
                                      <input type="email" class="form-control" id="email" maxlength="100" id="cn" name="usersEmail" value="<?php echo $row['uemail'] ?>" readonly >
                                  </div>
                                  <div class="form-group col-sm-6">
                                      <label for="stats">Type of claim: <span style="color:red;">*</span></label>
                                      <input type="text" class="form-control" maxlength="100" id="cn" name="pickup" value="<?php echo $row['pickupMode'] ?>" readonly>
                                  </div>
                                </div>
                                
                                  <hr>
                                  
                                <div class="row">
                                
                                  <div class="form-group col-sm-6">
                                    <label for="stats">Request Purpose: <span style="color:red;">*</span></label>
                                    <textarea type="text" class="form-control" name="usersPurpose" readonly><?php echo $row['upurpose'] ?></textarea>
                                  </div>
    
                                  <?php 
                                    if($receipt == 'none') {
                                      ?>
                                      
                                      <div class="form-group col-sm-6" style="display: none">
                                          <label for="stats">Gcash Receipt: <span style="color:red;">*</span></label>
                                          <br>
                                          <a href="../resident/gcash/<?php echo $receipt;?>" target="_blank">
                                            <img src="../resident/gcash/<?php echo $receipt;?>" alt="" style="width: 70px; height: 70px; object-fit: cover;">
                                          </a>
                                      </div>
                                      <?php
                                    }else {
                                      ?>
                                      <div class="form-group col-sm-6">
                                          <label for="stats">Gcash Receipt: <span style="color:red;">*</span></label>
                                          <br>
                                          <a href="../resident/gcash/<?php echo $receipt;?>" target="_blank">
                                            <img src="../resident/gcash/<?php echo $receipt;?>" alt="" style="width: 70px; height: 70px; object-fit: cover;">
                                          </a>
                                      </div>
                                      
                                      <?php
                                    }
                                  ?>
                               
                                </div>
                           
                                <?php
                              }
                            ?>

                                <div class="row">
                                   
                                </div>
                                <input type="hidden" class="form-control" id="denied" value="Your Indigency request has been denied.">
                                <input type="hidden" class="form-control" id="approved" value="Your Indigency request has been approved.">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer">
                  <div class="btn-group">
                 <button type="submit" class="btn btn-warning" name="denied" onclick="sendEmail()"><i class="fa fa-ban"></i> Denied</button>
                 <button type="submit" class="btn btn-success" id="abtn" name="approved" onclick="approve()"><i class="fa fa-check"></i> Approved</button>
                 

                 <?php
                  if($row['ustatus'] <> 'Approved'){
                    ?>
                    <div style="cursor: not-allowed;"> 
                       <a href="barangay_indigency_print.php?id=<?php echo $id ?>" type="submit" class="btn btn-primary" name="btn_edit" style="pointer-events: none;"><i class="fa fa-print"></i> Print</a>
                    </div>
                    <?php
                  }else {
                    ?>
                      <a href="barangay_indigency_print.php?id=<?php echo $id ?>" type="submit" class="btn btn-primary" name="btn_edit" target="_blank"><i class="fa fa-print"></i> Print</a>
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
           function sendEmail() {
              var email = $("#email");
              // var body = $("#denied");

              $.ajax({
                url: 'sendEmail.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    subject: "Certificate of Indigency",
                    email: email.val(),
                    // body: body.val()
                    body: "Hi! <br><br> We want to you inform you that your Certificate of Indigency request has been denied. Please proceed to Barangay Hall to discuss your problem.<br><br> Thank you! <br><br>Regards, <br> <b>BRGY Dinalupihan</b>"
                }, success: function (data) {
                      $('#myForm')[0].reset();
                    /* $('.sent-notification').text("Message Sent Successfully.");*/
                }
              });
              // if (isNotEmpty(email) && isNotEmpty(body)) {
              // }
              alert("Message sent to the resident email!");
          }

          function approve() {
              var email = $("#email");
              // var body = $("#approved");

              // var message = "This automated reply is just to let you know that your barangay clearance request has been approved. \n\nIf you chose delivery type of claim just kindly wait for our staff to deliver you request and if you chose walk-in type of claim please proceed to barangay hall to claim your request."

              $.ajax({
                url: 'sendEmail.php',
                method: 'POST',
                dataType: 'json',
                data: {
                   subject: "Certificate of Indigency",
                    email: email.val(),
                    body: "Hi! <br><br> We want to inform you that your Certificate of Indigency request has been approved. <br><br> If you chose delivery type of claim please wait patiently at home until our staff delivered your document. <br><br> If you chose walk-in please proceed to the barangay hall to claim your document.<br><br> Thank you! <br><br>Regards, <br> <b>BRGY Dinalupihan</b>"
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
