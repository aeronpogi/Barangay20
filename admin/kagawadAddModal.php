<div class="modal fade" id="addUser">
      <form method="POST" enctype="multipart/form-data" action="kagawadAdd.php">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-plus-circle"></i>
                        Official
                    </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
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
                                         <input type="text" class="form-control" class="form-control" id="fn" name="fullname" placeholder="Full Name" size="100" autofocus required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="fn">Contact No.: <span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" id="cnumber" name="cnumber" placeholder="Contact Number"  autofocus required>
                                    </div>
                                     <div class="form-group col-sm-4">
                                        <label for="fn">Picture: <span style="color:red;">*</span></label>
                                        <input type="file" class="form-control" id="img" name="img"  autofocus required>
                                    </div>
                                </div>
                                
                                <div class="row">

                                <div class="form-group col-sm-4">
                                        <label for="email">Position: <span style="color:red;">*</span></label>
                                        <!-- <input type="text" class="form-control"  name="posit ion" placeholder="Position" required> -->
                                        <select name="position" class="form-control"required>
                                          <option selected disabled>Select...</option>
                                          <option value="Kagadaw">Kagawad</option>
                                          <option value="Treasurer">Treasurer</option>
                                          <option value="Secretary">Secretary</option>
                                          <option value="Sk Chairman">Sk Chairman</option>
                                          <option value="Chairman">Chairman</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="email">Email: <span style="color:red;">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required style="text-transform: lowercase !important;">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="password">Password: <span style="color:red;">*</span></label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
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