<div class="modal fade" id="news<?php echo $newsId;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <img src="../admin/newsimgupload/<?php echo $newsImg;?>" alt="wew" style="width: 100%; "class="img-fluid" >

           <span style="color: #a9a6a6; font-size: 12px"><?php echo $time;?></span>
           <div class="portfolio-info" style="padding: 0 8px;">
                <h4 style="text-align: center; padding: 25px 0 3px; font-weight: bold"><?php echo $title;?></h4>
                <span style="color: #a9a6a6;"><?php echo $description;?></span>
            </div>
        </div>
        <div class="modal-footer">
        </div>
        </div>
    </div>
</div>