<div class="modal fade" id="editNews<?php echo $id; ?>">
      <form method="POST" enctype="multipart/form-data" action="newsEdit.php">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                    <i class="fa fa-edit"></i>
                       Edit
                    </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="title" name="id" value="<?php echo $row['id'] ?>" >
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="fn">Title: <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control" id="title" name="title" placeholder="News Title" size="100" value="<?php echo $row['news_title'] ?>" autofocus>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="fn">Description: <span style="color:red;">*</span></label>
                                        <textarea class="form-control" id="description" name="description"  autofocus > <?php echo $row['news_descri'] ?></textarea>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="email">Status: <span style="color:red;">*</span></label>
                                        <select name="status" id=""  class="form-control" required>
                                          <option  selected value="<?php echo $row['status']?>"><?php echo $row['status']?></option>
                                          <option value="Publish">Publish</option>
                                          <option value="Unpublish">Unpublish</option>
                                        </select>
                                    </div>

                                

                                </div>
                         
                        </div>
                        

                    </div>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer">
                  <div class="btn-group">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                  <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-check"></i> Submit</button>
                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>