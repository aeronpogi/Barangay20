<div class="modal fade" id="indigency" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel" style=" color: #4c6085;">Certificate Of indigency</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <?php
 
                    $id =  $_SESSION["usersid"];
                    $rbi = $_SESSION["userrbi"];
                    $sql = "SELECT * FROM user_account WHERE id ='$id'";
                    $result = mysqli_query($conn, $sql);

                        while($row = mysqli_fetch_assoc($result)) {
                          
                            $usersFullname = $row['ufullname'];
                            //  $ustreename = $row['ustreename'];
                            $address = $row['address'];
                            $usersEmail = $row['uemail'];
                            $cnumber = $row['ucontactno'];
                            
                        
                    }
                    ?>
                        <div class="content">
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

                            <hr style="border-top: .1px solid #e9ecef;">
                            <div class="item">
                                <div class="form">
                         

                                    
                                    <form action="includes/indigency.inc.php"  method="post">
    
    
                                        <input type="hidden" value="<?php echo $household;?>"name="household">
                                        <input type="hidden" value="brgyclearance" name="application">
                                     
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="Fullname">Fullname <i class="fas fa-check"></i></label>
                                                <input type="text" class="form-control" id="Fullname" value="<?php echo $fullname;?>" name="usersFullname"readonly style="background: white;">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="RBI">RBI No. <i class="fas fa-check"></i></label>
                                                <input type="text" class="form-control" id="RBI" value="<?php echo $rbi;?>"name="rbi" readonly style="background: white;">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="Household">Contact No. <i class="fas fa-check"></i></label>
                                                <input type="tel" class="form-control" id="Household" value="0<?php echo $contactno?>"  name="cnumber"style="background: white;">
                                            </div>
                                        </div>
    
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="inputAddress">Address <i class="fas fa-check"></i></label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address"  value="<?php echo $address;?>" readonly style="background: white;">
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
                                            <textarea class="form-control" id="Purpose" rows="3" required name="usersPurpose" autofocus></textarea>
                                        </div>
    
                                        
                            <br>
                                        <div class="btn" style="margin: 0 !important; padding: 0">
                                                <a  id="close-btn" data-bs-dismiss="modal">Close</a>
                                                <input type="hidden" value="<?php echo $rbi;?>"name="rbi">
                                                <input type="hidden" value="<?php echo $email;?>"name="usersEmail">
                                                <input type="hidden" name="address" value="<?php echo $address;?>">
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