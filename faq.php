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
  <div class="bgImageSmall" style="background-image: url(images/hd7.jpg); background-position: 50% -25px;">
     <!-- Navbar-->
     <?php include 'includes/header.php'; ?>

<!--       <br><br><br>
      <div class="container">

          <div class="pt-5">

            <div class="row align-items-center">

              <div class="col-lg-12 mb-4 text-white headingContent">
                <header class="py-5 mt-5">
                    <h1 class="display-6 headingText">Frequently Asked Questions</h1>
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
    <!-- FAQ -->
     <div class="container">
      <div id="accordion">

        <?php 
        $x = 1;
        $sql = ' SELECT `id`, `question`, `answer`, `dateUploaded`, `status` FROM `tbl_faq` ORDER BY `id` DESC ';
        $exec = $conn->query($sql);
        while ($res = $exec->fetch_assoc()) {

          if ($x == 1) {
         ?>


        <div class="card">
          <div class="card-header" id="heading<?php echo $x; ?>" style="background-color: transparent; color:white !important;">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $x; ?>" aria-expanded="true" aria-controls="collapse<?php echo $x; ?>"> <i class="fa" aria-hidden="true"></i>
                <?php echo $res['question']; ?>
              </button>
            </h5>
          </div>

          <div id="collapse<?php echo $x; ?>" class="collapse show" aria-labelledby="heading<?php echo $x; ?>" data-parent="#accordion">
            <div class="card-body">
                <?php echo $res['answer']; ?>
            </div>
          </div>
        </div>

        <?php } else{ ?>


        <div class="card">
          <div class="card-header" id="heading<?php echo $x; ?>" style="background-color: transparent; color:white !important;">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $x; ?>" aria-expanded="true" aria-controls="collapse<?php echo $x; ?>"> <i class="fa" aria-hidden="true"></i>
                <?php echo $res['question']; ?>
              </button>
            </h5>
          </div>

          <div id="collapse<?php echo $x; ?>" class="collapse" aria-labelledby="heading<?php echo $x; ?>" data-parent="#accordion">
            <div class="card-body">
                <?php echo $res['answer']; ?>
            </div>
          </div>
        </div>




        <?php } $x++; }  ?>

      </div>
    </div>
  <!-- </div> --> 


  <br><br><br>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/js_includes.php'; ?>

    <script type="text/javascript">

    $('#navFaq').addClass('active');



  





    </script>



  </body>
</html>