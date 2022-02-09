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

      .videoBody
      {
        height: 150px;
        overflow-y: scroll;
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
        <div class="col">
          <center>
           <!--  <button class="btn btn-warning">PDFs</button>
            <button class="btn btn-primary">Videos</button> -->
            <ul class="nav nav-tabs nav-fill">
              <li class="nav-item">
                <a class="nav-link vid-options" href="knowledge-products.php">PDFs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link vid-options active active-link" aria-current="page" href="knowledge-products-videos.php">Videos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link vid-options" href="knowledge-products-links.php">Links</a>
              </li>
            </ul>

          </center>
        </div>
      </div>
      
      <div class="row mt-4">
        <div class="col-md-12">
        </div>
      </div>
      <?php 
      if (isset($_POST['album'])) 
      {
        $season = $_POST['album'];

        if ($_POST['album'] == 'all') 
        {
          $queryAdd = '';
          $titleAdd = 'All Program';
        }
        else
        {
          $queryAdd = 'WHERE `album` = "'.$_POST['album'].'" ';
          $titleAdd = $season;
        }
      }
      else
      {
        $queryAdd = '';
        $titleAdd = '';
      }
       ?>
      <center>
        <form action="" method="post">
          <select name="album" id="album" class="form-control" style="width: 20%;" onchange="this.form.submit();">
            <option selected disabled>Select Program</option>
            <option value="all">All</option>
            <?php 
            $sqlSeason = ' SELECT DISTINCT(`album`) FROM `tbl_kp_videos` ORDER BY `album` ';
            $exec = $conn->query($sqlSeason);
            while ($season = $exec->fetch_assoc()) {
             ?>
              <option value="<?php echo $season['album']; ?>"><?php echo $season['album']; ?></option>
            <?php } ?>
          </select>
        </form>
        <h5 class="mt-2"><?php echo $titleAdd; ?></h5>
      </center>
      <br><hr>

      <div class="row mt-3">

        <?php 
        $sql = ' SELECT `id`, `video_link`, `title`, `album`, `status`, DATE_FORMAT(`date_created`, "%M %d, %Y") AS date_created FROM `tbl_kp_videos` '.$queryAdd.' ORDER BY id DESC ';
        $exec = $conn->query($sql);
        while ($row = $exec->fetch_assoc())
        {
         ?>

        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card">
            <iframe src="<?php echo $row['video_link']; ?>" width="100%" height="350" allow="autoplay"></iframe>
            <div class="card-body videoBody">
              <p class="card-text"><b><?php echo $row['title']; ?></b></p>
              <p class="card-text text-muted"><?php echo $row['date_created']; ?></p>
            </div>
          </div>
        </div>

      <?php } ?>
      </div>



      </div>
    </div>
  <!-- </div> --> 


  <br><br><br>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/js_includes.php'; ?>

    <script type="text/javascript">

    $('#navBook').addClass('active');



  





    </script>



  </body>
</html>