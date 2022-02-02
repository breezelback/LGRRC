<!----------------------------------------------------------------------- MODAL ADD------------------------------------------------------------------ -->
<div id="modalAddProduct" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <form action="" onsubmit="insertData(); return false;">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <h4 class="modal-title" style=" margin: 0 auto;">Add News</h4>
        </div>
        <div class="modal-body">
           <center>
              <p id="fileName" style="font-size:20px;"></p>
              <label class="btn btn-secondary btn mt-2" style="width:150px;">
              &nbsp;Browse File <span class="fa fa-paperclip"></span><input type="file" style="display: none;" id="file_editProfile">
              </label>
            </center>
            File Title:
            <input type="text" class="form-control" id="title">
            Status:
            <select name="status" id="status" class="form-control">
              <option value="published">Publish</option>
              <option value="draf">Draf</option>
            </select>

        </div><!-- <div class="modal-body"> -->

        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close <i class="fas fa-times"></i></button>
          <button type="button" class="btn btn-success" id="btnInsertProduct">Save <i class="fas fa-check"></i></button>
          <!-- <input type="submit" value="Check the submitted code" /> -->
        </div>
      </div>
      <!-- <div class="modal-content"> -->
    </form>


  </div>
</div>
<!----------------------------------------------------------------------- MODAL ADD------------------------------------------------------------------ -->




<!----------------------------------------------------------------------- MODAL UPDATE------------------------------------------------------------------ -->
<div id="modalUpdateProduct" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <form action="" onsubmit="insertData(); return false;">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <h4 class="modal-title" style=" margin: 0 auto;">Add News</h4>
        </div>
        <div class="modal-body">
           <center>
              <p id="updateFilename" style="font-size:20px;"></p>
              <label class="btn btn-secondary btn mt-2" style="width:150px;">
              &nbsp;Browse File <span class="fa fa-paperclip"></span><input type="file" style="display: none;" id="updateFile">
              </label>
            </center>
            File Title:
            <input type="text" class="form-control" id="updateTitle">
            Status:
            <select name="status" id="updateStatus" class="form-control">
              <option value="published">Publish</option>
              <option value="draft">Draft</option>
            </select>

        </div><!-- <div class="modal-body"> -->

        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close <i class="fas fa-times"></i></button>
          <button type="button" class="btn btn-success" id="btnUpdateProduct">Save <i class="fas fa-check"></i></button>
          <!-- <input type="submit" value="Check the submitted code" /> -->
        </div>
      </div>
      <!-- <div class="modal-content"> -->
    </form>


  </div>
</div>
<!----------------------------------------------------------------------- MODAL UPDATE------------------------------------------------------------------ -->
