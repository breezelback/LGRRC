<?php 
include 'function php/conn.php';

if (isset($_GET['id'])) 
{
  $id = $_GET['id'];
}
else
{
  $id = '';
}

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
        height: 450px;
        overflow-y: scroll;
        border:2px solid lightgray;
        border-radius: 5px;
      }
      .menuOutput::-webkit-scrollbar {
          width: 6px;
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

      <!-- <br><br><br>
      <div class="container">

          <div class="pt-5">

            <div class="row align-items-center">

              <div class="col-lg-12 mb-4 text-white headingContent">
                <header class="py-5 mt-5">
                    <h1 class="display-6 headingText">LGRRC News and Events</h1>
                    <a href="#page2" class="btn btn-primary btn-lg mt-3 scrollTo"><i class="fa fa-angle-double-down"></i></a>
                </header>
              </div>



            </div>
          </div>
      </div>
      <span id="page2"></span> -->

    </div>
    <!-- bgImage -->


    <hr>

   <!-- <div class="parallax"> -->
    <!-- NEWS -->
     <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <center>
            <h2 class="section-title">Contact Tracer Videos</h2>

            <ul class="nav nav-pills nav-fill mt-5" style="width: 50%;">
              <li class="nav-item">
                <a class="nav-link" href="ct-videos.php">2020 DILG IV-A</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navPill" href="#">2021 LGA</a>
              </li>
            </ul>
          </center>

        </div>
      </div>

      <div class="row aos-init mt-3" data-aos="fade-up"  data-aos-duration="1500" data-aos-duration="2000">


        <div class="col-lg-4 mt-4">
          <div class="card" style="width: 100%;">
            <iframe src="https://drive.google.com/file/d/1DjcBkP8RgQRBiv6uZ5K3teykIZGHBJjE/preview" width="100%" height="300" allow="autoplay"></iframe>
            <div class="card-body">
              <p class="card-text"><b>1_COVID-19 Situationer_DOH_Arianne Zamora</b></p>
              <p class="card-text"><a href="">Google Form Question Link</a></p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mt-4">
          <div class="card" style="width: 100%;">
            <iframe src="https://drive.google.com/file/d/1umA0BkpZ-zXu4M1cTCNm7iMpj-2GuYoK/preview" width="100%" height="300" allow="autoplay"></iframe>
            <div class="card-body">
              <p class="card-text"><b>2_Contact Tracing Handbook_WHO_Harold Doroteo</b></p>
              <p class="card-text"><a href="">Google Form Question Link</a></p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 mt-4">
          <div class="card" style="width: 100%;">
            <iframe src="https://drive.google.com/file/d/1Gl6npcnT0bNhTUkCBdIzaCVB_zOxHt0k/preview" width="100%" height="300" allow="autoplay"></iframe>
            <div class="card-body">
              <p class="card-text"><b>3_LGU Practice_Mayor Magalong</b></p>
              <p class="card-text"><a href="">Google Form Question Link</a></p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 mt-4">
          <div class="card" style="width: 100%;">
            <iframe src="https://drive.google.com/file/d/1CY7orD2bDGhg3Ry5kNLswm3Yy6skJFKZ/preview" width="100%" height="300" allow="autoplay"></iframe>
            <div class="card-body">
              <p class="card-text"><b>5a_StaySafe_Eric Baste</b></p>
              <p class="card-text"><a href="">Google Form Question Link</a></p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 mt-4">
          <div class="card" style="width: 100%;">
            <iframe src="https://drive.google.com/file/d/1BGD-Ev_9FFfqcALvguwSeQlvhv93Whkf/preview" width="100%" height="300" allow="autoplay"></iframe>
            <div class="card-body">
              <p class="card-text"><b>6a_Data Analytics_Jefferson Damoslog</b></p>
              <p class="card-text"><a href="">Google Form Question Link</a></p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 mt-4">
          <div class="card" style="width: 100%;">
            <iframe src="https://drive.google.com/file/d/1ddFu0J-sOTTKV-_8LlViFlWxWZaOP-OB/preview" width="100%" height="300" allow="autoplay"></iframe>
            <div class="card-body">
              <p class="card-text"><b>6b_Data Analytics_Shan-ry Roberts</b></p>
              <p class="card-text"><a href="">Google Form Question Link</a></p>
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


    </script>



  </body>
</html>