<div class="modal fade" id="update<?php echo $id?>">
      <form method="POST" enctype="multipart/form-data" action="blotterEdit.php">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-center">
                        <i class="fas fa-edit"></i>
                       Blotter Second Session
                    </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
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
                                        <label for="fn">Complainant: <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control" class="form-control" id="complainant" name="complainant" value="<?php echo $row['complainant'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="fn">Respondent: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="respondent" name="respondent" value="<?php echo $row['respondent'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="fn">Location: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="location" name="location" value="<?php echo $row['location'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                       <label for="text">Status: <span style="color:red;">*</span></label>
                                      <select class="form-control" name="status">
                                    <option disabled selected>Select. . .</option>
                                    <option value="Settled">Settled</option>
                                    <option value="Active"> Active</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="password">Second Session Details: <span style="color:red;">*</span></label>
                                        <textarea class="form-control" id="details_session" name="details_session">
                                            </textarea>
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