<div class="modal fade" id="editUser<?php echo $id?>" data-show='false'>


<div id="residentAccountFormEdit" >
<form method="POST" enctype="multipart/form-data" action="residentsEdit.php" id='residentAccountFormView'>
    <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-dark ">
                <h5 class="modal-title text-center">
                    <i class="fa fa-edit"></i>
                     Resident
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
                                <label for="fn">RBI No.: <span style="color:red;">*</span></label>
                                <input type="number" class="form-control" id="urbi" name="urbi" value="<?php echo $row['urbi'] ?>"  readonly >
                            </div>

                          </div>
                          <hr>

                     
                          
                          <div class="row">
                            
                            <div class="form-group col-sm-4">
                              <label for="fn">Full Name: <span style="color:red;">*</span></label>
                              <input type="text" class="form-control" class="form-control" id="fn" name="ufullname" value="<?php echo $row['ufullname'] ?>" size="100"readonly >
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="cn">Contact No.: <span style="color:red;">*</span></label>
                                <input type="tel" class="form-control" id="cn" name="ucontactno" value="<?php echo $row['ucontactno'] ?>" readonly>
                            </div>

                          

                            <div class="form-group col-sm-4">
                                <label for="fn">Address : <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="fn" name="ustreename" value="<?php echo $row['street'] ?>"  readonly>
                            </div>
                        </div>


                        <hr>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="email">Email: <span style="color:red;">*</span></label>
                                <input type="email" class="form-control" id="uemail" name="uemail" value="<?php echo $row['uemail'] ?>">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="password">Change Password: <span style="color:red;">*</span></label>
                                <input type="password" class="form-control" id="pwd" name="pwd">
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


          
</div>