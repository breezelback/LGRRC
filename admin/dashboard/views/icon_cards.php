<div class="col-xl-3 col-sm-6 mb-3">
  <div class="card text-white bg-secondary o-hidden h-100">
    <div class="card-body">
      <div class="card-body-icon">
        <i class="fa fa-fw fa-users"></i>
      </div>

      <?php 
      $sql = ' SELECT COUNT(`id`) as totalUser FROM `tbl_user` ';
      $exec = $conn->query($sql);
      $res = $exec->fetch_assoc();
       ?>

      <div class="mr-5"><?php echo $res['totalUser']; ?> Total Users</div>
    </div>
    <a class="card-footer text-white clearfix small z-1" href="users.php">
      <span class="float-left">View Details</span>
      <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
    </a>
  </div>
</div>
<div class="col-xl-3 col-sm-6 mb-3">
  <div class="card text-white bg-warning o-hidden h-100">
    <div class="card-body">
      <div class="card-body-icon">
        <i class="fa fa-fw fa-layer-group"></i>
      </div>

      <?php 
      $sql = ' SELECT COUNT(`id`) as totalMsac FROM `tbl_msac` ';
      $exec = $conn->query($sql);
      $res = $exec->fetch_assoc();
       ?>


      <div class="mr-5"><?php echo $res['totalMsac']; ?> MSAC Members</div>
    </div>
    <a class="card-footer text-white clearfix small z-1" href="msac.php">
      <span class="float-left">View Details</span>
      <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
    </a>
  </div>
</div>
<div class="col-xl-3 col-sm-6 mb-3">
  <div class="card text-white bg-success o-hidden h-100">
    <div class="card-body">
      <div class="card-body-icon">
        <i class="fa fa-fw fa-book"></i>
      </div>

      <?php 
      $sql = ' SELECT COUNT(`id`) as totalBook FROM `tbl_knowledge_products` ';
      $exec = $conn->query($sql);
      $res = $exec->fetch_assoc();
       ?>

      <div class="mr-5"><?php echo $res['totalBook']; ?> Knowledge Products</div>
    </div>
    <a class="card-footer text-white clearfix small z-1" href="knowledge-product.php">
      <span class="float-left">View Details</span>
      <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
    </a>
  </div>
</div>
<div class="col-xl-3 col-sm-6 mb-3">
  <div class="card text-white bg-danger o-hidden h-100">
    <div class="card-body">
      <div class="card-body-icon">
        <i class="fa fa-fw fa-user-tie"></i>
      </div>

      <?php 
      $sql = ' SELECT COUNT(`id`) as totalExpert FROM `tbl_expert` ';
      $exec = $conn->query($sql);
      $res = $exec->fetch_assoc();
       ?>

      <div class="mr-5"><?php echo $res['totalExpert']; ?> Total Experts</div>
    </div>
    <a class="card-footer text-white clearfix small z-1" href="directory.php">
      <span class="float-left">View Details</span>
      <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
    </a>
  </div>
</div>