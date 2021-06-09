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
            <h2 class="section-title">News and Events</h2>
          </center>
        </div>
      </div>

      <div class="row aos-init" data-aos="fade-up"  data-aos-duration="1500" data-aos-duration="2000">

        <div class="col-md-8" style="border: 3px solid #6c6c9c; padding:20px; border-radius:10px;" id="imgLoading"><center><img src="images/loading1.gif" width="30%"></center></div>

        <div class="col-md-8" style="border: 3px solid #6c6c9c; padding:50px; border-radius:10px; text-indent: 50px;" id="newsOutput">
          
          <!-- newsoutput -->


        </div>
        <div class="col-md-4">
           <div class="list-group menuOutput">
            
            <?php
            $sql = ' SELECT `id`, `title`, `description`, `imageName`, `status`, `dateUploaded`, `author` FROM `tbl_news` WHERE `status` = "published" ORDER BY `dateUploaded` DESC ';
            $exec = $conn->query($sql);
            while ($res = $exec->fetch_assoc()) 
            {
              $description = html_entity_decode($res['description']);
              $string = strip_tags($description);
              if (strlen($string) > 100) 
              {

                  // truncate string
                  $stringCut = substr($string, 0, 100);
                  $endPoint = strrpos($stringCut, ' ');

                  //if the string doesn't contain any space then it will cut without word basis.
                  $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                  $string .= ' ......more';
              }

             ?>
              <a onclick="fetchNews(<?php echo $res['id']; ?>);" class="list-group-item list-group-item-action newsList" style="border:1px solid seagreen;">
                <b><?php echo $res['title']; ?> </b>
                <p class="float-right "><?php echo date("d-M-Y", strtotime($res['dateUploaded'])); ?></p>
                <p style="font-size: 12px;"><?php echo $string; ?></p>
                <!-- <p style="font-size: 10px;"></p> -->
              </a>

            <?php } ?>

              </div>
        </div>

      </div>
    </div>
  <!-- </div> --> 


  <br><br><br>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/js_includes.php'; ?>

    <script type="text/javascript">

    $('#navNews').addClass('active');



     function fetchNews(id){

      document.getElementById("newsOutput").hidden=true;

       $.ajax({

        url:"function php/fetchNews.php?id="+id, 
          method:"POST",  

          contentType:false,
          cache:false,
          processData:false,
          beforeSend:function() {
           $('#imgLoading').show();


          },  
          error:function(data){

                         
          }, 
          success:function(data){
           $('#imgLoading').hide();
           // alert(data);
          document.getElementById("newsOutput").innerHTML=data;
          document.getElementById("newsOutput").hidden=false;

            }
                  


          });
      }
      
      fetchNews('<?php echo $id; ?>');





    </script>



  </body>
</html>