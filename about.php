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



      <br><hr>
      
      <div class="container-fluid">

        <!-- <div class="parallax bgIndex"> -->

          <div class="row" style=" padding: 50px;">

            <div class="col-lg-6 text-white aos-init" data-aos="fade-up"  data-aos-duration="1500" style="padding: 25px; border: 1px solid whitesmoke; border-radius: 5px; background-color: #8a0d0dbd;">
              <div class="row justify-content-center align-items-center">
                <div class="col-md-12 text-center testimony">
                
                  <?php 
                  $sql = ' SELECT `id`, `name`, `imageName`, `quotation` FROM `tbl_quotations` WHERE `id` = 2 ';
                  $exec = $conn->query($sql);
                  $res = $exec->fetch_assoc();

                   ?>
              
                  <blockquote>
                    <p style="text-align: justify;text-justify: inter-word;">
                      <img src="images/main/<?php echo $res['imageName']; ?>" alt="Image" class="img-fluid" style="border-radius: 8px; width: 200px; float: left; margin-right: 10px;">
                      <h4 class="mb-1 directorText"><?php echo $res['name']; ?></h4>
                      <h6 class="mb-4">Regional Director</h6>
                      <span style="font-size: 14px;"><?php echo $res['quotation']; ?></span>
                    </p>
                  </blockquote>

                </div>
              </div>
            </div>

            <div class="col-lg-1"></div>
            
            <div class="col-lg-5 text-white aos-init" data-aos="fade-up"  data-aos-duration="1500" style="padding: 25px; border: 1px solid whitesmoke; border-radius: 5px; background-color: #8a0d0dbd;">
              <div class="row justify-content-center align-items-center">
                <div class="col-md-12 text-center testimony">
                
                  <?php 
                  $sql = ' SELECT `id`, `name`, `imageName`, `quotation` FROM `tbl_quotations` WHERE `id` = 3 ';
                  $exec = $conn->query($sql);
                  $res = $exec->fetch_assoc();

                   ?>    

                  <blockquote>
                    <p style=" text-indent: 50px; text-align: justify;">
                      <img src="images/main/<?php echo $res['imageName']; ?>" alt="Image" class="img-fluid" style="border-radius: 8px; width: 200px; float: left; margin-right: 10px;">
                      <h4 class="mb-1 directorText"><?php echo $res['name']; ?></h4>
                      <h6 class="mb-4">Assistant Regional Director</h6>
                      <span style="font-size: 14px;"><?php echo $res['quotation']; ?></span>
                    </p>
                  </blockquote>

                </div>
              </div>
            </div>
          </div>

      </div>

<!--       <div class="container">

          <div class="row" style="background-color: rgba(200,200,200,0.2); padding: 50px; ">
            <div class="col-lg-12" style="border:1px solid whitesmoke; padding-top: 50px; border-radius:5px;">
              <div class="row mb-5 justify-content-center">
                <div class="col-lg-7 text-center text-white aos-init" data-aos="fade-up"  data-aos-duration="1500" style="border: 2px solid aliceblue; padding: 25px; border-radius:10px; background-color: darkred;">
                  <h2 class="section-title text-white">PROGRAM FACILITIES</h2>
                </div>
              </div>
              <div class="row mb-5 align-items-center">
                <div class="col-lg-12 ml-auto aos-init" data-aos="fade-up"  data-aos-duration="1500">
                  
                  <div class="row">
                    <div class="col-sm-3 mb-4">
                        <?php 
                        $exec = $conn->query(' SELECT `id`, `imageName`, `status`, `dateUploaded` FROM `tbl_program_images` WHERE `status` = "subImage1" ');
                        $result = $exec->fetch_assoc();
                         ?>
                      <center><img src="images/program features/<?php echo $result['imageName']; ?>" alt="Image" class="img-fluid imgGallery"></center>
                    </div>
                    <div class="col-sm-3 mb-4">
                        <?php 
                        $exec = $conn->query(' SELECT `id`, `imageName`, `status`, `dateUploaded` FROM `tbl_program_images` WHERE `status` = "subImage2" ');
                        $result = $exec->fetch_assoc();
                         ?>
                      <center><img src="images/program features/<?php echo $result['imageName']; ?>" alt="Image" class="img-fluid imgGallery"></center>
                    </div>
                    <div class="col-sm-3 mb-4">
                        <?php 
                        $exec = $conn->query(' SELECT `id`, `imageName`, `status`, `dateUploaded` FROM `tbl_program_images` WHERE `status` = "subImage3" ');
                        $result = $exec->fetch_assoc();
                         ?>
                      <center><img src="images/program features/<?php echo $result['imageName']; ?>" alt="Image" class="img-fluid imgGallery"></center>
                    </div>
                    <div class="col-sm-3 mb-4">
                        <?php 
                        $exec = $conn->query(' SELECT `id`, `imageName`, `status`, `dateUploaded` FROM `tbl_program_images` WHERE `status` = "subImage4" ');
                        $result = $exec->fetch_assoc();
                         ?>
                      <center><img src="images/program features/<?php echo $result['imageName']; ?>" alt="Image" class="img-fluid imgGallery"></center>
                    </div>
                  </div>

                </div>
              </div>  
            </div> 
          </div>
      </div>   -->

  <br>

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