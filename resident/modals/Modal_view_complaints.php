<div class="modal fade" id="view<?php echo $id;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Complaint</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form>
            <label for="" class="form-label">Status</label>
           <input type="text"  class="form-control" value="<?php echo $row['status'];?>" readonly>
           <br>
           <label for="" class="form-label">Narration</label>
           <input type="text"  class="form-control" value="<?php echo $row['narration'];?>" readonly>
           <br>
           <label for="" class="form-label">Date</label>
           <input type="text"  class="form-control" value="<?php echo $row['dates'];?>" readonly>
           <br>
           <label for="" class="form-label">Details</label>
           <textarea  cols="30" rows="4" class="form-control" readonly><?php echo $row['details'];?></textarea>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>