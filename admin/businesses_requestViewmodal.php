<div class="modal fade" id="view<?php echo $id?>" data-show='false'>

      <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
              <h5 class="modal-title text-center">
                  <i class="fa fa-eye"></i>
                  View Request
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color: white;">&times;</span>
              </button>
            </div>

            <div class="card-body">
              <div class="disabledForm" style="padding: 0">
                  <form action="businessRequestScriptApproval.php" method="POST">
                      <input name="id" type="hidden" value="<?php echo $id ?>"/>
  
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="stats">RBI: <span style="color:red;">*</span></label>
                                <input type="number" class="form-control" maxlength="100" id="cn" name="cnumber" value="<?php echo $row['urbi'] ?>" readonly>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="stats">Requestor: <span style="color:red;">*</span></label>
                                <input type="text" class="form-control"  name="usersFullname" value="<?php echo $row['uname'] ?>" readonly>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="stats">Resident ID: <span style="color:red;">*</span></label>
                                <input type="text" class="form-control"  name="usersFullname" value="<?php echo $row['residentId'] ?>" readonly>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="cn">Business Name: <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" maxlength="100" id="cn" name="businessName" value="<?php echo $row['businessName'] ?>" readonly>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="cn">Business Email: <span style="color:red;">*</span></label>
                                <input type="email" class="form-control" id="bbbemail" maxlength="100" name="usersEmail" value="<?php echo $row['businessEmail'] ?>" readonly >
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="stats">Contact Number: <span style="color:red;">*</span></label>
                                <input type="number" class="form-control" maxlength="100" id="cn" name="businessContactno" value="<?php echo $row['businessContactno'] ?>" readonly>
                            </div>
                            

                            <div class="form-group col-sm-6">
                                <label for="stats">Location: <span style="color:red;">*</span></label>

                                <?php 
                                  $location = $row['location'];
                                  $location = str_replace("+", " ", $location);
                                
                                ?>

                                <input type="text" class="form-control" name="" value="<?php echo $location;?>"readonly></input>
                            </div>
                        </div>


                        
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="stats">Business Photo: <span style="color:red;">*</span></label><br>
                                <img src="../resident/businessImage/<?php echo $img;?>" alt="" style="width: 120px; height: 80px; object-fit: cover">
                            </div>
                        </div>

                        <input type="hidden" class="form-control" id="businessRequestdenied" value="Your business request has been denied.">
                        <input type="hidden" class="form-control" id="businessRequestapproved" value="Your business request has been approved.">


                        <div class="modal-footer">
                          <div class="btn-group">
   
                                <button type="submit" class="btn btn-warning" name="denied" onclick="sendEmail()"><i class="fa fa-ban"></i> Denied</button>
                                <button type="submit" class="btn btn-success" id="abtn" name="approved" onclick="approve()"><i class="fa fa-check"></i> Approved</button>
                                <button type="button" class="btn btn-primary edit-btn" data-target='view<?php echo $id;?>'> Edit</button>
                          </div>
                        </div>
                  </form>
              </div>


              <div class="enabledForm" style="display: none"> 
                  <form id="myForm" action="businessRequestScript.php" method="POST" enctype="multipart/form-data" >
                      <input name="id" type="hidden" value="<?php echo $id ?>"/>
  
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="stats">RBI: <span style="color:red;">*</span></label>
                                <input type="number" class="form-control" maxlength="100" id="cn" name="cnumber" value="<?php echo $row['urbi'] ?>" readonly>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="stats">Requestor: <span style="color:red;">*</span></label>
                                <input type="text" class="form-control"  name="usersFullname" value="<?php echo $row['uname'] ?>" readonly>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="stats">Resident ID: <span style="color:red;">*</span></label>
                                <input type="text" class="form-control"  name="usersFullname" value="<?php echo $row['residentId'] ?>" readonly>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="cn">Business Name: <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" maxlength="100" id="cn" name="businessName" value="<?php echo $row['businessName'] ?>" >
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="cn">Business Email: <span style="color:red;">*</span></label>
                                <input type="email" class="form-control" id="bbbemail" maxlength="100" name="usersEmail" value="<?php echo $row['businessEmail'] ?>"  >
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="stats">Contact Number: <span style="color:red;">*</span></label>
                                <input type="number" class="form-control" maxlength="100" id="cn" name="businessContactno" value="<?php echo $row['businessContactno'] ?>" >
                            </div>
                            

                            <div class="form-group col-sm-6">
                                <label for="stats">Location: <span style="color:red;">*</span></label>

                                <?php 
                                  $location = $row['location'];
                                  $location = str_replace("+", " ", $location);
                                
                                ?>

                                <input type="text" class="form-control" name="location" value="<?php echo $location;?>"></input>
                            </div>
                        </div>


                        
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="stats">Business Photo: <span style="color:red;">*</span></label><br>
                                <input type="file" name="img" value="<?php echo $img; ?>">
                            </div>
                        </div>

                        <input type="hidden" class="form-control" id="businessRequestdenied" value="Your business request has been denied.">
                        <input type="hidden" class="form-control" id="businessRequestapproved" value="Your business request has been approved.">


                        <div class="modal-footer">
                          <div class="btn-group">
                           <button type="button" class="btn btn-warning edit-btn" data-target='view<?php echo $id;?>' style="margin-right: 3px;" data-dismiss="modal"> Cancel</button>
                            <button type="submit" class="btn btn-primary" name="bRequestEditbtn"> Save</button>
                           
                          </div>
                        </div>
                  </form>
              </div>


             </div>

            
        </div>
      </div>





      </div>


    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script type="text/javascript">
              function sendEmail() {
                var email = $("#bbbemail");

                $.ajax({
                  url: 'sendEmail.php',
                  method: 'POST',
                  dataType: 'json',
                  data: {
                      email: email.val(),
                      subject: "Business",
                      body: "Hi! <br><br> We want to you inform you that your Business request has been denied. Please proceed to Barangay Hall to discuss your problem.<br><br> Thank you!  <br><br>Regards, <br> <b>BRGY Dinalupihan</b>"
                  }, success: function (data) {
                        $('#myForm')[0].reset();
                      /* $('.sent-notification').text("Message Sent Successfully.");*/
                  }
                });
             
                alert("Message sent to the resident email!");
            }

            function approve() {
                var email = $("#bbbemail");

                $.ajax({
                  url: 'sendEmail.php',
                  method: 'POST',
                  dataType: 'json',
                  data: {
                      email: email.val(),
                      subject: "Business",
                      body: "Hi! <br><br> We want to inform you that your Business request has been approved. <br><br> Thank you!  <br><br>Regards, <br> <b>BRGY Dinalupihan</b> "
                  }, success: function (data) {
                        $('#myForm')[0].reset();
                      /* $('.sent-notification').text("Message Sent Successfully.");*/
                  }
                });
              
                alert("Message sent to the resident email!");
            }

              
            function isNotEmpty(caller) {
                if (caller.val() == "") {
                    caller.css('border', '1px solid red');
                    return false;
                } else
                    caller.css('border', '');

                return true;
            }


            // function editBrequest() {
            //   document.getElementById('disabledView').style.display ='none';
            //   document.getElementById('enabledView').style.display ='block';
            // }
            


            
        </script>

