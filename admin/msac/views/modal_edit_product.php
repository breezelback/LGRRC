<div id="modalUpdateProduct" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title" style=" margin: 0 auto;">Update MSAC Member</h4>
      </div>
      <div class="modal-body">
        <div class="form-group mb-4">
          <center>
            <img class="ml-2" src="../images/attachedagency_dilgcentral.png" style="width: 170px; height: 170px; border-radius: 50%;" id="image_updateMsac"><br>
            <label class="btn btn-primary btn mt-2" style="width:150px;">
            <span class="fa fa-picture"></span>&nbsp&nbspBrowse Image<input type="file" style="display: none;" id="file_updateMsac">
            </label>
          </center>
        </div>
        

        <div class="form-group">
          <label class="control-label mb-1">Agency Name:</label><br>
          <input type="text" class="form-control" id="updateAgencyName" name="updateAgencyName" placeholder="Agency Name">
        </div>

        <div class="form-group">
          <label class="control-label mb-1">Address:</label><br>
          <input type="text" class="form-control" id="updateAddress" name="updateAddress" placeholder="Address">
        </div> 

        <div class="form-group">
          <label class="control-label mb-1">Contact Number:</label><br>
          <input type="text" class="form-control" id="updateContactNumber" name="updateContactNumber" placeholder="Contact Number">
        </div>  

        <div class="form-group">
          <label class="control-label mb-1">Website:</label><br>
          <input type="text" class="form-control" id="updateEmail" name="updateEmail" placeholder="Website">
        </div>


      </div><!-- <div class="modal-body"> -->
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close <i class="fas fa-times"></i></button>
        <button type="button" class="btn btn-success" id="btnUpdateMsac">Save <i class="fas fa-check"></i></button>
      </div>
    </div>

  </div>
</div>