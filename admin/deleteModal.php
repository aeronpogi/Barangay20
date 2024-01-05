
<div class="modal fade" id="delete<?php echo $id ?>">
        <div class="modal-dialog" style="width:400px !important;">
            <form action="delete.php" method="POST">
              <div class="modal-content">
                <div class="modal-header bg-danger">
                <input name="id" type="hidden" value="<?php echo $id ?>"/>
                <input name="rbi" type="hidden" value="<?php echo $rbi ?>"/>
                <input name="famiId" type="hidden" value="<?php echo $famId ?>"/>
                <input name="page" type="hidden" value="<?php echo $page ?>"/>
                <input name="blotterSession_id" type="hidden" value="<?php echo $blotterSession_id ?>"/>
                  <h6 class="modal-title" style="margin-left:15%">Are you sure you want archive?</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> No</button>
                  <button type="submit" class="btn btn-primary" name="btn_delete"><i class="fa fa-check"></i> Yes</button>
                </div>
              </div>
              </form>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>