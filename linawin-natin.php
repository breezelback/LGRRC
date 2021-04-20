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
    <meta name="keywords" content="dilg, calabarzon, lgrrc, lgrc">
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
                    <h1 class="display-6 headingText">Linawin Natin</h1>
                    <p class="lead mb-0">Linawin Natin is an online segment of the DILG IV-A aired live at its official Facebook page. It was conceptualized during the height of the enhanced community quarantine when there were a lot of questions and confusion from the communities on various COVID-related concerns such as the Social Amelioration Program, quarantine protocols, contact tracing, and a lot more. This confusion was even stirred because of the proliferation of fake news from unverified sources of information. To help combat this, the DILG IV-A thought of an initiative to address the most frequently asked questions of citizens on various topics. 
To ensure that the Department will be giving away credible information, the episodes of the segment feature a representative of an agency that is most suited to answer the consolidated FAQs on a related and relevant topic. The live viewers can also ask questions via the comment section. These questions will be later addressed by the guest after all the previously prepared questions are answered. 
The first segment aired on May 28, 2021 and tackled the topic on locally-stranded individuals with a representative from the Local Government Monitoring and Evaluation Division of DILG IV-A.
Linawin Natin is now in its second season with a modified name – Linawin Natin: Pagsulong. The segment is still ongoing and is being aired every other Thursday.
</p>
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
              $sqlSeason = ' SELECT DISTINCT(`videoSeason`) FROM `tbl_videos` WHERE `category` = "linawin natin" ORDER BY `videoSeason` ';
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
      <center><h3>Linawin Natin Videos</h3></center>
      <center><h4><?php echo $titleAdd; ?></h4></center>
      <br><hr>
      <div class="row">
        

        <?php 
        
        $sql = ' SELECT `id`, `videoLink`, `videoTitle`, `dateUploaded`, `category` FROM `tbl_videos` WHERE `category` = "linawin natin" '.$queryAdd.' ';
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