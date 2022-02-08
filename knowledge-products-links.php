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
                <a class="nav-link vid-options" href="knowledge-products-videos.php">Videos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link vid-options active active-link" aria-current="page" href="knowledge-products-links.php">Links</a>
              </li>
            </ul>

          </center>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <table class="table table-bordered">
            <thead>
              <th>#</th>
              <th>Title</th>
              <th>Link</th>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>DOST</td>
                <td><a href="https://explore.dostcalabarzon.ph" target="_blank"><i>https://explore.dostcalabarzon.ph/</i></a></td>
              </tr>
              <tr>
                <td>2</td>
                <td>NCAA</td>
                <td><a href="https://ncca.gov.ph/" target="_blank"><i>https://ncca.gov.ph/</i></a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-3"></div>

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