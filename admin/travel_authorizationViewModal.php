<div class="modal fade" id="view<?php echo $id?>">
     <form  id="myForm" action="travel_authorizationDenied.php" method="POST" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-eye"></i>
                        View Travel Authorization Clearance Request
                    </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"  style="color:white;">&times;</span>
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
                                      <label for="stats">RBI No.: <span style="color:red;">*</span></label>
                                          <input type="text" class="form-control" name="rbi" value="<?php echo $row['urbi'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="cn">Full Name: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" maxlength="100" id="cn" name="usersFullname" value="<?php echo $row['uname'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="stats">Address to Travel: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" name="address_to_travel"  value="<?php echo $row['to_travel'] ?>" readonly> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                      <label for="stats">Date Request: <span style="color:red;">*</span></label>
                                      <input type="text" class="form-control" maxlength="100" id="cn" name="time_upload" value="<?php echo $row['udate'] ?>" readonly>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                  <div class="form-group col-sm-6">
                                      <label for="stats">Email: <span style="color:red;">*</span></label>
                                        <input type="email" class="form-control" maxlength="100" id="email" name="usersEmail" value="<?php echo $row['uemail'] ?>" readonly>
                                        <input type="hidden" class="form-control" maxlength="100" id="temail" value="<?php echo $row['uemail'] ?>" readonly >
                                          
                                    </div>
                                    <div class="form-group col-sm-6">
                                      <label for="stats">Contact No.: <span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" maxlength="100" id="cn" name="cnumber" value="0<?php echo $row['ucontactno'] ?>" readonly>
                                          
                                    </div>
                                </div>
                         
                                
                                <div class="row">
                                  <div class="form-group col-sm-6">
                                      <label for="stats">Type of claim: <span style="color:red;">*</span></label>
                                      <input type="text" class="form-control" maxlength="100" id="cn" name="pickup" value="<?php echo $row['pickupMode'] ?>" readonly>
                                  </div>

                                  <div class="form-group col-sm-6">
                                      <label for="stats">Proof of payment: <span style="color:red;">*</span></label>
                                      <br>
                                        <?php 
                                          if($receipt == 'none') {
                                            echo 'none';
                                          }else {
                                            ?>
                                            <a href="../resident/gcash/<?php echo $receipt;?>" target="_blank">
                                              <img src="../resident/gcash/<?php echo $receipt;?>" alt="" style="width: 70px; height: 70px; object-fit: cover;">
                                            </a>
                                            <?php
                                          }
                                        ?>
                                  </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                      <label for="stats">Request Purpose: <span style="color:red;">*</span></label>
                                      <textarea type="text" class="form-control" name="usersPurpose" readonly><?php echo $row['upurpose'] ?></textarea>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" id="body" value="Your Travel authorization clearance request has been denied.">
                                <input type="hidden" class="form-control" id="approved" value="Your Travel authorization request has been approved.">
                                <input type="hidden" class="form-control" id="subject" value="Travel authorization">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer">
                  <div class="btn-group">
                  <button type="submit" class="btn btn-warning" name="denied" onclick="sendEmail();myFunction()"><i class="fa fa-ban"></i> Denied</button>
                  <button type="submit" class="btn btn-success" id="abtn" name="approved" onclick="approveT();myFunction()"><i class="fa fa-ban"></i> Approved</button>


                  <a href="travel_authorization_print.php?id=<?php echo $id ?>" type="submit" class="btn btn-primary"><i class="fa fa-print"></i> Print</a>
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
            var body = $("#body");
            var email = $("#temail");

            if (isNotEmpty(email) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       email: email.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                       /* $('.sent-notification').text("Message Sent Successfully.");*/
                   }
                });
            }
        }

        function approveT() {
            var email = $("#temail");
            var body = $("#approved");

            if (isNotEmpty(email) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       email: email.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                       /* $('.sent-notification').text("Message Sent Successfully.");*/
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

        <script>
function myFunction() {
  alert("Message sent to the resident email!");
}
</script>