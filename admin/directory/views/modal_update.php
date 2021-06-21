<!-------------------------------------------------- MODAL UPDATE -------------------------------------------------------------->
<div id="modalUpdateExpert" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title" style=" margin: 0 auto;">Update Expert Member</h4>
      </div>
      <div class="modal-body">
        <center>
          <img class="ml-2" src="../images/attachedagency_dilgcentral.png" style="width: 170px; height: 170px; border-radius: 50%;" id="image_updateExpert"><br>
          <label class="btn btn-primary btn mt-2" style="width:150px;">
          <span class="fa fa-picture"></span>&nbsp&nbspBrowse Image<input type="file" style="display: none;" id="file_updateExpert">
          </label>
        </center>
        
        Name:
        <input type="text" class="form-control" id="updateName" name="">
        Expertise <i>(Please add , if 2 or more field of expertise)</i>:
        <input type="text" class="form-control" id="updateExpertise" name="">
        Position:
        <input type="text" class="form-control" id="updateAddress" name="">
        Email:
        <input type="text" class="form-control" id="updateEmail" name="">
        Licenses/Accreditation:
        <input type="text" class="form-control" id="updateContactNumber" name="">


      </div><!-- <div class="modal-body"> -->
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close <i class="fas fa-times"></i></button>
        <button type="button" class="btn btn-success" id="btnUpdateExpert">Update <i class="fas fa-check"></i></button>
      </div>
    </div>

  </div>
</div>
<!-------------------------------------------------- MODAL UPDATE -------------------------------------------------------------->
