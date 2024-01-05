<div class="modal fade" id="complaints" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style=" color: #4c6085;">
                  <h5 class="modal-title" id="exampleModalLabel">Complain</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="content">
                    <?php
        
                        $id =  $_SESSION["usersid"];
                        $sql = "SELECT * FROM user_account WHERE ID ='$id'";
                        $result = mysqli_query($conn, $sql);
    

                  
                        if(mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                            
                                // $firstname = $row['firstName'];
                                // $middlename = $row['middleName'];
                                // $lastname = $row['lastName'];
    
                                // $fullname = $firstname." ".$lastname;
                                // $address = $row['usersAddress'];
                                $uemail = $row['uemail'];
                                $ufullname = $row['ufullname'];
                                $urbi = $row['urbi'];
                                $contatno = $row['ucontactno'];
                            }
                        }
                    ?>
                    <div class="complaints-container" style="padding: none !important">
                        <!-- <div class="complaints-header">Complaint</div> -->
                        <!-- <h2>Complaint</h2> -->
             
    
                        <form action="includes/complaints.inc.php" method="post">
    


                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Narration </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="narration" placeholder="Type of complain (e.g. Littering)">
                          </div>
                          <br>
    
                          <div class="mb-3">
                            <textarea class="form-control" aria-label="With textarea" name="details" placeholder="Please narrate your concern here..." rows="4"></textarea>
                          </div>

                          <input type="hidden" name="complaintId" value="<?php echo $id;?>">
                          <input type="hidden" name="email" value="<?php echo $uemail;?>">
                          <input type="hidden" name="fullname" value="<?php echo $ufullname;?>">
                          <input type="hidden" name="urbi" value="<?php echo $urbi;?>">
                          <input type="hidden" name="contatno" value="<?php echo $contatno;?>">
                          <input type="hidden" name="residentId" value="<?php echo $residentId;?>">
                  
                          <button type="submit" class="btn btn-primary"  name="submit" style="float: right">Submit</button>
                          <br>


                         
                        </form>
                        


                        
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>