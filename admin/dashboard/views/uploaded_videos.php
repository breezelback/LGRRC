<?php 
  $sql = ' SELECT `id`, `videoLink`, `videoTitle`, `dateUploaded`, `category`, `videoSeason` FROM `tbl_videos` ORDER BY `dateUploaded` DESC LIMIT 3 ';
  
  $exec = $conn->query($sql);
?>

<div class="col-xl-12 col-sm-12 mb-3">
  <div class="card-header bg-danger text-white">
    <i class="fa fa-video"></i> New Embedded Videos
  </div>

  <div class="row mt-1">
    <?php while ($res = $exec->fetch_assoc()): ?>
      <?php $newDate = date("M d, Y | h:i:sA", strtotime($res['dateUploaded'])); ?>
      <div class="col-xl-4 col-sm-12" data-aos="fade-up" data-aos-delay="100">
        <div class="card" style="min-height: 338px!important;">
          <div class="fb-video card-img-top" data-href="<?php echo $res['videoLink']; ?>" data-width="500" data-show-text="false">
            <blockquote cite="<?php echo $res['videoLink']; ?>" class="fb-xfbml-parse-ignore">
              <a href="<?php echo $res['videoLink']; ?>">
                <?php echo $res['videoTitle']; ?>
              </a>
              </blockquote>
          </div>
          <div class="card-body">
            <b><?php echo mb_strimwidth($res['videoTitle'], 0, 50, "..."); ?></b>
          </div>
          <div class="card-footer small text-muted">
            <p class="card-text text-muted"><?php echo $newDate; ?></p>
          </div>  
        </div>
      </div>
    <?php endwhile ?>  
  </div>
</div>