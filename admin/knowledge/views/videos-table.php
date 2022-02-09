
<div class="table-responsive" style="font-family: ui monospace;">
  <table class="table table-bordered" id="table_kp_videos" width="100%" cellspacing="0" style="font-size: 15px;">
    <thead>
      <tr>
        <th><center>Video</center></th>
        <th>Title</th>
        <th>Album</th> 
        <th>Date Uploaded</th>
        <th width="7%"><center>Action</center></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($videos as $key => $video): ?> 
       <tr>
        <td>
            <div id="td_filename<?php echo $video['id'];?>" data-data1="<?php echo $video['video_link']; ?>">
	            <center>
	            	<iframe src="<?php echo $video['video_link']; ?>" width="70%" height="150" allow="autoplay"></iframe>
	            </center>
          </div> 
        </td>
        <td>
          <div id="td_title<?php echo $video['id'];?>" data-data2="<?php echo $video['title']; ?>">
            <?php echo $video['title']; ?>
          </div>
        </td>
        <td>
          <div id="td_status<?php echo $video['id'];?>" data-data3="<?php echo $video['status']; ?>">
            <?php echo $video['album']; ?>
          </div>
        </td>
        <td>
          <div id="td_dateuploaded<?php echo $video['id'];?>" data-data1="<?php echo $video['date_created']; ?>">
            <?php echo $video['date_created']; ?>
          </div>
        </td>
        <td>
          <center>
            <div class="cell-button-alignment">
              <div class="cell-button btn-group">
                <button type="button" id="td_btn_edit" data-id_edit="<?php echo $video['id'];?>" data-toggle= "modal" data-target="#modalUpdatevideo" class="btn btn-md btn-primary">
                  <span class="fas fa-edit"></span>
                </button>
                
                <button type="button" id="td_btn_delete" data-id_delete="<?php echo $video['id'];?>" class="btn btn-md btn-danger">
                  <span class="fa fa-trash"></span>
                </button>
              </div>
            </div>
          </center>
        </td>

      </tr>
    <?php endforeach ?>    
  </tbody>
</table>
</div>
