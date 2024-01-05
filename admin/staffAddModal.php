<div class="modal fade" id="addUser">
      <form method="POST" enctype="multipart/form-data" action="staffAdd.php">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark ">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-plus-circle"></i>
                        Add Staff
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
                                    <div class="form-group col-sm-4">
                                        <label for="fn">Full Name: <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control" class="form-control" id="fn" name="ufullname" placeholder="Full Name" size="100" autofocus required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="fn">Contact No.: <span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" id="ucontactno" name="ucontactno"  placeholder="Contact number "autofocus required>
                                    </div>
                                    
                                    <div class="form-group col-sm-4">
                                        <label for="fn">Picture: <span style="color:red;">*</span></label>
                                        <input type="file" class="form-control" id="img" name="img"   required>
                                    </div>
                                  </div>
                                  
                                  <div class="form-group col-sm-4">
                                      <input type="hidden" class="form-control" id="position" name="position"  value="Barangay Staff">
                                  </div>
                                  <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="email">Email: <span style="color:red;">*</span></label>
                                        <input type="email" class="form-control" id="uemail" name="uemail" placeholder="Email Address" required>
                                    </div>
                                    <div class="form-group col-sm-4">
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
                  <button type="submit" class="btn btn-primary" name="btn_user"><i class="fa fa-check"></i> Submit</button>
                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>