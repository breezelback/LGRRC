<!----------------------------------------------------------------------- MODAL ADD------------------------------------------------------------------ -->
<div id="modalAddProductVideos" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <form action="" onsubmit="insertData(); return false;">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <h4 class="modal-title" style=" margin: 0 auto;">Add Video</h4>
        </div>
        <div class="modal-body">
            Google Drive Video Link:
            <input type="text" class="form-control" id="video_link">
            Title:
            <input type="text" class="form-control" id="title">
            Album:
            <input type="text" class="form-control" id="album">

        </div><!-- <div class="modal-body"> -->

        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close <i class="fas fa-times"></i></button>
          <button type="button" class="btn btn-success" id="btnInsertProductVideos">Save <i class="fas fa-check"></i></button>
          <!-- <input type="submit" value="Check the submitted code" /> -->
        </div>
      </div>
      <!-- <div class="modal-content"> -->
    </form>


  </div>
</div>
<!----------------------------------------------------------------------- MODAL ADD------------------------------------------------------------------ -->
