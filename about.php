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

    <link rel="stylesheet" href="carousel/dist/demo-only/demo-css/general.css" type="text/css"/>
    <link rel="stylesheet" href="carousel/dist/mibreit-gallery/css/mibreitGallery.css" type="text/css"/>

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
      .mibreit-enter-fullscreen-button
      {
        display: none;
      }

    </style>
  </head>
  <body>
    <div class="bgImageSmall" style="background-image: url(images/hd7.jpg); background-position: 50% -25px;">
     <!-- Navbar-->
      <?php include 'includes/header.php'; ?>

     <!--  <br><br><br>
      <div class="container">

          <div class="pt-5">

            <div class="row align-items-center">

              <div class="col-lg-12 mb-4 text-white headingContent">
                <header class="py-5 mt-5">
                    <h1 class="display-6 headingText">About LGRRC</h1>
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
   
     <div id="container">
        <div class="framed-background">
          <div class="framed-background__border"></div>
          <div class="flex-vertical">
            <div id="content">
              <!-- <h2>Full Gallery</h2> -->
              <div id="full-gallery" class="content-slideshow">

                <!-- <div class="mibreit-imageElement" style="opacity: 0.0">
                  <img src="images/lgrrc about/1.png"
                  data-src="images/lgrrc about/1.png"
                  data-title="LGRRC" alt="LGRRC" width="1280" height="853"/>
                </div> -->

                <?php 
                $sql = ' SELECT `id`, `position`, `imageName`, `dateUploaded` FROM `tbl_about` ORDER BY `position` ASC ';
                $exec = $conn->query($sql);
                while ( $res = $exec->fetch_assoc() )
                { 
                 ?>
                  <div class="mibreit-imageElement" style="opacity: 0.0">
                    <img src="images/lgrrc about/<?php echo $res['imageName']; ?>"
                    data-src="images/lgrrc about/<?php echo $res['imageName']; ?>"
                    data-title="LGRRC" alt="LGRRC" width="1280" height="853"/>
                    <!-- <h3>Stubai Mountains</h3> -->
                  </div>
               
               
                
                <?php } ?>

              </div>

              <div class="mibreit-thumbview">
                <?php 
                $sql = ' SELECT `id`, `position`, `imageName`, `dateUploaded` FROM `tbl_about` ORDER BY `position` ASC ';
                $exec = $conn->query($sql);
                while ( $res = $exec->fetch_assoc() )
                { 
                
                 ?>

                 <div class="mibreit-thumbElement">
                  <img src="images/lgrrc about/<?php echo $res['imageName']; ?>" width="100"
                  height="80" alt="thumbnail"/>
                </div>

                <?php } ?>
              </div>

              <h3 id="full-gallery-title" class="mibreit-slideshow-title"></h3>
            </div>
          </div>
          <div class="framed-background__border"></div>
        </div>
        <!--framed-background-->
      </div>
      <!--container-->


  <br><br><br>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/js_includes.php'; ?>
    <script src="carousel/dist/mibreit-gallery/mibreitGallery.min.js" type="text/javascript"></script>

    <script type="text/javascript">

    $('#navAbout').addClass('active');


    $(document).ready(function () {
      var fullGallery = mibreitGallery.createGallery({
        slideshowContainer: "#full-gallery",
        thumbviewContainer: ".mibreit-thumbview",
        titleContainer: "#full-gallery-title",
        allowFullscreen: true,
        preloadLeftNr: 2,
        preloadRightNr: 3
      });
    });
  





    </script>



  </body>
</html>