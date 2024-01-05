<?php 
$id = $_GET['id'];

$familyNo = $_GET['familyNo']; 

include("include/connect.php");




?>



<div class="modal fade" id="addTenant">
      <form method="POST" enctype="multipart/form-data" action="rbiMemberFamilyAdd.php">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-plus-circle"></i>
                       Family Member
                    </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="familyDec()">
                    <span aria-hidden="true" style="color: white">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            <input type="hidden" class="form-control"  name="rbi_id" value="<?php echo $id ?>" autofocus required>
                            <div class="col-sm-12">

                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="text">RBI: <span style="color:red;">*</span></label>
                                        <input type="tel" class="form-control"  name="rbi_id" value="<?php echo $id;?>" readonly >
                                    </div>
                               
                                    <input type="hidden" name="family_no" value="<?php echo $fam_no;?>">


                                    <input type="hidden" name="residentno" id="rnumber" value="">

                                    <div class="form-group col-sm-4">
                                        <!-- <label for="fn">Resident No.: <span style="color:red;">*</span></label> -->
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="fn">First Name: <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control" name="fname" required placeholder="First Name" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="fn">Middle Name.: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control"  name="mname"required placeholder="Middle Name" required>
                                    </div>
                                     <div class="form-group col-sm-4">
                                        <label for="fn">Last Name: <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control" class="form-control" name="lname" placeholder="Last Name" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="text">Birth Place: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="birth_place" name="birth_place" placeholder="Birth Place" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="date">Birth Date: <span style="color:red;">*</span></label>
                                        <input type="date" class="form-control" id="birth_date" name="birth_date"required >
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="text">Gender: <span style="color:red;">*</span></label>
                                        <select class="form-control" name="gender" required>
                                            <option selected disabled>Select...</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="date">Civil Status: <span style="color:red;">*</span></label>
                                        <select class="form-control" name="civil_status" required>
                                            <option selected disabled>Select...</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="cn">Voter Status: <span style="color:red;">*</span></label>
                                        <select class="form-control" name="voter" required>
                                            <option selected disabled>Select...</option>
                                            <option value="Registered">Registered</option>
                                            <option value="Not-registered">Not-registered</option>
                                        </select>
                                    </div>

                                    
                                    <div class="form-group col-sm-4">
                                        <label for="text">Occupation: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Occupation" >
                                    </div>

                      

                                </div>
                            
                                
                                
                                <div class="row">
      
                                    <div class="form-group col-sm-4">
                                        <!-- <label for="text">Address: <span style="color:red;">*</span></label> -->
                                        <input type="hidden" class="form-control" id="street" name="street" value="<?php echo $street;?>" readonly>
                                    </div>
                              
                              
                                    
                                </div>

                               
                                
                            
                            
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer">
                  <div class="btn-group">
                  <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="familyDec()"><i class="fa fa-times"></i> Close</button>
                  <button type="submit" class="btn btn-primary" name="btn_tenant"><i class="fa fa-check"></i> Submit</button>
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
        $query = mysqli_query($conn, "SELECT MAX(rnumber) AS largest
        FROM rbi_tenant where rbi_id='$id' and family_no='$familyNo';");
        $row = mysqli_fetch_array($query);
        $largest = $row["largest"];
        
    ?>
    var i = <?php echo $largest;?>;
    function familyAdd() {
        document.getElementById('rnumber').value = ++i;
   
    }
    function familyDec() {
        document.getElementById('rnumber').value = --i;
    }
</script>