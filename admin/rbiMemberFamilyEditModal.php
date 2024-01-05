<div class="modal fade" id="edit<?php echo $id?>">
<div class="enabledForm">
    
    <form method="POST" enctype="multipart/form-data" action="rbiMemberFamilyEdit.php" class="rbiFamilyEdit">
      <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header bg-dark">
                  <h5 class="modal-title text-center">
                      <i class="fa fa-edit"></i>
                       Family Member
                  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" style="color: white">&times;</span>
                </button>
              </div>
              <div class="card card-primary">
                <!-- form start -->
                  <div class="card-body">
                      <div  class="row" style="color:black;">
                      <input name="id" type="hidden" value="<?php echo $id ?>"/>
                      <input name="rbi" type="hidden" value="<?php echo $rbi ?>"/>
                      <input type="hidden" name="family_no" value="<?php echo $fam_no?>">
                          <div class="col-sm-12">
                              <div class="row">
                                  <div class="form-group col-sm-4">
                                      <label for="text">RBI: <span style="color:red;">*</span></label>
                                      <input type="number" class="form-control" value="<?php echo $row['rbi_id']?>" readonly >
                                  </div>

                                  <div class="form-group col-sm-4">
                                      <label for="fn">Family ID: <span style="color:red;">*</span></label>
                                      <input type="text" class="form-control" placeholder="Enter Family No." value="<?php echo $row['rbi_id'].'-'.$row['family_no'];?>" required readonly >
                                  </div>
                               
                                  <div class="form-group col-sm-4">
                                      <label for="text">Resident ID: <span style="color:red;">*</span></label>
                                      <input type="text" class="form-control" id="" value="<?php echo $residentNo;?>" readonly name="residentId">
                                  </div>
                                 
                              </div>
                              <hr>

                              <div class="row">
                                  <div class="form-group col-sm-4">
                                      <label for="fn">First Name: <span style="color:red;">*</span></label>
                                       <input type="text" class="form-control" name="fname" value="<?php echo $row['firstname']?>" size="100" readonly>
                                  </div>
                                  <div class="form-group col-sm-4">
                                      <label for="fn">Middle Name.: <span style="color:red;">*</span></label>
                                      <input type="text" class="form-control" id="cnumber" name="mname" placeholder="Enter Family No." value="<?php echo $row['middlename'];?>" required readonly>
                                  </div>
                                   <div class="form-group col-sm-4">
                                      <label for="fn">Last Name: <span style="color:red;">*</span></label>
                                       <input type="text" class="form-control" class="form-control" name="lname" value="<?php echo $row['lastname']?>" size="100" readonly>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="form-group col-sm-4">
                                      <label for="text">Birth Place: <span style="color:red;">*</span></label>
                                      <input type="text" class="form-control" id="birth_place" name="birth_place" value="<?php echo $row['birth_place']?>" readonly>
                                  </div>
                                  <div class="form-group col-sm-4">
                                      <label for="date">Birth Date: <span style="color:red;">*</span></label>
                                      <input type="date" class="form-control" id="birth_date" name="birth_date" value="<?php echo $row['birth_date']?>" readonly>
                                  </div>
                                  <div class="form-group col-sm-4">
                                      <label for="text">Gender: <span style="color:red;">*</span></label>
                                      <select class="form-control" name="gender" readonly>
                                          <option vvalue="<?php echo $row['gender']?>" readonly><?php echo $row['gender']?></option>
                                          <option value="Male">Male</option>
                                          <option value="Female">Female</option>
                                      </select>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="form-group col-sm-4">
                                      <label for="date">Civil Status: <span style="color:red;">*</span></label>
                                      <select class="form-control" name="civil_status" readonly>
                                          <option value="<?php echo $row['civil_status']?>"><?php echo $row['civil_status']?></option>
                                          <option value="Single">Single</option>
                                          <option value="Married">Married</option>
                                      </select>
                                  </div>

                                  <div class="form-group col-sm-4">
                                      <label for="cn">Voter Status: <span style="color:red;">*</span></label>
                                      <select class="form-control" name="voter_status" readonly>
                                      <option selected value="<?php echo $row['voter_status']?>"><?php echo $row['voter_status']?></option>
                                        <option value="Registered">Registered</option>
                                        <option value="Not-registered">Not-registered</option>
                                      </select>
                                  </div>

                                  
                                  <div class="form-group col-sm-4">
                                      <label for="text">Occupation: <span style="color:red;">*</span></label>
                                      <input type="text" class="form-control" id="occupation" name="occupation" value="<?php echo $row['occupation']?>" readonly>
                                  </div>

                                  
                              
                              </div>

                             
                              
                              <div class="row">
                                
                             
                                  <div class="form-group col-sm-6">
                                      <label for="text">Address: <span style="color:red;">*</span></label>
                                      <input type="text" class="form-control" value="<?php echo $row['street']?>" readonly>

                                      
                                  </div>
                                
                              

                               

                               
                              </div>
                              <hr>

                              <div class="row">
                              <div class="form-group col-sm-4">
                                      <label for="date">Status: <span style="color:red;">*</span></label>
                                      <select class="form-control" name="status" readonly>
                                          <option  selected value="<?php echo $row['status']?>" ><?php echo $row['status']?></option>
                                          <option value="Active" >Active</option>
                                          <option value="Transferred">Transferred</option>
                                          <option value="Deceased">Deceased</option>
                                      </select>
                                  </div>
                              </div>
                       
                          </div>
                      </div>
                  </div>
                  <!-- /.card-body -->
                </div>
              <div class="modal-footer">
                <div class="btn-group">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                <button type="button" class="btn btn-primary edit-btn" data-target='edit<?php echo $id;?>'> Edit</button>
                <!-- <button type="submit" class="btn btn-primary" name="btn_edit"><i class="fa fa-check"></i> Submit</button> -->
                </div>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </form>
</div>

        <div class="disabledForm" style="display: none">
            <form method="POST" enctype="multipart/form-data" action="rbiMemberFamilyEdit.php" >
            <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <h5 class="modal-title text-center">
                            <i class="fa fa-edit"></i>
                             Family Member
                        </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white">&times;</span>
                      </button>
                    </div>
                    <div class="card card-primary">
                      <!-- form start -->
                        <div class="card-body">
                            <div  class="row" style="color:black;">
                            <input name="id" type="hidden" value="<?php echo $id ?>"/>
                            <input name="rbi" type="hidden" value="<?php echo $rbi ?>"/>
                            <input type="hidden" name="family_no" value="<?php echo $fam_no?>">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label for="text">RBI: <span style="color:red;">*</span></label>
                                            <input type="number" class="form-control" value="<?php echo $row['rbi_id']?>" readonly >
                                        </div>
    
                                        <div class="form-group col-sm-4">
                                            <label for="fn">Family ID: <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter Family No." value="<?php echo $row['rbi_id'].'-'.$row['family_no'];?>" required readonly >
                                        </div>
                                     
                                        <div class="form-group col-sm-4">
                                            <label for="text">Resident ID: <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" id="" value="<?php echo $residentNo;?>" readonly name="residentId">
                                        </div>
                                       
                                    </div>
                                    <hr>
    
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label for="fn">First Name: <span style="color:red;">*</span></label>
                                             <input type="text" class="form-control" name="fname" value="<?php echo $row['firstname']?>" size="100">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="fn">Middle Name.: <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" id="cnumber" name="mname" placeholder="Enter Family No." value="<?php echo $row['middlename'];?>" required>
                                        </div>
                                         <div class="form-group col-sm-4">
                                            <label for="fn">Last Name: <span style="color:red;">*</span></label>
                                             <input type="text" class="form-control" class="form-control" name="lname" value="<?php echo $row['lastname']?>" size="100" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label for="text">Birth Place: <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" id="birth_place" name="birth_place" value="<?php echo $row['birth_place']?>">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="date">Birth Date: <span style="color:red;">*</span></label>
                                            <input type="date" class="form-control" id="birth_date" name="birth_date" value="<?php echo $row['birth_date']?>">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="text">Gender: <span style="color:red;">*</span></label>
                                            <select class="form-control" name="gender">
                                                <option vvalue="<?php echo $row['gender']?>" readonly><?php echo $row['gender']?></option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label for="date">Civil Status: <span style="color:red;">*</span></label>
                                            <select class="form-control" name="civil_status">
                                                <option value="<?php echo $row['civil_status']?>"><?php echo $row['civil_status']?></option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                            </select>
                                        </div>
    
                                        <div class="form-group col-sm-4">
                                            <label for="cn">Voter Status: <span style="color:red;">*</span></label>
                                            <select class="form-control" name="voter_status">
                                            <option selected value="<?php echo $row['voter_status']?>"><?php echo $row['voter_status']?></option>
                                              <option value="Registered">Registered</option>
                                              <option value="Not-registered">Not-registered</option>
                                            </select>
                                        </div>
    
                                        
                                        <div class="form-group col-sm-4">
                                            <label for="text">Occupation: <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" id="occupation" name="occupation" value="<?php echo $row['occupation']?>">
                                        </div>
    
                                        
                                    
                                    </div>
    
                                   
                                    
                                    <div class="row">
                                      
                                   
                                        <div class="form-group col-sm-6">
                                            <label for="text">Address: <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" value="<?php echo $row['street']?>" readonly>
    
                                            
                                        </div>
                                      
                                    
    
                                     
    
                                     
                                    </div>
                                    <hr>
    
                                    <div class="row">
                                    <div class="form-group col-sm-4">
                                            <label for="date">Status: <span style="color:red;">*</span></label>
                                            <select class="form-control" name="status">
                                                <option  selected value="<?php echo $row['status']?>" ><?php echo $row['status']?></option>
                                                <option value="Active" >Active</option>
                                                <option value="Transferred">Transferred</option>
                                                <option value="Deceased">Deceased</option>
                                            </select>
                                        </div>
                                    </div>

                                    <hr>
    
                                    <div class="row">
                                    <div class="form-group col-sm-4">
                                            <label for="date">Password: <span style="color:red;">*</span></label>
                                            <input type="password" class="form-control" name="pwd">
                                        </div>
                                    </div>
                             
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                    <div class="modal-footer">
                      <div class="btn-group">
                      <button type="button" class="btn btn-warning edit-btn" data-target='edit<?php echo $id;?>' style="margin-right: 3px;" data-dismiss="modal"> Cancel</button>
                      <button type="submit" class="btn btn-primary" name="btn_edit"><i class="fa fa-check"></i> Submit</button>
                      </div>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </form>
        </div>
        
      </div>