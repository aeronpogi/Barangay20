
          <div class="modal fade" id="bsnclearance" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style=" color: #4c6085;">
                  <h5 class="modal-title" id="exampleModalLabel">Business Clearance</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
  
                <div class="content" style="background-color: white">
        <!-- <div class="brgy-modal-close">&times;</div> -->
                
                  <div class="item">
                      <ol class="details">
                      <li>Fill out the following.</li>
                      <li>Submit the filled out form and wait for the barangay confirmation via email.</li>
                      <li>After you recieve an email from Barangay, go to the Barangay Hall.</li>
                      <li>Porceed to the cashier and pay for the assessed fees.</li>
                      <li>Present your ID.</li>
                      <li>Wait for your document to be released.</li>
                      </ol>
                  </div>

                  <?php
                  $id =  $_SESSION["usersid"];
                  $business = mysqli_query($conn,"select * from user_account where id ='$id'") or die (mysqli_error($conn));
                  while($row = mysqli_fetch_assoc($business)) {
                      $ufullname = $row['ufullname'];
                      $uemail = $row['uemail'];
                      $contact = $row['ucontactno'];
                        }
                  ?>
              
              <hr style="border-top: 1px solid #e9ecef;">
                  <div class="item">
                      <div class="form" style="margin: -15px;">
                        <form action="includes/bsnsclearance.inc.php" method="post" enctype="multipart/form-data">
                          <?php 
                              $rbi = $_SESSION["userrbi"];
                          ?>
                   
                             <div class="element">
                                  <label style="font-weight: 450;">Business Name <i class="fas fa-edit"></i></label></label> 
                                  <input type="text" name="businessName"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                              </div>
                            
                                  <input type=hidden name="business_owner" value="<?php echo $ufullname ?>" required>
                        
                              <div class="element">
                                  <label style="font-weight: 450;"> Business Type <i class="fas fa-edit"></i></label></label>
                                  <input type="text" name="businessType"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                              </div>

                        

                              <!-- <div class="element">

                                  <label for="inputState">Business Type
                                  <select id="inputState" class="form-control"  name="businessType">
                                    <option selected>Choose...</option>
                                    <option>Sole proprietership</option>
                                    <option>Partnership</option>
                                    <option>Corporate</option>
                                  </select>
                              </div> -->
                        
                              
                              <div class="element">
                              <label style="font-weight: 450;"> Business Address <i class="fas fa-edit"></i></label></label>
                                  <input type="text" name="businessAddress"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                              </div>

                              <div class="element">
                                  <label style="font-weight: 450;"> Owner/Proprietor <i class="fas fa-edit"></i></label></label>
                                  <input type="text" name="owner"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                              </div>
                              <!-- <div class="element">
                                  <label for="">Business Email</label>
                                  <input type="email" name="businessEmail"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                              </div> -->
                              <!-- <div class="element">
                                  <label for="">Business Contact No.</label>
                                  <input type="tel" name="businessContactno"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                              </div> -->
                              
                              <hr style="border-top: 1px solid #e9ecef;">
                              <div style="padding: .1em 1.4em">
                                <span style="font-weight: 450; font-size: 16px; font-weight: bold; color: #4c6085" id="fee">  Fee: Php 200 - 500</span> <br>
                              </div> 

                              <hr style="border-top: 1px solid #e9ecef;">

                              <div style="padding: .1em 1.4em">
                                  <h4>Mode of Pick up</h4>
                                  <div class="form-check" style="padding-left: 1.5rem;">
                                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="bpickup" checked>
                                      <label class="form-check-label" for="flexRadioDefault1" style="margin-left: -.5px;">
                                          Walk in (Only)
                                      </label>
                                      </div>
                                      <!-- <div class="form-check" style="padding-left: 1.5rem;">
                                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="bgcash"  >
                                      <label class="form-check-label" for="flexRadioDefault2" style="margin-left: -.5px;">
                                      Delivery
                                      </label>
                                      </div> -->
                                  </div>
                         

                            
                   

                              <div class="element">
                                <div class="form-group row" id="bgcashProof" style="display: none">
                                <hr style="border-top: 1px solid #e9ecef;">
                                  <div class="col-sm-6 member-data">
                                      <!-- <span style="font-weight: 450; font-size: 16px; font-weight: bold; color: #4c6085" class="fee">  Fee: 500</span> <br> -->
                                      <span style="font-weight: 450; font-size: 14px">Gcash Name: Ronald Cabera</span><br>
                                      <span style="font-weight: 450; font-size: 14px; ">Gcash Number: 09283746125</span><br>
                                    
                                    <img style="width: 100px; margin: 15px 0;" src="../img/qr.png">
                                  </div>
                                  <div class="col-sm-6 member-data">
                                    <label style="font-weight: 450;">Please upload your Gcash receipt.</label><br>
                                    <!-- <input type="file" name="receiptImg" class="form-control form-control-sm"> -->
                                    <input type="file" class="form-control" id="img" name="img" >
                                  </div>		
                                </div>
                              
                              </div>

                              <hr style="border-top: 1px solid #e9ecef;">
                              <br>
                              <div class="btn" style="padding: 0">
                                  <a id="close-btn" data-bs-dismiss="modal">Close</a>
                                  <input type="hidden" name="applicationId" value="<?php echo $id;?>">
                                  <input type="hidden" name="contact" value="<?php echo $contact;?>" >
                                  <input type="hidden" value="<?php echo $rbi?>"name="rbi">
                                  <input type="hidden" value="<?php echo $uemail?>"name="uemail">   
                                  <input type="hidden" value="<?php echo $ufullname?>"name="uname">   
                                  <input type="submit" value="Submit" name="bns-sumbit">
                              </div>
                        </form>
                      </div>
                  </div>
              </div>

                </div>
              </div>
            </div>
          </div>

