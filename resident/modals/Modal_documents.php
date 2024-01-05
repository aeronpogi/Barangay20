
          <div class="modal fade" id="modalDocu" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style=" color: #4c6085;">
                  <h5 class="modal-title" id="exampleModalLabel">Document Request</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
  
                <div class="content" style="background-color: white">

                
              
        <!-- <div class="brgy-modal-close">&times;</div> -->
                  
                  <?php
                  
                  $query = mysqli_query($conn, "SELECT * FROM content");
                  
                  $row = mysqli_fetch_array($query);
                  $barangayclearanceFee = $row["barangay_clearance"];
                  $businessclearanceFee = $row["business_clearance"];
                  $indigency = $row["indigency"];
                  $delivery = $row["delivery_fee"];
                  ?>
                
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
                      $address = $row['street'];
                      $residentId = $row['residentId'];
                        }
                  ?>
              
              <hr style="border-top: 1px solid #e9ecef;">

              <div class="item">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Fullname">Requestor <i class="fas fa-check"></i> </label>
                        <input type="text" class="form-control" id="Fullname" value="<?php echo $fullname;?>" name="fullname" readonly style="background: white;">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="RBI">Permit Type <i class="fas fa-edit"></i></label>
                        <select class="form-select" aria-label="Default select example" id="permitType">
                            <option selected disabled>Choose...</option>
                            <option value="1">Barangay Clearance</option>
                            <option value="2">Business Clearance</option>
                            <option value="3">Certificate of Indigency</option>
                            <!-- <option value="4">Travel Authorization</option> -->
                        </select>
                    </div>
                  
                </div>

                <div id="brgyClearance" style="display: none">

                    <div class="form">
                        
                        <form action="includes/brgyclearance.inc.php"  method="post" enctype="multipart/form-data">
        
                        <?php 
                              $rbi = $_SESSION["userrbi"];
                          ?>
                   
                            <input type="hidden" value="<?php echo $household;?>"name="household">
                            <input type="hidden" value="brgyclearance" name="application">
                        
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <!-- <label for="Fullname">Fullname <i class="fas fa-check"></i> </label> -->
                                    <input type="hidden" class="form-control" id="Fullname" value="<?php echo $fullname;?>" name="fullname" readonly style="background: white;">
                                </div>
                                <div class="form-group col-md-3">
                                    <!-- <label for="RBI">RBI No. <i class="fas fa-check"></i></label> -->
                                    <input type="hidden" class="form-control" id="RBI" value="<?php echo $rbi;?>"name="rbi" readonly style="background: white;">
                                </div>
                                <div class="form-group col-md-3">
                                    <!-- <label for="Household">Contact No. <i class="fas fa-check"></i></label> -->
                                </div>
                            </div>
    
                            <div class="form-row">
                                
                                <div class="form-group col-md-3">
                                    <!-- <label for="Sex">Sex <i class="fas fa-check"></i></label> -->
                                    <input type="hidden" class="form-control" id="Sex"  value="<?php echo $sex;?>"name="sex" readonly style="background: white;">
    
                                
                                
                                </div>
                                <div class="form-group col-md-3">
                                    <!-- <label for="Voter">Voter <i class="fas fa-check"></i></label> -->
                                    <input type="hidden" class="form-control" id="Voter"  value="<?php echo $voter;?>"name="voter" readonly style="background: white;">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label for="Purpose">Purpose <i class="fas fa-edit"></i></label>
                                <textarea class="form-control" id="Purpose" rows="3" required name="purpose" autofocus></textarea>
                            </div>
                            <br>
    
                            <hr style="border-top: 1px solid #e9ecef;">
 
                            <span style="font-weight: 450; font-size: 16px; font-weight: bold; color: #4c6085" class="fee">Fee: Php <?php echo $barangayclearanceFee;?></span> <br>
                            <hr style="border-top: 1px solid #e9ecef;">
                            
    
                            <h4>Type of claim</h4>

                                <div class="form-check" style="padding-left: 1.5rem;">
                                    <input class="form-check-input" type="radio" name="pickup" id="walkin" checked value="Walk in">
                                    <label class="form-check-label" for="pickup" style="margin-left: -.5px;">
                                        Walk in 
                                    </label>
                                    </div>
                                    <div class="form-check" style="padding-left: 1.5rem;">
                                    <input class="form-check-input" type="radio" name="pickup" id="delivery" value="Delivery" >
                                    <label class="form-check-label" for="flexRadioDefault" style="margin-left: -.5px;">
                                    Delivery
                                    </label>
                                </div>
                         

                                <div class="form-group row" id="paymentForm" style="display: none">
                                    <hr style="border-top: 1px solid #e9ecef;">
                                    <div class="col-sm-6 member-data">
                                        <!-- <span style="font-weight: 450; font-size: 16px; font-weight: bold; color: #4c6085" class="fee">  Fee: 500</span> <br> -->
                                        <span style="font-weight: 450; font-size: 14px">Gcash Name: <?php echo $gName;?></span><br>
                                        <span style="font-weight: 450; font-size: 14px; ">Gcash Number: <?php echo $gNumber;?></span><br>
                                        <img style="width: 100px; margin: 15px 0;" src="gcash/<?php echo $qrCode;?>">
                                    </div>
                                    <div class="col-sm-6 member-data">
                                        <label style="font-weight: 450;">Please upload your Gcash receipt.</label><br>
                                        <!-- <input type="file" name="receiptImg" class="form-control form-control-sm"> -->
                                        <input type="file" class="form-control" id="img" name="img" >
                                    </div>		
                                </div>
                              
    
    
    
                                <hr style="border-top: 1px solid #e9ecef;">
    
                            <div class="btn" style="margin: 0 !important; padding: 0">
                                    <a  id="close-btn" data-bs-dismiss="modal">Close</a>
                                    <input type="hidden" value="<?php echo $rbi;?>"name="rbi">
                                    <input type="hidden" value="<?php echo $uemail;?>"name="email">
                                    <input type="hidden" name="address" value="<?php echo $address;?>">
                                    <input type="hidden" value="<?php echo $contact;?>"name="contactno">
                                    <input type="hidden" name="applicationId" value="<?php echo $id;?>">
                                    <input type="hidden" name="residentId" value="<?php echo $residentId;?>">
                                    <input type="submit" value="Submit" name="submit">
                                </div>
                        </form>
                    </div>
                        
                    </div>
              </div>


              <div id="businessClearance" style="display: none">
             
                      <form action="includes/bsnsclearance.inc.php" method="post">
                          <?php 
                              $rbi = $_SESSION["userrbi"];
                          ?>
                   
                             <div class="element" style="margin-bottom: 16px">
                                  <label style="font-weight: 450;">Business Name <i class="fas fa-edit"></i></label></label> 
                                  <input type="text" name="businessName"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                              </div>
                            
                        
               

                              <div class="element" style="margin-bottom: 16px">

                                <label for="RBI">Business Type <i class="fas fa-edit"></i></label>
                                <select class="form-select" name="businessType" aria-label="Default select example" id="permitType">
                                    <option selected disabled>Choose...</option>
                                    <option value="Sole Proprietership">Sole Proprietership</option>
                                    <option value="Parntership">Parntership</option>
                                    <option value="Corpoate">Corpoate</option>
                                  
                                </select>
                              </div>
                        
                              
                              <div class="element" style="margin-bottom: 16px">
                              <label style="font-weight: 450;"> Business Address <i class="fas fa-edit"></i></label></label>
                                  <input type="text" name="businessAddress"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                              </div>

                              <!-- <div class="element" style="margin-bottom: 16px">
                                  <label style="font-weight: 450;"> Owner/Proprietor <i class="fas fa-edit"></i></label></label>
                                  <input type="text" name="owner"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                              </div> -->
                        
                              <br>
                              
                              <hr style="border-top: 1px solid #e9ecef;">
                              <div>
                                <span style="font-weight: 450; font-size: 16px; font-weight: bold; color: #4c6085" id="fee">  Fee: </span>This varies according to the scope of your business <br>
                              </div> 

                              <hr style="border-top: 1px solid #e9ecef;">

                              <div>
                                  <h4>Type of claim</h4>
                                  <div class="form-check" style="padding-left: 1.5rem;">
                                      <input class="form-check-input" type="radio" name="pickup" id="bpickup" value="walk in" checked>
                                      <label class="form-check-label" for="flexRadioDefault1" style="margin-left: -.5px;">
                                          Walk in (Only)
                                      </label>
                                      </div>
                                  
                                  </div>
                         

                            
                   

    

                              <hr style="border-top: 1px solid #e9ecef;">
                              <br>

                              <div class="form">

                                  <div class="btn" style="padding: 0">
                                      <a id="close-btn" data-bs-dismiss="modal">Close</a>
                                      <input type="hidden" name="applicationId" value="<?php echo $id;?>">
                                      <input type="hidden" name="contact" value="<?php echo $contact;?>" >
                                      <input type="hidden" value="<?php echo $rbi?>"name="rbi">
                                      <input type="hidden" value="<?php echo $uemail?>"name="uemail">   
                                      <input type="hidden" value="<?php echo $ufullname?>"name="uname">   
                                      <input type="hidden" name="residentId" value="<?php echo $residentId;?>">
                                      <input type="submit" value="Submit" name="bns-sumbit">
                                  </div>
                              </div>
                        </form>
                  
              </div>


            <div id="indingency" style="display: none">
                <form action="includes/indigency.inc.php"  method="post" enctype="multipart/form-data" style="margin-top: -30px">
        
                    
                    <input type="hidden" value="<?php echo $household;?>"name="household">
                    <input type="hidden" value="brgyclearance" name="application">
                
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <!-- <label for="Fullname">Fullname <i class="fas fa-check"></i></label> -->
                            <input type="hidden" class="form-control" id="Fullname" value="<?php echo $fullname;?>" name="usersFullname"readonly style="background: white;">
                        </div>
                        <div class="form-group col-md-3">
                            <!-- <label for="RBI">RBI No. <i class="fas fa-check"></i></label> -->
                            <input type="hidden" class="form-control" id="RBI" value="<?php echo $rbi;?>"name="rbi" readonly style="background: white;">
                        </div>
                        <div class="form-group col-md-3">
                            <!-- <label for="Household">Contact No. <i class="fas fa-check"></i></label> -->
                            <input type="hidden" class="form-control" id="Household" value="0<?php echo $contactno?>"  name="cnumber"style="background: white;">
                        </div>
                    </div>

                    <div class="form-row">
                            <div class="form-group col-md-6">
                        <!-- <label for="inputAddress">Address <i class="fas fa-check"></i></label> -->
                            <input type="hidden" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address"  value="<?php echo $address;?>" readonly style="background: white;">
                            </div>
                            <div class="form-group col-md-3">
                                <!-- <label for="Sex">Sex <i class="fas fa-check"></i></label> -->
                                <input type="hidden" class="form-control" id="Sex"  value="<?php echo $sex;?>"name="sex" readonly style="background: white;">
                            </div>
                            <div class="form-group col-md-3">
                                <!-- <label for="Voter">Voter <i class="fas fa-check"></i></label> -->
                                <input type="hidden" class="form-control" id="Voter"  value="<?php echo $voter;?>"name="voter" readonly style="background: white;">
                            </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="Purpose">Purpose <i class="fas fa-edit"></i></label>
                        <textarea class="form-control" id="Purpose" rows="3" required name="purpose" autofocus></textarea>
                    </div>

                    <br>
                    <hr style="border-top: 1px solid #e9ecef;">
                    <span style="font-weight: 450; font-size: 16px; font-weight: bold; color: #4c6085" class="fee">  Fee: Php <?php echo $indigency;?></span> <br>
                    <hr style="border-top: 1px solid #e9ecef;">

                    <h4>Type of claim</h4>

                        <div class="form-check" style="padding-left: 1.5rem;">
                            <input class="form-check-input" id="walkinIndigency" type="radio" name="pickupIndigency" checked value="walk in">
                            <label class="form-check-label" for="pickup" style="margin-left: -.5px;">
                                Walk in 
                            </label>
                            </div>
                            <div class="form-check" style="padding-left: 1.5rem;">
                            <input class="form-check-input deliveryIndigency" type="radio" name="pickupIndigency" value="Delivery" >
                            <label class="form-check-label" for="flexRadioDefault" style="margin-left: -.5px;">
                            Delivery
                            </label>
                        </div>



                        <div class="form-group row paymentForm"  style="display: none">
                            <hr style="border-top: 1px solid #e9ecef;">
                            <div class="col-sm-6 member-data">
                                <!-- <span style="font-weight: 450; font-size: 16px; font-weight: bold; color: #4c6085" class="fee">  Fee: 500</span> <br> -->
                                <span style="font-weight: 450; font-size: 14px">Gcash Name: <?php echo $gName;?></span><br>
                                <span style="font-weight: 450; font-size: 14px; ">Gcash Number: <?php echo $gNumber;?></span><br>
                                <img style="width: 100px; margin: 15px 0;" src="gcash/<?php echo $qrCode;?>">
                            </div>
                            <div class="col-sm-6 member-data">
                                <label style="font-weight: 450;">Please upload your Gcash receipt.</label><br>
                                <!-- <input type="file" name="receiptImg" class="form-control form-control-sm"> -->
                                <input type="file" class="form-control" id="img" name="img" >
                            </div>		
                        </div>
                        <hr style="border-top: 1px solid #e9ecef;">
                <br>

                <div class="form">

                    <div class="btn" style="margin: 0 !important; padding: 0">
                            <a  id="close-btn" data-bs-dismiss="modal">Close</a>
                            <input type="hidden" value="<?php echo $rbi;?>"name="rbi">
                            <input type="hidden" value="<?php echo $email;?>"name="usersEmail">
                            <input type="hidden" name="address" value="<?php echo $address;?>">
                            <input type="hidden" name="applicationId" value="<?php echo $id;?>">
                            <input type="hidden" name="residentId" value="<?php echo $residentId;?>">
                            <input type="submit" value="Submit" name="submit">
                        </div>
                </div>
                </form>
            </div>


  


     
              </div>

                </div>
              </div>
            </div>
          </div>

