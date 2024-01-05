<div class="modal fade" id="editUser<?php echo $id?>">
      <form method="POST" action="adminEdit.php" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-edit"></i>
                        Edit Administrator
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
                                    <div class="form-group col-sm-6">
                                        <label for="fn">Full Name: <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control" class="form-control" id="fn" name="fullname" value="<?php echo $row['fullname'] ?>" size="100">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="fn">Contact No: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="cnumber" name="cnumber" value="<?php echo $row['contact_no'] ?>">
                                    </div>
                                </div>
                                
                                <div class="row">
                                <div class="form-group col-sm-6">
                                        <label for="fn">Picture: <span style="color:red;">*</span></label>
                                        <input type="file" class="form-control" id="img" name="profile"  autofocus >
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="email">Email: <span style="color:red;">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['uemail'] ?>" style="text-transform: lowercase !important"> 
                                    </div>
                                </div>

                                <div class="row">
                                  <div class="form-group col-sm-6">
                                        <label for="password">Password: <span style="color:red;">*</span></label>
                                        <input type="password" class="form-control" id="pwd" name="upwd">
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
                  <button type="submit" class="btn btn-primary" name="btn_edit"><i class="fa fa-check"></i> Submit</button>
                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>