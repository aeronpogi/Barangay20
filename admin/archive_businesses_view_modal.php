<div class="modal fade" id="view<?php echo $id?>">
      <form  id="myForm" action="archive_businesses_submit.php" method="POST" enctype="multipart/form-data" >
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-eye"></i>
                        Business archive view
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
                                         <label for="stats">Requestor: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control"  name="usersFullname" value="<?php echo $row['uname'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="cn">Business Name: <span style="color:red;">*</span></label>
                                        <input type="email" class="form-control" maxlength="100" id="cn" name="businessName" value="<?php echo $row['businessName'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="cn">Business Email: <span style="color:red;">*</span></label>
                                        <input type="email" class="form-control" id="bbbemail" maxlength="100" name="usersEmail" value="<?php echo $row['uemail'] ?>" readonly >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="stats">Contact Number: <span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" maxlength="100" id="cn" name="businessContactno" value="0<?php echo $row['businessContactno'] ?>" readonly>
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                        <label for="stats">Location: <span style="color:red;">*</span></label>

                                        <?php $location = $row['location'];?>

                                        <textarea type="text" class="form-control" name="usersPurpose" readonly><?php $location = str_replace("+", " ", $location); echo $location;?></textarea>
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
                    <button type="submit" class="btn btn-success" id="abtn" name="archiveSubmit"> Activate</button>
                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>

