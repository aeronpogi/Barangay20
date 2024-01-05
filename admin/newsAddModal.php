<div class="modal fade" id="addNews">
      <form method="POST" enctype="multipart/form-data" action="newsAdd.php">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-plus-circle"></i>
                        Announcement
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
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="fn">Title: <span style="color:red;">*</span></label>
                                         <input type="text"class="form-control" id="title" name="title" placeholder="Title" size="100" autofocus required>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="fn">Description: <span style="color:red;">*</span></label>
                                        <textarea class="form-control" id="description" name="description" placeholder="Description"  autofocus required></textarea>
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
                  <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-check"></i> Submit</button>
                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>