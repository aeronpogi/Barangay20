<div class="modal fade" id="editRbi<?php echo $id?>">
      <form method="POST" enctype="multipart/form-data" action="rbiEdit.php">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-edit"></i>
                        Edit RBI
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
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="fn">Full Name: <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control" class="form-control" id="full_name" name="full_name" value="<?php echo $row['full_name'] ?>" size="100" autofocus >
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="fn">RBI No.: <span style="color:red;">*</span></label>
                                         <input type="number" class="form-control"  id="rbi_no" name="rbi_no" value="<?php echo $row['rbi_id'] ?>" size="100" autofocus >
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="fn">Gender: <span style="color:red;">*</span></label>
                                        <select class="form-control" name="gender">
                                            <option value="<?php echo $row['gender'] ?>"><?php echo $row['gender'] ?></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="fn">Date of Birth: <span style="color:red;">*</span></label>
                                        <input type="date" class="form-control" id="birth_date" name="birth_date" value="<?php echo $row['birth_date'] ?>" >
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="password">Birth Place: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="birth_place" name="birth_place" value="<?php echo $row['birth_place'] ?>">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="fn">Contact No.: <span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" id="cnumber" name="cnumber" value="<?php echo $row['cnumber'] ?>" >
                                    </div>

                                </div>
                                
                                <div class="row">
                                <div class="form-group col-sm-4">
                                        <label for="fn">Civil Status: <span style="color:red;">*</span>
                                        </label>
                                       <select class="form-control" name="civil_status">
                                            <option value="<?php echo $row['civil_status'] ?>"><?php echo $row['civil_status'] ?></option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="fn">Voter Status: <span style="color:red;">*</span>
                                            </label>
                                        <select class="form-control" name="voter_status">
                                                <option value="<?php echo $row['voter_status'] ?>"><?php echo $row['voter_status'] ?></option>
                                                <option value="Registered">Registered</option>
                                                <option value="Not-registered">Not registered</option>
                                            </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="text">Address: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address'] ?>">
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