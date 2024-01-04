<div class="modal fade" id="view<?php echo $id?>">
      <form  id="myForm" action="archive_application_submit.php" method="POST" enctype="multipart/form-data" >
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-eye"></i>
                        Archive View
                    </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white;">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                     <!--  <h4 class="sent-notification"></h4> -->
                        <div  class="row" style="color:black;">
                        <input name="id" type="hidden" value="<?php echo $id ?>"/>
                            <div class="col-sm-12">

                            <div class="row">
                               <div class="form-group col-sm-6">
                                    <label for="stats">RBI: <span style="color:red;">*</span></label>
                                    <input type="number" class="form-control" maxlength="100" id="cn" name="cnumber" value="<?php echo $row['urbi'] ?>" readonly>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="stats">Resident ID: <span style="color:red;">*</span></label>
                                    <input type="number" class="form-control" maxlength="100" id="cn" name="cnumber" value="<?php echo $row['residentId'] ?>" readonly>
                                </div>
                              
                            </div>
                        

                            <div class="row">
                            <div class="form-group col-sm-6">
                                  <label for="stats">Requestor: <span style="color:red;">*</span></label>
                                      <input type="text" class="form-control"  name="usersFullname" value="<?php echo $row['uname'] ?>" readonly>
                                </div>
                              <div class="form-group col-sm-6">
                                  <label for="stats">Contact Number: <span style="color:red;">*</span></label>
                                  <input type="number" class="form-control" maxlength="100" id="cn" name="cnumber" value="0<?php echo $row['ucontactno'] ?>" readonly>
                                </div>


                              </div>

                              <div class="row">
                                
                              <div class="form-group col-sm-6">
                                    <label for="cn">Email: <span style="color:red;">*</span></label>
                                    <input type="email" class="form-control" id="email" maxlength="100" id="cn" name="usersEmail" value="<?php echo $row['uemail'] ?>" readonly >
                                </div>
                              </div>
                              <hr>
                              
                              <div class="row">
                              <div class="form-group col-sm-6">
                                    <label for="stats">Type of permit: <span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" maxlength="100" id="cn" name="pickup" value="<?php echo $row['permit_type'] ?>" readonly>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="stats">Type of claim: <span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" maxlength="100" id="cn" name="pickup" value="<?php echo $row['pickupMode'] ?>" readonly>
                                </div>

                              </div>
                              
                            <div class="row">
                            
                              <div class="form-group col-sm-6">
                                  <label for="stats">Gcash Receipt: <span style="color:red;">*</span></label>
                                  <input type="text" class="form-control" maxlength="100" id="cn" name="pickup" value="<?php echo $row['receiptImg'] ?>" readonly>
                              </div>
                           
                              <div class="form-group col-sm-6">
                                <label for="stats">Request Purpose: <span style="color:red;">*</span></label>
                                <textarea type="text" class="form-control" name="usersPurpose" readonly><?php echo $row['upurpose'] ?></textarea>
                              </div>
                            </div>
                         
                               

                               
                                <!-- <div class="row">
                                </div> -->

                         
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer">
                  <div class="btn-group">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                  <button type="submit" class="btn btn-primary" id="abtn" name="rbiarchiveSubmit"><i class="fa fa-check"></i> Reactivate</button>
                 
                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>



</script>