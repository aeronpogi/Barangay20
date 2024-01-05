<div class="modal fade" id="editBusiness<?php echo $buid;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Business</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form">

                            <form action="includes/businessEdit.inc.php" method="POST" enctype="multipart/form-data">
                                <div class="element">
                                    <label for="">Business Name</label>
                                    <input type="text" class="form-control" id="bname" aria-describedby="emailHelp" name="ebname" required value="<?php echo $row['businessName'];?>">
                                </div>
    
                     
                            
    
                                <div class="element">
                                    <label for="">Contact No.</label>
                                    <input type="tel" class="form-control" id="cnumber" aria-describedby="emailHelp" name="ebcontactno"required  value="<?php echo $row['businessContactno'];?>">
                                </div>
    
                                <div class="element">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" id="uEmail" aria-describedby="emailHelp"  name="ebemail"required  value="<?php echo $row['businessEmail'];?>"style="text-transform: lowercase;">
                                </div>
                          
                        
    
                                <div class="element">
                                    <label for="">Location</label>
                                    <input type="text" class="form-control" id="location" aria-describedby="emailHelp" name="elocation" required style="text-transform: ;" placeholder="Address"  value="<?php echo $row['location'];?>">
                                    <!-- <label for=""></label>
                                    <input type="text" name="lat" required style="text-transform: ;" placeholder="Latitude" required>
                                    <label for=""></label>
                                    <input type="text" name="lon" required style="text-transform: ;"placeholder="Longittude" required> -->
                                </div>

                                <div class="element" style="margin-bottom: 1em">
                                    <label for="">Business Photo</label>
                                    <input type="file" class="form-control" id="img" name="img" value="<?php echo $img?>">	
                                </div>

                                <div class="element" style="margin-bottom: 1em">
                                    <label for="">Description</label>
                                    <textarea class="form-control" id="Purpose" rows="3" required name="description" value="<?php echo $row["description"];?>"><?php echo $row["description"];?></textarea>
                                </div>
                            
                                <div class="modal-footer" style="padding: 1em 0">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <input type="hidden" name="ebuid" value="<?php echo $row['ID'];?>">
                                    <button type="submit" class="btn btn-primary"  name="be-submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                   
                    </div>
                </div>
            </div>