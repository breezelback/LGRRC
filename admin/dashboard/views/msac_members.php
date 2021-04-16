<?php 
  $sql = ' SELECT `id`, `agencyName`, `address`, `contactNumber`, `email`, `imageName`, `dateUploaded` FROM `tbl_msac` ORDER BY `dateUploaded` DESC LIMIT 6 ';
  
  $exec = $conn->query($sql);

?>

<div class="col-xl-4 col-sm-4">
  <div class="card-header bg-success text-white">
    <i class="fa fa-users"></i> Newly Added MSAC Members
  </div>

  <div class="row mt-1">
  
    <?php while ($res = $exec->fetch_assoc()): ?>
      <?php $newDate = date("M d, Y | h:i:sA", strtotime($res['dateUploaded'])); ?>
      <div class="col-xl-12 col-sm-12">
        <a class="list-group-item list-group-item-action" style="padding: 0.66rem 1.25rem;" href="msac.php">
          <div class="media">
            <img class="d-flex mr-3 rounded-circle" src="../images/msac/<?php echo $res['imageName']; ?>" alt="" style="width: 50px;">
            
            <div class="media-body">
              <strong><?php echo $res['agencyName']; ?></strong>
              <div class="text-muted smaller"><?php echo $newDate; ?></div>
            </div>
          </div>
        </a>
      </div>    
    <?php endwhile ?>
    <div class="col-xl-12 col-sm-12">
      <a class="list-group-item list-group-item-action" href="msac.php">View all MSAC members</a>
    </div>  
  </div>  
</div>

  