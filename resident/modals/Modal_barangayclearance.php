<div class="modal fade" id="brgyclearance" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style=" color: #4c6085;">
                  <h5 class="modal-title" id="exampleModalLabel">BARANGAY CLEARANCE</h5>
                </div>
                <div class="modal-body">

             
                <?php
 
                    $id =  $_SESSION["usersid"];
                    $sql = "SELECT * FROM user_account WHERE id ='$id'";
                    $result = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                          
                            $fullname = $row['ufullname'];
                            $email = $row['uemail'];
                            $rbi = $row['urbi'];
                            $address = $row['address'];
                            $household = $row['uhouseholdno'];
                            $contactno = $row['ucontactno'];
                            $sex = $row['gender'];
                            $voter = $row['voter'];
                        }
                    }
                    ?>
                        <div class="content" style="padding: 25px 25px 5px !important; background: white;">

                        <!-- <h2> Barangay Clearance</h2> -->
                            <!-- <div class="item">
                                <h3>Requirements</h3>
                                <ol class="details">
                                    <li>Application Form.</li>
                                    <li>Application Fee.</li>
                                    <li>Any valid ID.</li>
                                </ol>
                            </div> -->
                            <div class="item">
                                <!-- <h3>Steps</h3> -->
                                <ol class="details">
                                    <li>Fill out the following.</li>
                                    <li>Submit the filled out form and wait for the barangay confirmation via email.</li>
                                    <li>After you recieve an email from Barangay, go to the Barangay Hall.</li>
                                    <li>Porceed to the cashier and pay for the assessed fees.</li>
                                    <li>Present your ID.</li>
                                    <li>Wait for your document to be released.</li>
                                </ol>
                            </div>
                            <br>
                            <div class="item" >
                          
                   
                            <hr style="border-top: .1px solid #e9ecef;">
                                <div class="form">


                                    <form action="includes/brgyclearance.inc.php"  method="post">
    
    
                                        <input type="hidden" value="<?php echo $household;?>"name="household">
                                        <input type="hidden" value="brgyclearance" name="application">
                                     
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="Fullname">Fullname <i class="fas fa-check"></i> </label>
                                                <input type="text" class="form-control" id="Fullname" value="<?php echo $fullname;?>" name="fullname" readonly style="background: white;">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="RBI">RBI No. <i class="fas fa-check"></i></label>
                                                <input type="text" class="form-control" id="RBI" value="<?php echo $rbi;?>"name="rbi" readonly style="background: white;">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="Household">Contact No. <i class="fas fa-check"></i></label>
                                                <input type="tel" class="form-control" id="Household" value="0<?php echo $contactno?>"  name="contactno"style="background: white;">
                                            </div>
                                        </div>
    
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="inputAddress">Address <i class="fas fa-check"></i></label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" value="<?php echo $address;?>" readonly style="background: white;">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="Sex">Sex <i class="fas fa-check"></i></label>
                                                <input type="text" class="form-control" id="Sex"  value="<?php echo $sex;?>"name="sex" readonly style="background: white;">

                                               
                                               
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="Voter">Voter <i class="fas fa-check"></i></label>
                                                <input type="text" class="form-control" id="Voter"  value="<?php echo $voter;?>"name="voter" readonly style="background: white;">
                                            </div>
                                        </div>
    
                                        <div class="form-group">
                                            <label for="Purpose">Purpose <i class="fas fa-edit"></i></label>
                                            <textarea class="form-control" id="Purpose" rows="3" required name="purpose" autofocus></textarea>
                                        </div>
                                        <br>

                                        <hr style="border-top: 1px solid #e9ecef;">

                                            <div style="padding: .1em 1.4em">
                                            <h4>Mode of Payment</h4>
                                            <div class="form-check" style="padding-left: 1.5rem;">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="bbpickup" checked>
                                                <label class="form-check-label" for="flexRadioDefault1" style="margin-left: -.5px;">
                                                    Pick up
                                                </label>
                                                </div>
                                                <div class="form-check" style="padding-left: 1.5rem;">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"   >
                                                <label class="form-check-label" for="flexRadioDefault2" style="margin-left: -.5px;" id="bbgcash">
                                                Delivery
                                                </label>
                                                </div>
                                            </div>




                                            <hr style="border-top: 1px solid #e9ecef;">
    
                                        <div class="btn" style="margin: 0 !important; padding: 0">
                                                <a  id="close-btn" data-bs-dismiss="modal">Close</a>
                                                <input type="hidden" value="<?php echo $rbi;?>"name="rbi">
                                                <input type="hidden" value="<?php echo $email;?>"name="email">
                                                <input type="hidden" name="address" value="<?php echo $address;?>">
                                                <input type="hidden" value="<?php echo $contactno;?>"name="contactno">
                                                <input type="hidden" name="applicationId" value="<?php echo $id;?>">
                                                <input type="submit" value="Submit" name="submit">
                                            </div>
                                    </form>
                                </div>


                            </div>
                        </div>


                </div>
              </div>
            </div>
          </div>
   
