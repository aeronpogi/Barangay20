<div class="modal fade" id="addSession">
      <form method="POST" enctype="multipart/form-data" action="blotterSessionAdd.php">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-eye"></i>
                    </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="addSessionDecrement()">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">

  

                        <?php
                        
                        $query = mysqli_query($conn, "select * from blotter where id = '$id';") or die(mysqli_error($conn));
                        while($row = mysqli_fetch_array($query)){
                      
                          $id = $row['id'];
                      
                          $complainant = $row['complainant'];
                          $complainantAddress = $row['complainantAddress'];
                          $complainantAge = $row['complainantAge'];
                          $complainantContact = $row['complainantContact'];
                      
                          $complainee = $row['complainee'];
                          $complaineeAge = $row['complaineeAge'];
                          $complaineeAddress = $row['complaineeAddress'];
                          $complaineeContact = $row['complaineeContact'];
                          $case = $row['natureCases'];

                          $blotterID = $row['blotterID'];
                          $details = $row['details'];
                      
                        }

                        $query2 =  mysqli_query($conn, "SELECT MAX(session_no) AS largest FROM blotter where id='$id' or blotter_id='$id';");
                        $result = mysqli_fetch_array($query2);
                        $largest = $result["largest"];
                        
                
                        ?>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="fn">Complainant: <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control" class="form-control" id="complainant" name="complainant" value="<?php echo $complainant ?>" readonly>
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label for="fn">Contact: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="location" name="complainantContact" value="<?php echo $complainantContact ?>" readonly>
                                    </div>

                                </div>

                                <hr>

                            
                                <input type="hidden" name="blotterID" value="<?php echo $blotterID;?>">
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="date">Date: <span style="color:red;">*</span></label>
                                        <input type="date" class="form-control" id="date" name="date"  >
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="password">Time: <span style="color:red;">*</span></label>
                                        <input type="time" class="form-control" id="time" name="time"  >
                                </div>

                                </div>

                                <input type="hidden" name="case" value="<?php echo $case;?>">
       
                         
                                <!-- <div class="row">
                                    <div class="form-group col-sm-12">
                                            <label for="password">Details: <span style="color:red;">*</span></label>
                                            <textarea type="text" class="form-control" id="details" name="details" ></textarea>
                                    </div>
                                </div> -->

                                <div class="row">
                                    <div class="form-group col-sm-12">
                                            <label for="password">Attach Image File: <span style="color:red;">*</span></label>
                                            <input type="file" name="img" id="" class="form-control" >
                                            <!-- <textarea type="File" class="form-control" id="details" name="details" ></textarea> -->
                                    </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer">
                  <div class="btn-group">
                      <input type="hidden" name="blotter_id" value="<?php echo $id; ?>">
                      <input type="hidden" name="session" id="session_number">
                      <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="addSessionDecrement()"><i class="fa fa-times"></i> Close</button>
                      <button type="submit" class="btn btn-primary" name="addSessionBtn">Submit</button>
                 <!--  <button type="submit" class="btn btn-primary" name="btn_edit"><i class="fa fa-check"></i> Submit</button> -->
                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>

      
        <script>

        var i = <?php echo $largest;?>;
        function addSessionincrement() {
            document.getElementById('session_number').value = ++i;
        }
        function addSessionDecrement() {
            document.getElementById('session_number').value = --i;
        }
        </script>