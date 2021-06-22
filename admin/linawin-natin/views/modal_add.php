<!-------------------------------------------- EMBED VIDEO  ------------------------------------------------------>

  <div class="modal fade" id="modalEmbed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h5 class="modal-title text-white" id="exampleModalLabel" style="margin: 0 auto;">Embed Video <i class="fa fa-play-circle"></i></h5>
        </div>
        <div class="modal-body">
          Public Video Link:
          <input type="text" class="form-control" id="videoLink">
        
          Title:
          <input type="text" class="form-control" id="videoTitle">

          <div class="row">
            <div class="col-sm-6">
              Season:
              <input type="number" class="form-control" id="videoSeason">
            </div>
            <div class="col-sm-6">
              Date Uploaded:
              <input type="date" class="form-control" id="videoDate">
            </div>
          </div>

        </div>    
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="btnUploadVideo">Upload <i class="fa fa-check"></i></button>
        </div>
      </div>
    </div>
  </div>

  <!-------------------------------------------- EMBED VIDEO  ------------------------------------------------------>
