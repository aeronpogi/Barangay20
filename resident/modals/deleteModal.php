
<div class="modal fade" id="delete<?php echo $buid ?>">
        <div class="modal-dialog" style="width:400px !important;">
            <form action="includes/delete.inc.php" method="POST">
              <div class="modal-content">
                <div class="modal-header bg-danger" style="display: flex; justify-content: center; background-color: #4c6085; color: white;">
                <input name="id" type="hidden" value="<?php echo $buid ?>"/>
                <input name="rbi" type="hidden" value="<?php echo $rbi ?>"/>
                <input name="page" type="hidden" value="<?php echo $page ?>"/>
                  <h6 class="modal-title" style="letter-spacing: 1px;">Are you sure you want cancel?</h6>
                
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal" >No</button>
                  <button type="submit" class="btn btn-primary" name="btn_delete" style="background-color: #4c6085"> Yes</button>
                </div>
              </div>
              </form>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>



