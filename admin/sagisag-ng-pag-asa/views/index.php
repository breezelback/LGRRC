<?php require_once 'sagisag-ng-pag-asa/controller/sagisagController.php'; ?>

<main class="page-content pt-2">
    <div class="container-fluid p-5">
        
	    <div class="row">
	        <div class="col-md-12 mt-2">
	            <button class="btn btn-success float-right" data-toggle="modal" data-target="#modalEmbed" id="btnAddNews">Embed Video <i class="fa fa-play-circle"></i></button>
	            <center><h2>Sagisag ng Pag-asa Videos</h2></center>
	            <br>
	             <div class="card mb-3">
	              <div class="card-header">
	                <i class="fa fa-table"></i> Video Management
	              </div>
	              <div class="card-body">
	                <div class="table-responsive" style="font-family: ui monospace;">
	                  <table class="table table-bordered" id="result1" width="100%" cellspacing="0" style="font-size: 15px;">
	                    <thead>
	                      <tr>
	                        <th>Video</th>
	                        <th>Link</th>
	                        <th>Title</th>
	                        <th>Season</th>
	                        <th>Date Uploaded</th>
	                        <th width="7%"><center>Action</center></th>
	                      </tr>
	                    </thead>
	                    <tbody>
	                    	<?php include 'video_table.php'; ?>
	                    </tbody>
	                  </table>
	                </div>
	              </div>
	              <div class="card-footer small text-muted"></div>
	            </div>


	        </div>
	    </div>

    </div><!-- container -->
</main>



<?php include 'modal_add.php'; ?>
<?php include 'modal_update.php'; ?>
<?php include 'function.js'; ?>