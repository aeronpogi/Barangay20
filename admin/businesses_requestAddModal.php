<div class="modal fade" id="businessAdd">
      <form method="POST" enctype="multipart/form-data" action="businesses_requestAdd.php">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-plus-circle"></i>
                        Business
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

                             </div>

                             <div class="row">
                               <div class="form-group col-sm-6">
                                 <label for="stats">Business Name <span style="color:red;">*</span></label>
                                 <input type="text" class="form-control" name="bname" placeholder="Business Name" required>
                               </div>
                                <div class="form-group col-sm-6">
                                 <label for="stats">Contact No <span style="color:red;">*</span></label>
                                 <input type="text" class="form-control" name="bcontact" placeholder="Contact" required>
                                </div>

                             </div>

                             <div class="row">
                               <div class="form-group col-sm-6">
                                 <label for="stats">Business Email <span style="color:red;">*</span></label>
                                 <input type="email" class="form-control" name="bemail" placeholder="Business Email" required>
                               </div>
                                <div class="form-group col-sm-6">
                                 <label for="stats">Location <span style="color:red;">*</span></label>
                                 <input type="text" class="form-control" name="blocation" placeholder="Location" required>
                                </div>

                             </div>

                             <div class="row">
                               <div class="form-group col-sm-12">
                                 <label for="stats">Business Photo<span style="color:red;">*</span></label>
                                 <!-- <input type="file" class="form-control" name="img" required> -->
                                 <input type="file"class="form-control" name="img" required>
                               </div>
                                

                             </div>

                             <div class="row">
                               <div class="form-group col-sm-12">
                                 <label for="stats">Description<span style="color:red;">*</span></label>
                                 <textarea name="description" id="" cols="30" rows="4" class="form-control" required></textarea>
                               </div>
                                

                             </div>

                             
                        
                    
                           </div>
                       </div>
                   </div>
                     </form>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer">
                  <div class="btn-group">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                  <button type="submit" class="btn btn-primary" name="businessRequestAdd"><i class="fa fa-check"></i> Submit</button>



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