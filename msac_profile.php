<?php 
include 'function php/conn.php';
$id = $_GET['id'];
$sql = " SELECT `id`, `agencyName`, `address`, `contactNumber`, `email`, `imageName`, `dateUploaded` FROM `tbl_msac` WHERE `id` = '$id' ";
$exec = $conn->query($sql);
$result = $exec->fetch_assoc();
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
                  <h3><?php echo $result['agencyName']; ?></h3></center>
                  <img src="images/msac/<?php echo $result['imageName']; ?>" style="width: 150px;"><br><br>
                  <p><?php echo $result['address']; ?></p>
                  <p><?php echo $result['contactNumber']; ?></p>
                  <i><a href="<?php echo 'http://'.$result['email']; ?>" style="font-size:20px;"><?php echo $result['email']; ?> <span class="fa fa-link"></span></a></i>

              </div>



            </div>
            <!-- <div class="row"> -->
          </div>
      </div>

    </div>
    <!-- bgImage -->


    <hr>



    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/js_includes.php'; ?>

    <script type="text/javascript">

      $('#navMsac').addClass('active');

    </script>



  </body>
</html>