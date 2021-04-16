<?php 
  $sql = ' SELECT `dateDownloaded` FROM `tbl_downloads` ORDER BY `dateDownloaded` DESC LIMIT 2 ';
  $exec = $conn->query($sql);
  $res = $exec->fetch_assoc();
  $newDate = date("M d, Y | h:i:sA", strtotime($res['dateDownloaded']));
?>    

<div class="col-xl-12 col-sm-12 mb-3">
  <div class="card-header bg-primary text-white">
    <i class="fa fa-area-chart"></i> Knowledge Product Borrowed History
  </div>

  <div class="row mt-1">
    <div class="col-xl-12 col-sm-12">
      <div class="card">
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
        <div class="card-footer small text-muted">
          Updated <?php echo $newDate; ?>
        </div>
      </div>  
    </div>  
  </div>  

</div>