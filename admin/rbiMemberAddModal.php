<?php $id = $_GET['id']; 

include("include/connect.php");




?>



<div class="modal fade" id="addFamily">
      <form method="POST" enctype="multipart/form-data" action="rbiMemberAdd.php">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-plus-circle"></i>
                        Family
                    </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"  onclick="decrement()" >
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
                                        <input type="tel" class="form-control" id="family_no" name="rbi_id" value="<?php echo $id;?>" readonly >
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="fn">Family No.: <span style="color:red;">*</span></label>
                                        <input type="tel" class="form-control" id="cnumber" name="fnumber" placeholder="Enter Family No." value="" readonly>
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="fn">First Name: <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control" name="fname" required placeholder="First Name">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="fn">Middle Name.: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control"  name="mname"required placeholder="Middle Name">
                                    </div>
                                     <div class="form-group col-sm-4">
                                        <label for="fn">Last Name: <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control" class="form-control" name="lname" placeholder="Last Name">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="text">Birth Place: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="birth_place" name="birth_place" placeholder="Birth Place">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="date">Birth Date: <span style="color:red;">*</span></label>
                                        <input type="date" class="form-control" id="birth_date" name="birth_date" >
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
                                        <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Occupation">
                                    </div>
                                </div>

                             

                                <div class="row">
                                  
                                    <?php
                                     $query = mysqli_query($conn, "select tenantOwner from rbi_tenant where rbi_id='$id'") or die(mysqli_error($conn));
                                     while($row = mysqli_fetch_array($query)){
                                         $tenantOwner = $row['tenantOwner'];
                                     }
                                    
                                    ?>
                                    <div class="form-group col-sm-4">
                                        <input type="hidden" class="form-control" id="" name="tenantOwner" value="<?php echo $tenantOwner;?>">
                                    </div>
                                    <div class="form-group col-sm-4">
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
                  <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="decrement()"><i class="fa fa-times"></i> Close</button>
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
        $query = mysqli_query($conn, "SELECT MAX(family_no) AS largest
        FROM rbi_tenant where rbi_id='$id';");
        $row = mysqli_fetch_array($query);
        $largest = $row["largest"];
        
    ?>
    var i = <?php echo $largest;?>;
    function increment() {
        document.getElementById('cnumber').value = ++i;
    }
    function decrement() {
        document.getElementById('cnumber').value = --i;
    }
</script>