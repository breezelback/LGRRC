<?php 
require "conn.php";

$id = $_GET['id'];
$sql = ' SELECT `id`, `filename`, `title`, `status`, `dateUploaded` FROM `tbl_knowledge_products` WHERE `id` = "'.$id.'" ';
$exec = $conn->query($sql);
$result = $exec->fetch_assoc();

$phpdate = strtotime( $result['dateUploaded'] );
$mysqldate = date( 'M d, Y', $phpdate );


$selectDownloads = ' SELECT COUNT(`id`) as total FROM `tbl_downloads` WHERE `bookId` = "'.$id.'" ';
$execDownloads = $conn->query($selectDownloads);
$resDownloads = $execDownloads->fetch_assoc();


 ?>

<div class="card mb-3">
  <div class="card-header text-white">
  </div>
  <div class="card-body">
  	<div class="row">
  		<div class="col-sm-4">
		    <div id="my_pdf_viewer">
		        <div id="canvas_container">
		            <canvas id="pdf_renderer"></canvas>
		            <input type="text" id="filename" value="<?php echo $result['filename']; ?>" style="display: none;">
		        </div>

		    </div>
  		</div>
  		<div class="col-sm-8">
  			<center>
   				<h4><?php echo $result['title']; ?></h4>
   				<p class="text-muted"><?php echo $mysqldate; ?></p><br>
  				<p><b> <?php echo $resDownloads['total']; ?> Downloads </b></p><br>
			  	<div class="cell-button-alignment">
				    <div class="cell-button btn-group">
				     <button type="button" id="td_btn_edit" data-id_edit="<?php echo $result["filename"].'/'.$result["id"]; ?>" class="btn btn-md btn-primary">
				     Read Online <span class="fa fa-book-open"></span></button>
				     <button type="button" id="td_btn_delete" data-id_delete="<?php echo $result["filename"].'/'.$result["id"]; ?>" class="btn btn-md btn-danger">
				     Download <span class="fa fa-download"></span></button>
			     </div>
  			</center>
  		</div>
  	</div>

  </div>
  <div class="card-footer small text-muted">
  	<center>
    </center>
    </div>
  </div>
</div>