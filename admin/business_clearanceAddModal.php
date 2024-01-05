<div class="modal fade" id="businessclearanceModal">
      <form method="POST" enctype="multipart/form-data" action="business_clearanceAdd.php">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-plus-circle"></i>
                        Business Clearance
                    </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" style="color: white">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                  <div class="card-body">
                     <!--  <h4 class="sent-notification"></h4> -->

                     <div class="row">
                       <div class="col-sm-6">
                         <label for="">RBI</label>
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
                        <div class="col-sm-6">
                          <label for="">Requestor</label>
                          <select class="form-control" aria-label="Default select example" name="requestor" id="residentR" >
                            <option selected disabled>Select…</option>
                            <!-- <option selected disabled>Select…</option> -->
                          </select>  
                        </div>

                        <div class="col-sm-6">
                          <label for="">Resident ID</label>
                          <select class="form-control" aria-label="Default select example" name="residentId" id="residentIDR" >
                              <option selected disabled>Select…</option>
                          </select>  
                        </div>
                     </div>

                     <hr>
                     <div class="row">
                         <div class="col-sm-6">
                            <label for="">Business Name</label>
                            <input type="text" class="form-control" name="businessName" placeholder="Business Name">
                          </div>

                          <div class="col-sm-6">
                            <label for="">Business Type</label>
                            <select class="form-control" aria-label="Default select example" name="businessType" >
                              <option selected disabled>Select…</option>
                              <option value="Sole Proprietorship" >Sole Proprietorship</option>
                              <option value="Partnership" >Partnership</option>
                              <option value="Corperation" >Corperation</option>
                          </select>  
                          </div>
                     </div>

                     <br>

                     
                     <div class="row">
                         <div class="col-sm-6">
                            <label for="">Business Address</label>
                            <input type="text" class="form-control" name="businessAddress" placeholder="Business Address">
                          </div>

                          <div class="col-sm-6">
                            <label for="">Fee</label>
                            <input type="number" class="form-control" name="fee" placeholder="Fee">
                          </div>
                          
                       

                     </div>
                 
                  </div>
                <div class="modal-footer">
                  <div class="btn-group">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                  <button type="submit" class="btn btn-primary" name="addBusinessBtn"><i class="fa fa-check"></i> Submit</button>



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