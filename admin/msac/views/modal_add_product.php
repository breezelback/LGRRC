<div id="modalAddProduct" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title" style=" margin: 0 auto;">Add MSAC Member</h4>
      </div>
      <div class="modal-body">
        <center>
          <img class="ml-2" src="../images/attachedagency_dilgcentral.png" style="width: 170px; height: 170px; border-radius: 50%;" id="image_editProfile"><br>
          <label class="btn btn-primary btn mt-2" style="width:150px;">
          <span class="fa fa-picture"></span>&nbsp&nbspBrowse Image<input type="file" style="display: none;" id="file_editProfile">
          </label>
        </center>
        
        Agency Name:
        <input type="text" class="form-control" id="agencyName" name="">
        Address:
        <input type="text" class="form-control" id="address" name="">
        Contact Number:
        <input type="text" class="form-control" id="contactNumber" name="">
        Website:
        <input type="text" class="form-control" id="email" name="">


      </div><!-- <div class="modal-body"> -->
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close <i class="fas fa-times"></i></button>
        <button type="button" class="btn btn-success" id="btnInsertMsac">Save <i class="fas fa-check"></i></button>
      </div>
    </div>

  </div>
</div>