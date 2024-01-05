<div class="modal fade" id="modalPass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form  id="changePassForm" action="includes/password.inc.php"  method="post">
                  

                    <div class="form-group col-md-12" id="" style="margin-top: 25px">
                        <label for="exampleInputEmail1" class="form-label">Old Password</label>
                        <input type="password"  class="form-control" aria-describedby="passwordHelpInline" name="oldpwd" required>
                        <br>
                        <label for="exampleInputEmail1" class="form-label">New Password</label>
                        <input type="password" class="form-control" aria-describedby="passwordHelpInline" name="newpwd" required id="newpwd" onkeyup='check()'> 
                        <br>
                        <label for="exampleInputEmail1" class="form-label">Confirm new password</label>
                        <input type="password" class="form-control" aria-describedby="emailHelp" name="newpwdrepeat" required id="newpwdrepeat"  onkeyup='check()' >
                        
                            <div id="passwordStrength" class="strength0" ></div>
                            <div id="pswd_info" style="margin-top: 6px;">
                                    <strong>Strong Password Tips:</strong>
                                    <ul>
                                            <li class="maxLength" >At least 6 characters</li>
                                            <li class="oneNumber" >At least one number</li>
                                            <li class="upCase" >At least one uppercase letter</li>
                                            <li class="oneSpecial">At least one special character</li>
                                            <li class="pwdmatch">Password Matched</li>
                                    </ul>
                            </div><!-- END pswd_info -->

                           <!-- <button type="submit" id="btn_sbmt" class="btn btn-primary"  name="submit" disabled="disabled">Submit</button> -->
                    
                    </div>
      
              </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <!-- <a href="userProfile.php" class="btn btn-secondary" >Close</a> -->
            <button type="submit" id="btn_sbmt" class="btn btn-primary"  name="submit" >Submit</button>
          </div>
            </form>
    </div>
  </div>
</div>