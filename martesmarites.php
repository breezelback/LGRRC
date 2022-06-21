<?php 
include 'function php/conn.php';
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="LGRRC Website">
    <meta name="keywords" content="dilg,lgrc calabarzon,lgrrc calabarzon,lgrrc,lgrc, calabarzon, dilg calabarzon">
    <meta name="author" content="Jeck Castillo">
    <link rel="icon" type="image/png" href="images/lgrc_logo.png">
    <?php include 'includes/css_includes.php'; ?>

    <title>LGRRC</title>
    <style type="text/css">

      .menuOutput
      {
        height: 400px;
        overflow-y: scroll;
      }
      .menuOutput::-webkit-scrollbar {
          width: 3px;
      }
       
      .menuOutput::-webkit-scrollbar-track {
          -webkit-box-shadow: inset 0 0 6px #d7e5fc; 
          border-radius: 5px;
          /*color: #d7e5fc;*/
      }
       
      .menuOutput::-webkit-scrollbar-thumb {
          border-radius: 10px;
          -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
      }

    </style>
  </head>
  <body>
  <div class="bgImageSmall" style="background-image: url(images/hd7.jpg); background-position: 50% -25px;">
    <!-- Navbar-->
    <?php include 'includes/header.php'; ?>

  </div>
  <!-- bgImage -->


    <hr>

   <!-- <div class="parallax"> -->
    <!-- NEWS -->
     <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        </div>
      </div>
      <?php 
      if (isset($_POST['videoSeason'])) 
      {
        $season = $_POST['videoSeason'];
        $queryAdd = 'AND `videoSeason` = "'.$_POST['videoSeason'].'" ';
        $titleAdd = 'SEASON '.$season;
      }
      else
      {
        $queryAdd = '';
        $titleAdd = '';
      }
       ?>
      <center>
        <h3>#MartesMarites</h3>
        <!-- <h6>Sagisag ng Pag-Asa is a documentation of local governance best practices of LGUs.</h6> -->
        <h4>Videos</h4>
        <form action="" method="post">
          <select name="videoSeason" id="videoSeason" class="form-control" style="width: 10%;" onchange="this.form.submit();">
            <option selected disabled>Select Season</option>
            <?php 
            $sqlSeason = ' SELECT DISTINCT(`videoSeason`) FROM `tbl_videos` WHERE `category` = "sagisag ng pagasa" ORDER BY `videoSeason` ';
            $exec = $conn->query($sqlSeason);
            while ($season = $exec->fetch_assoc()) {
             ?>
              <option value="<?php echo $season['videoSeason']; ?>">Season <?php echo $season['videoSeason']; ?></option>
            <?php } ?>
          </select>
        </form>
        <h5 class="mt-2"><?php echo $titleAdd; ?></h5>
      </center>
      <br><hr>
      <div class="row">
        

        <?php 
        
        $sql = ' SELECT `id`, `videoLink`, `videoTitle`, `dateUploaded`, `category` FROM `tbl_videos` WHERE `category` = "sagisag ng pagasa" '.$queryAdd.' ';
        $exec = $conn->query($sql);
        while ($res = $exec->fetch_assoc()) {
        $phpdate = strtotime( $res['dateUploaded'] );
        $mysqldate = date( 'M d, Y', $phpdate );
         ?>

        <?php } ?>

        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card">
            <div class="fb-video card-img-top" data-href="https://www.facebook.com/dilgr4a/videos/541790450722702" data-width="500" data-height="300" data-show-text="false"><blockquote cite="<?php echo $res['videoLink']; ?>" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dilgr4a/videos/541790450722702">SOCE</a><p></blockquote></div>
            <div class="card-body">
              <p class="card-text"><b>SOCE</b></p>
              <p class="card-text text-muted">June 21, 2022</p>
            </div>
          </div>
        </div>






      </div>
    </div>
  <!-- </div> --> 


  <br><br><br>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/js_includes.php'; ?>

    <script type="text/javascript">

    // $('#navAbout').addClass('active');



  





    </script>



  </body>
</html>