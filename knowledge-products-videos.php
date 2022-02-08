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

      <div class="row mt-3">

        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card">
            <iframe src="https://drive.google.com/file/d/1ywS-b9uE1bjifOeGYnQn3TOzSS70x820/preview" width="100%" height="350" allow="autoplay"></iframe>
            <div class="card-body videoBody">
              <p class="card-text"><b>Maragondon Success Story</b></p>
              <p class="card-text text-muted">Feb. 2, 2022</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card">
            <iframe src="https://drive.google.com/file/d/1BnhYNcWUCj_-7wmoLHhlFAq-Y-wOQXHO/preview" width="100%" height="350" allow="autoplay"></iframe>
            <div class="card-body videoBody">
              <p class="card-text"><b>Calatagan Success Story</b></p>
              <p class="card-text text-muted">Feb. 2, 2022</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card">
            <iframe src="https://drive.google.com/file/d/1mdc-TLUn5BLqdQD6QxnU5NAylF3hb1EY/preview" width="100%" height="350" allow="autoplay"></iframe>
            <div class="card-body videoBody">
              <p class="card-text"><b>Candelaria Success Story</b></p>
              <p class="card-text text-muted">Feb. 2, 2022</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card">
            <iframe src="https://drive.google.com/file/d/1ThF0JHkIpo0dKr8ju0hBcbPODVCucZqN/preview" width="100%" height="350" allow="autoplay"></iframe>
            <div class="card-body videoBody">
              <p class="card-text"><b>Tanay Success Story</b></p>
              <p class="card-text text-muted">Feb. 2, 2022</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card">
            <iframe src="https://drive.google.com/file/d/1066O8T1LPrTTTofY9V3Ks7FhfoSFarKA/preview" width="100%" height="350" allow="autoplay"></iframe>
            <div class="card-body videoBody">
              <p class="card-text"><b>Majayjay Success Stories</b></p>
              <p class="card-text text-muted">Feb. 2, 2022</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card">
            <iframe src="https://drive.google.com/file/d/1VEzadW1fHRrQVlipr2orf7FvILKxksM7/preview" width="100%" height="350" allow="autoplay"></iframe>
            <div class="card-body videoBody">
              <p class="card-text"><b>Proejct_DINA_Tsunami</b></p>
              <p class="card-text text-muted">Feb. 2, 2022</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card">
            <iframe src="https://drive.google.com/file/d/17nN9z2Z2kRMCr60b07oUR_ORfz0Qd1-8/preview" width="100%" height="350" allow="autoplay"></iframe>
            <div class="card-body videoBody">
              <p class="card-text"><b>Project_DINA_Tropical_Cyclones</b></p>
              <p class="card-text text-muted">Feb. 2, 2022</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card">
            <iframe src="https://drive.google.com/file/d/196IEEJo31x9AcWMyTRJqRR4thzSOl48R/preview" width="100%" height="350" allow="autoplay"></iframe>
            <div class="card-body videoBody">
              <p class="card-text"><b>Project_DINA_Volcanic_Eruptions</b></p>
              <p class="card-text text-muted">Feb. 2, 2022</p>
            </div>
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

    $('#navBook').addClass('active');



  





    </script>



  </body>
</html>