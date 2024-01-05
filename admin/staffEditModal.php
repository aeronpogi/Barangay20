<div class="modal fade" id="editUser<?php echo $id?>">
<div class="enabledForm">

  <form method="POST" enctype="multipart/form-data" action="staffEdit.php">
    <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-dark ">
                <h5 class="modal-title text-center">
                    <i class="fa fa-edit"></i>
                    Edit Staff
                </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color: white;">&times;</span>
              </button>
            </div>
            <div class="card card-primary">
              <!-- form start -->
                <div class="card-body">
                    <div  class="row" style="color:black;">
                    <input name="id" type="hidden" value="<?php echo $id ?>"/>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label for="fn">Full Name: <span style="color:red;">*</span></label>
                                     <input type="text" class="form-control" class="form-control" id="fn" name="ufullname" value="<?php echo $row['fullname'] ?>" size="100" readonly>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="fn">Contact No.: <span style="color:red;">*</span></label>
                                    <input type="number" class="form-control" id="ucontactno" name="ucontactno" value="<?php echo $row['contact_no'] ?>" readonly>
                                </div>
                                <div class="form-group col-sm-4">
                                     <label for="fn">Picture: <span style="color:red;">*</span></label>
                                     <input type="file" class="form-control" id="img" name="profile"  autofocus disabled>
                                 </div>
                              </div>

                                  <input type="hidden" class="form-control" value="<?php echo $row['position'] ?>" id="position" name="position"  >
                            <div class="row">

                                <div class="form-group col-sm-4">
                                    <label for="email">Staff Email: <span style="color:red;">*</span></label>
                                    <input type="email" class="form-control" id="uemail" name="uemail" value="<?php echo $row['uemail'] ?>" readonly>
                                </div>
                                <!-- <div class="form-group col-sm-4">
                                    <label for="password">Password: <span style="color:red;">*</span></label>
                                    <input type="password" class="form-control" id="pwd" name="pwd" readonly>
                              </div> -->

                              <div class="form-group col-sm-4">
                                    <label for="status">Account Status: <span style="color:red;">*</span></label>
                                    <select name="accountStatus" class="form-control" disabled>
                                      <option selected><?php echo $row['accountStatus'] ?></option>
                                      <option value="Active">Active</option>
                                      <option value="Deactivated">Deactivate</option>
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
              <button type="button" class="btn btn-primary edit-btn" data-target='editUser<?php echo $id;?>'> Edit</button>
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
  
<form method="POST" enctype="multipart/form-data" action="staffEdit.php">
    <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-dark ">
                <h5 class="modal-title text-center">
                    <i class="fa fa-edit"></i>
                    Edit Staff
                </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color: white;">&times;</span>
              </button>
            </div>
            <div class="card card-primary">
              <!-- form start -->
                <div class="card-body">
                    <div  class="row" style="color:black;">
                    <input name="id" type="hidden" value="<?php echo $id ?>"/>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label for="fn">Full Name: <span style="color:red;">*</span></label>
                                     <input type="text" class="form-control" class="form-control" id="fn" name="ufullname" value="<?php echo $row['fullname'] ?>" size="100">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="fn">Contact No.: <span style="color:red;">*</span></label>
                                    <input type="number" class="form-control" id="ucontactno" name="ucontactno" value="<?php echo $row['contact_no'] ?>">
                                </div>
                                <div class="form-group col-sm-4">
                                     <label for="fn">Picture: <span style="color:red;">*</span></label>
                                     <input type="file" class="form-control" id="img" name="profile"  autofocus >
                                 </div>
                              </div>

                                  <input type="hidden" class="form-control" value="<?php echo $row['position'] ?>" id="position" name="position"  >
                            <div class="row">

                                <div class="form-group col-sm-4">
                                    <label for="email">Staff Email: <span style="color:red;">*</span></label>
                                    <input type="email" class="form-control" id="uemail" name="uemail" value="<?php echo $row['uemail'] ?>">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="password">Staff Password: <span style="color:red;">*</span></label>
                                    <input type="password" class="form-control" id="pwd" name="pwd">
                                </div>

                              <div class="form-group col-sm-4">
                                    <label for="status">Account Status: <span style="color:red;">*</span></label>
                                    <select name="accountStatus" class="form-control">
                                      <option selected><?php echo $row['accountStatus'] ?></option>
                                      <option value="Active">Active</option>
                                      <option value="Deactivated">Deactivate</option>
                                    </select>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                            <div class="form-group col-sm-4">
                                    <label for="password">Password: <span style="color:red;">*</span></label>
                                    <input type="password" class="form-control" id="pwd" name="apwd">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
              </div>
            <div class="modal-footer">
              <div class="btn-group">
              <button type="button" class="btn btn-warning edit-btn" data-target='editUser<?php echo $id;?>' style="margin-right: 3px;" data-dismiss="modal"> Cancel</button>
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