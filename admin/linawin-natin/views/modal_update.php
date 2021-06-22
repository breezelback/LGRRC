
<!-------------------------------------------- UPDATE VIDEO  ------------------------------------------------------>

<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title text-white" id="exampleModalLabel" style="margin: 0 auto;">Update Video <i class="fa fa-play-circle"></i></h5>
      </div>
      <div class="modal-body">
        Public Video Link:
        <input type="text" class="form-control" id="updateLink">
      
        Title:
        <input type="text" class="form-control" id="updateTitle">

        <div class="row">
          <div class="col-sm-6">
            Season:
            <input type="number" class="form-control" id="updateSeason">
          </div>
          <div class="col-sm-6">
            Date Uploaded:
            <input type="date" class="form-control" id="updateDate">
          </div>
        </div>

      </div>    
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnUpdateVideo">Update <i class="fa fa-check"></i></button>
      </div>
    </div>
  </div>
</div>

<!-------------------------------------------- UPDATE VIDEO  ------------------------------------------------------>
