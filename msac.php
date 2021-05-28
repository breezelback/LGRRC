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
                    <h1 class="display-6 headingText">Multi - Sectoral Advisory Committee (MSAC)</h1>
                    <!-- <p class="lead mb-0 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa nulla sed quis rerum amet natus quas necessitatibus.</p> -->
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
              <div class="card" style="height: 290px !important;">
                <center>
                <div class="card-header" style="background-color: #921720;">
                    <a title="DILG IV-A" href="msac_profile.php?id=<?php echo $result['id']; ?>"><img class="card-img-top bg-white rounded-circle" src="images/msac/<?php echo $result['imageName']; ?>" alt="Card image cap" style="width: 100px;"></a>
                </div>
                  <div class="card-body">
                    <h3 class="card-title" style="font-size: 13px;"><b><?php echo $result['agencyName']; ?></b></h3>
                    <p class="card-text" style="font-size: 15px;" ><?php echo $result['address']; ?></p>
                    <p class="card-text" style="font-size: 15px;" ><?php echo $result['contactNumber'].' / '.$result['email']; ?></p>
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