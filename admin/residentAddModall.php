<div class="modal fade" id="add">
      <form method="POST" enctype="multipart/form-data" action="residentsAdd.php" id="addResident">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-plus-circle"></i>
                        Add Residents
                    </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white;">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            
                            <div class="col-sm-12">
                                <div class="row">
                                  <div class="form-group col-sm-6">
                                      <label for="fn">RBI No.: <span style="color:red;">*</span></label>
                                      <input type="number" class="form-control" id="urbi" name="urbi" placeholder="RBI No." autofocus required>
                                  </div>
                                    <div class="form-group col-sm-6">
                                        <label for="fn">Full Name: <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control" class="form-control" id="fn" name="ufullname" placeholder="Full Name" size="100" autofocus required>
                                    </div>
                                   
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="cn">Contact No.: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="cn" name="ucontactno" placeholder="Contact Number" size="40" required>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="cn">Gender: <span style="color:red;">*</span></label>
                                        <select class="form-control" name="gender">
                                          <option value="Male">Male</option>
                                          <option value="Female">Female</option>
                                        </select>
                                    </div>
                                   

                                    <div class="form-group col-sm-4">
                                        <label for="cn">Picture.: <span style="color:red;">*</span></label>
                                        <input type="file" class="form-control" id="image_picture" name="image_picture" required>
                                    </div>

                                </div>

                                <!-- <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="fn">Household No.: <span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" id="fn" name="uhouseholdno" placeholder="Household No."  autofocus required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="cn">Picture.: <span style="color:red;">*</span></label>
                                        <input type="file" class="form-control" id="image_picture" name="image_picture" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="fn">Street Name: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="fn" name="ustreename" placeholder="Street Name"  autofocus required>
                                    </div>
                                </div> -->
                                <div class="row">
                               

                                    <div class="form-group col-sm-6">
                                        <label for="fn">Address: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="fn" name="address" placeholder="Address"  autofocus required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="cn">Voter Status: <span style="color:red;">*</span></label>
                                        <select class="form-control" name="voter">
                                          <option value="Yes">Yes</option>
                                          <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="email">Email: <span style="color:red;">*</span></label>
                                        <input type="email" class="form-control" id="uemail" name="uemail" placeholder="Email Address" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="password">Password: <span style="color:red;">*</span></label>
                                        <input type="password" class="form-control" id="upwd" name="upwd" placeholder="Password" required>

                                      
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
                  <button type="submit" class="btn btn-primary" name="btn_user" id="sbmt_btn"><i class="fa fa-check"></i> Submit</button>
                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>