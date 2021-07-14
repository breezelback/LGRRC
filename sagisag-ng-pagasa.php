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
  <div class="bgImage" style="background-image: url(images/hd7.jpg); background-position: 50% -25px;">
     <!-- Navbar-->
     <?php include 'includes/header.php'; ?>

<br><br><br>
      <div class="container">

          <div class="pt-5">

            <div class="row align-items-center">

              <div class="col-lg-12 mb-4 text-white headingContent">
                <header class="py-5 mt-5">
                    <h1 class="display-6 headingText">Sagisag ng Pag-asa</h1>
                    <p class="lead mb-0 headingDesc">Sagisag ng Pag-Asa is a documentation of the COVID-19 best responses and practices of Local Government Units within the CALABARZON Region. During the onset of the enhanced community quarantine, the local government’s adaptability towards the raging pandemic was put to the test. But because of this, the LGUs’ excellence in governance also stood out and Sagisag ng Pag-Asa became a platform where LGUs can showcase their locality’s innovative programs. This initiative of DILG CALABARZON was a way to broadcast these outstanding programs to other LGUs and communities, ultimately promoting knowledge sharing so that it may be replicated to other localities that have similar contexts. It also aims to stimulate design-thinking and come up with relevant and appropriate solutions to the communities’ differing needs. True to its name, this program aspires to be a symbol of hope to everyone. We see hope when we see how our local leaders are responding to the pandemic. We see hope when we see local leaders imitating and replicating each other’s best practices. We see hope when we instigate a community that sets aside personal agenda for the betterment of every Juan/Juana’s life. </p>
                    <a href="#page2" class="btn btn-primary btn-lg mt-3 scrollTo"><i class="fa fa-angle-double-down"></i></a>
                </header>
              </div>



            </div>
            <!-- <div class="row"> -->
          </div>
      </div>
      <span id="page2"></span>

    </div>
    <!-- bgImage -->


    <hr>

   <!-- <div class="parallax"> -->
    <!-- NEWS -->
     <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form action="" method="post">
            <select name="videoSeason" id="videoSeason" class="form-control float-right" style="width: 10%;" onchange="this.form.submit();">
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
      <center><h3>Sagisag ng Pag-asa Videos</h3></center>
      <center><h4><?php echo $titleAdd; ?></h4></center>
      <br><hr>
      <div class="row">
        

        <?php 
        
        $sql = ' SELECT `id`, `videoLink`, `videoTitle`, `dateUploaded`, `category` FROM `tbl_videos` WHERE `category` = "sagisag ng pagasa" '.$queryAdd.' ';
        $exec = $conn->query($sql);
        while ($res = $exec->fetch_assoc()) {
        $phpdate = strtotime( $res['dateUploaded'] );
        $mysqldate = date( 'M d, Y', $phpdate );
         ?>


        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card">
            <div class="fb-video card-img-top" data-href="<?php echo $res['videoLink']; ?>" data-width="500" data-show-text="false"><blockquote cite="<?php echo $res['videoLink']; ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $res['videoLink']; ?>"><?php echo $res['videoTitle']; ?></a><p></blockquote></div>
            <div class="card-body">
              <p class="card-text"><b><?php echo $res['videoTitle']; ?></b></p>
              <p class="card-text text-muted"><?php echo $mysqldate; ?></p>
            </div>
          </div>
        </div>



        <?php } ?>

        




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