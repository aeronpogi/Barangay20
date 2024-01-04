<div class="modal fade" id="indigencyAdd">
      <form method="POST" enctype="multipart/form-data" action="barangay_indigencyAdd.php">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-plus-circle"></i>
                        Certificate of Indigency
                    </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" style="color: white">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                  <div class="card-body">
                     <!--  <h4 class="sent-notification"></h4> -->
                     <form>



                       <div  class="row" style="color:black;">
                           <div class="col-sm-12">  
                             <div class="row">

                               <div class="form-group col-sm-6">
                                 <label for="stats">RBI <span style="color:red;">*</span></label>
                                 <select class="form-control" aria-label="Default select example" name="urbi" id="rbidropdownR" >
                                          <option selected value="" disabled >Select…</option>
                                          <?php 

                                       
                                          $sql = "SELECT DISTINCT rbi_id FROM rbi_tenant;";
                                          $result = mysqli_query($conn, $sql);
                                          
                          
                                          if(mysqli_num_rows($result)>0) {
                                              while($row = mysqli_fetch_assoc($result)) { 
                                                  ?>
                                                  
                                                  <option value="<?php echo $row['rbi_id'];?>"><?php echo $row['rbi_id'];?></option>
                                                  
                                                  <?php
                                              }
                                          }
                                          
                                          ?>

                                        
                                      </select>
                               </div>
                              
                             </div>

                             <hr>

                             <div class="row">
                               <div class="form-group col-sm-6">
                                 <label for="stats">Requestor <span style="color:red;">*</span></label>
                                  <select class="form-control" aria-label="Default select example" name="requestor" id="residentR" >
                                    <option selected disabled>Select…</option>
                                    <!-- <option selected disabled>Select…</option> -->
                                  </select>  
                               </div>
                                <div class="form-group col-sm-6">
                                 <label for="stats">Resident ID <span style="color:red;">*</span></label>
                                  <select class="form-control" aria-label="Default select example" name="residentId" id="residentIDR" >
                                      <option selected disabled>Select…</option>
                                  </select>  
                                </div>
                               <div class="form-group col-sm-6">
                                <label for="stats">Address <span style="color:red;">*</span></label>
                                <select class="form-control" aria-label="Default select example" name="street" id="street">
                                          <option selected disabled>Select…</option>
                  
                                          <?php 

                                       
                                            $sql = "SELECT DISTINCT street FROM rbi_tenant;";
                                            $result = mysqli_query($conn, $sql);


                                            if(mysqli_num_rows($result)>0) {
                                                while($row = mysqli_fetch_assoc($result)) { 
                                                    ?>
                                                    
                                                    <option value="<?php echo $row['street'];?>"><?php echo $row['street'];?></option>
                                                    
                                                    <?php
                                                }
                                            }

                                            ?>
                                        </select>  
                              </div>

                             </div>
                              <div class="form-group">
                                 <label for="Purpose">Purpose <i class="fas fa-edit"></i></label>
                                 <textarea class="form-control" id="Purpose" rows="3" required name="purpose" autofocus></textarea>
                              </div>
                    
                               <input type="hidden" class="form-control" id="approved" value="Your barangay clearance request has been approved.">
                           </div>
                       </div>
                   </div>
                     </form>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer">
                  <div class="btn-group">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                  <button type="submit" class="btn btn-primary" name="indigencyAddBtn"><i class="fa fa-check"></i> Submit</button>



                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>

      
      <script>
        $(document).ready(function(){


    
          $("#rbidropdownR").on('change', function(){
            var rbi = $(this).val();
            
            $.ajax({
              url: "ajax.php",
              type: "POST",
              data: "request=" + rbi,
              success: function(data){
                $("#residentR").html(data);
              }
            });
          });


          $("#residentR").on('change', function(){
            var resident = $(this).val();
            
            $.ajax({
              url: "ajax.php",
              type: "POST",
              data: "resident=" + resident,
              success: function(data){
                $("#residentIDR").html(data);
              }
            });
          });

          $("#residentIDR").on('change', function(){
            var residentId = $(this).val();
            
            $.ajax({
              url: "ajax.php",
              type: "POST",
              data: "residentID=" + residentId,
              success: function(data){
                $("#street").html(data);
              }
            });
          });
          // $("#resident").on('change', function(){
          //   var rvalue = $(this).val();
            
          //   // alert(rvalue);
          //   $.ajax({
          //     url: "ajax.php",
          //     type: "POST",
          //     data: "resident=" + rvalue,
          //     success: function(data){
          //       $("#residentID").html(data);
          //     }
          //   })
          // });


     

      
        })

       
      </script>