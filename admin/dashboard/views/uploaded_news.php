<div class="col-xl-8 col-sm-8 mb-3">
  <div class="card-header bg-primary text-white">
    <i class="fa fa-newspaper-o"></i> Newly Uploaded News
  </div>

  <div class="row mt-1">
    <!-- <div class="col-md-12"> -->
      
      <?php 
    $sql = ' SELECT `id`, `title`, `description`, `imageName`, `status`, `dateUploaded`, `author` FROM `tbl_news` ORDER BY `dateUploaded` DESC LIMIT 2 ';
    $exec = $conn->query($sql);
    while ($res = $exec->fetch_assoc()) 
    {
      $newDate = date("M d, Y | h:i:sA", strtotime($res['dateUploaded']));
     ?>
      <div class="col-xl-6 col-sm-12">

          <!-- Example Social Card-->
          <!-- <div class="col-sm-4 mb-3"> -->
            <div class="card ">
              <a href="news.php">
                <img class="card-img-top img-fluid" src="../images/news/<?php echo $res['imageName']; ?>" alt="" style="width: 500px; height: 350px;">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><?php echo $res['author']; ?></h6>
                <p class="card-text small"><?php echo $res['title']; ?>
                  <!-- <a href="#">#surfsup</a> -->
                </p>
              </div>
              <!-- <hr class="my-0"> -->
              <div class="card-footer small text-muted"><?php echo $newDate; ?></div>
            </div>
          <!-- </div> -->
      </div>
    <?php } ?> 
    <!-- </div> -->
  </div>


  
</div>

  