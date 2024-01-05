<div class="modal fade" id="addUser">
      <form method="POST" enctype="multipart/form-data" action="residentsAdd.php" id="addResident">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-plus-circle"></i>
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
                            
                            <div class="col-sm-12">
                                <div class="row">
                                  <div class="form-group col-sm-6">
                                      <label for="fn">RBI No.: <span style="color:red;">*</span></label>
                                      <!-- <input type="number" class="form-control" id="urbi" name="urbi" placeholder="RBI No." autofocus required> -->
                                      <select class="form-control" aria-label="Default select example" name="urbi" id="rbidropdown" >
                                          <option selected value="" disabled >Select…</option>
                                          <?php 

                                       
                                          $sql = "SELECT DISTINCT rbi_id FROM rbi_tenant ;";
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
                                    <div class="form-group col-sm-6">
                                        <label for="fn">Resident: <span style="color:red;">*</span></label>
                                          <!-- <input type="text" class="form-control" class="form-control" id="fn" name="ufullname" placeholder="Full Name" size="100" autofocus required> -->
                                        <select class="form-control" aria-label="Default select example" name="ufullname" id="resident" >
                                          <option selected disabled>Select…</option>
                                          <!-- <option selected disabled>Select…</option> -->
                                        </select>  
                                    </div>

          
                                   
                                </div>

                                <div class="row">

                                <div class="form-group col-sm-4">
                                        <label for="cn">ResidentID.: <span style="color:red;">*</span></label>
                                        <select class="form-control" aria-label="Default select example" name="residentId" id="residentID" >
                                        <option selected disabled>Select…</option>
                                        </select>  
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="cn">Contact No.: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="cn" name="ucontactno" placeholder="Contact Number" size="40" required>
                                    </div>

                           
           

                                    <div class="form-group col-sm-4">
                                        <label for="fn">Address: <span style="color:red;">*</span></label>

                                        <select class="form-control" aria-label="Default select example" name="street" id="street">
                                          <option selected disabled>Select...</option>
                  
                                        </select>  
                                    </div>

                                    
                                </div>

                         
                             
                                
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="email">Email: <span style="color:red;">*</span></label>
                                        <input type="email" class="form-control" id="uemail" name="uemail" placeholder="Email Address" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="password">Password: <span style="color:red;">*</span></label>
                                        <input type="password" class="form-control" id="upwd" name="upwd" placeholder="Password" required>

                                      
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
                  <button type="submit" class="btn btn-primary" name="btn_user" id="sbmt_btn"><i class="fa fa-check"></i> Submit</button>

                  

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


    
          $("#rbidropdown").on('change', function(){
            var rbi = $(this).val();
            
            $.ajax({
              url: "ajax.php",
              type: "POST",
              data: "request=" + rbi,
              success: function(data){
                $("#resident").html(data);
              }
            });
          });


          $("#resident").on('change', function(){
            var resident = $(this).val();
            
            $.ajax({
              url: "ajax.php",
              type: "POST",
              data: "resident=" + resident,
              success: function(data){
                $("#residentID").html(data);
              }
            });
          });

          $("#residentID").on('change', function(){
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