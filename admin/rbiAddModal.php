<div class="modal fade" id="addUser">
      <form method="POST" enctype="multipart/form-data" action="rbiAdd.php">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-plus-circle"></i>
                         Resident Barangay Inhabitant
                    </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="fn">RBI No.: <span style="color:red;">*</span></label>
                                         <input type="number" class="form-control"  id="rbi_no" name="rbi_no" placeholder="Enter RBI" size="100" autofocus required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="fn">Tenant/Owner: <span style="color:red;">*</span></label>
                                        <select class="form-control" name="tenantOwner" required>
                                            <option value="" disabled selected>Select. . .</option>
                                            <option value="Tenant">Tenant</option>
                                            <option value="Owner">Owner</option>
                                        </select>
                                    </div>

                                </div>
                                <hr>

                                <div class="row">
                                    <div   div class="form-group col-sm-4">
                                        <label for="fn">First Name: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" class="form-control" id="full_name" name="firstname" placeholder="First Name" size="100" autofocus required>
                                    </div>
                        
                                    <div class="form-group col-sm-4">
                                        <label for="fn">Middle Name: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control"  name="middlename" placeholder="Middle Name"  autofocus required>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="fn">Last Name: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control"  name="lastname" placeholder="Last Name."  autofocus required>
                                    </div>
                                </div>


                                <!-- <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="fn">Full Name: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" class="form-control" id="full_name" name="full_name" placeholder="Full Name" size="100" autofocus required>
                                    </div>
                        

                                    <div class="form-group col-sm-4">
                                        <label for="fn">Family No.: <span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" id="cnumber" name="cnumber" placeholder="Enter Family No."  autofocus required>
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="fn">Date of Birth: <span style="color:red;">*</span></label>
                                        <input type="date" class="form-control" id="birth_date" name="birth_date"  autofocus required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="password">Birth Place: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="birth_place" name="birth_place" placeholder="Enter Birth Place" required>
                                     </div>
                                     <div class="form-group col-sm-4">
                                        <label for="fn">Gender: <span style="color:red;">*</span></label>
                                        <select class="form-control" name="gender" required>
                                            <option value="" disabled selected>Select. . .</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>

                                    
                            
                                </div>

                                
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                            <label for="fn">Civil Status: <span style="color:red;">*</span>
                                            </label>
                                        <select class="form-control" name="civil_status">
                                                <option value="" disabled selected>Select. . .</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="fn">Voter Status: <span style="color:red;">*</span>
                                                </label>
                                            <select class="form-control" name="voter_status" required>
                                                    <option value="" disabled selected>Select. . .</option>
                                                    <option value="Registered">Registered</option>
                                                    <option value="Not-registered">Not registered</option>
                                                </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="fn">Educational Attainment <span style="color:red;">*</span>
                                                </label>
                                            <select class="form-control" name="educ" required>
                                                    <option value="" disabled selected>Select. . .</option>
                                                    <option value="Registered">No Educational</option>
                                                    <option value="Elementary Undergraduate">Elementary Undergraduate</option>
                                                    <option value="Elementary Graduate">Elementary Graduate</option>
                                                    <option value="Highschool Underaduate">Highschool Underaduate</option>
                                                    <option value="Highschool Graduate">Highschool Graduate</option>
                                                    <option value="College Underaduate">College Underaduate</option>
                                                    <option value="College Graduate">College Graduate</option>
                                                </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="fn">Occupation: <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" class="form-control" name="occupation" placeholder="Enter occupation" size="100" autofocus >
                                        </div>
                                        <!-- <div class="form-group col-sm-4">
                                            <label for="text">Address: <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required>
                                        </div> -->
                                

                                </div>
                                <hr>

                                <div class="row">

                                    
                                    
                                    <div class="form-group col-sm-6">
                                        <label for="fn">Address: <span style="color:red;">*</span></label>
                                        <input type="tel" class="form-control"  id="rbi_no" name="streetno" placeholder="Enter Address " size="100" autofocus required>
                                    </div>
                               
                                    <!-- <div class="form-group col-sm-4">
                                        <label for="fn">Family No.: <span style="color:red;">*</span></label>
                                        <input type="tel" class="form-control"  id="rbi_no" name="familyNo" placeholder="Enter Family No" size="100" autofocus required>
                                    
                                    </div> -->
                                    <!-- <div class="form-group col-sm-4">
                                        <label for="fn">Household No.: <span style="color:red;">*</span></label>
                                            <input type="number" class="form-control" class="form-control" id="house_hold_no" name="house_hold_no" placeholder="Enter Household No." size="100" autofocus required>
                                    </div> -->

                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer">
                  <div class="btn-group">
                  <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="addRbidecrement();"><i class="fa fa-times"></i> Close</button>
                  <button type="submit" class="btn btn-primary" name="btn_rbi"><i class="fa fa-check"></i> Submit</button>
                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>

      <script>


<?php
    $query = mysqli_query($conn, "SELECT MAX(rbi_id) AS largest FROM rbi_tenant;");
    $row = mysqli_fetch_array($query);
    $largest = $row["largest"];


 ?>
var i = <?php echo $largest;?>;
function addRbi() {
    document.getElementById('rbi_no').value = ++i;
}
function addRbidecrement() {
    document.getElementById('rbi_no').value = --i;
}
</script>


