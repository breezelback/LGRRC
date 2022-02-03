<?php 
include 'function php/conn.php';
 ?>
<!DOCTYPE html>
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
    <style type="text/css">
      .msacBody
      {
        height: 180px !important;
        overflow-y: scroll;
      }
    </style>
    <title>LGRRC</title>
  </head>
  <body>
  <div class="bgImageSmall" style="background-image: url(images/hd7.jpg); background-position: 50% -25px;">
     <!-- Navbar-->
     <?php include 'includes/header.php'; ?>

    </div>
    <!-- bgImage -->


    <hr>

   <div class="parallax">
 <div class="container">
<br>
      <div class="row">
        <div class="col-lg-12">
          <div class="row align-items-center">


          <?php 
          $sql = " SELECT `id`, `agencyName`, `address`, `contactNumber`, `email`, `imageName`, `dateUploaded` FROM `tbl_msac` ORDER BY `agencyName` ASC ";
          $exec = $conn->query($sql);
          while ($result = $exec->fetch_assoc())
          {
           ?>

            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-duration="1500">
              <div class="card" style="height: 310px !important;">
                <center>
                <div class="card-header" style="background-color: #921720;">
                    <a title="DILG IV-A" href="<?php echo $result['email']; ?>" target="_blank"><img class="card-img-top bg-white rounded-circle" src="images/msac/<?php echo $result['imageName']; ?>" alt="Card image cap" style="width: 100px; height: 100px;"></a>
                </div>
                  <div class="card-body msacBody">
                    <h3 class="card-title" style="font-size: 13px;"><b><?php echo $result['agencyName']; ?></b></h3>
                    <p class="card-text" style="font-size: 15px;" ><?php echo $result['address']; ?></p>
                    <p class="card-text" style="font-size: 15px;" ><?php echo $result['contactNumber'].' / <a href="'.$result['email'].'" target="_blank">'.$result['email'].'</a>'; ?></p>
                  </div>
                </center>
              </div>
            </div>
            
            
          <?php } ?>  


          </div>  
        </div>
        </div>
        <!-- <div class="row"> -->

    </div>
  </div>




    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/js_includes.php'; ?>

    <script type="text/javascript">

      $('#navMsac').addClass('active');


    </script>



  </body>
</html>