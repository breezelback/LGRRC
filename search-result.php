<?php 
include 'function php/conn.php';

if (isset($_POST['btnSearch'])) 
{
  $searchValue = $_POST['searchValue'];
}
else
{
  header('location: index.php');
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
  </head>
  <body>
  <div class="bgImage" style="background-image: url(images/hd7.jpg); background-positio n: 50% -25px;">
     <!-- Navbar-->
     <?php include 'includes/header.php'; ?>

<br><br><br>
      <div class="container">

          <div class="pt-5">

            <div class="row align-items-center">

              <div class="col-lg-12 mb-4 text-white headingContent">
                <header class="py-5 mt-5">
                    <h1 class="display-6 headingText">Search results for: <i><b><?php echo $searchValue; ?></b></i></h1>
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


    <div class="container">
      


      <!----------------------------------- NEWS -------------------------------------->

      <div class="row">
        <div class="col-lg-12">
          <h3>News</h3>

           <div class="row aos-init" data-aos="fade-up"  data-aos-duration="1500" data-aos-duration="2000">

            <?php

            function resultHighlight($keyword,$yourString)
            {
              echo str_replace($keyword,'<span style="background-color:yellow; padding:3px; border-radius:3px;">'.$keyword.'</span>',$yourString);
            }


            $sql = ' SELECT `id`, `title`, `description`, `imageName`, `status`, `dateUploaded`, `author` FROM `tbl_news` WHERE `status` = "published" AND ( `title` LIKE "'.$searchValue.'%" OR `title` LIKE "%'.$searchValue.'%" OR `title` LIKE "%'.$searchValue.'" ) OR ( `description` LIKE "'.$searchValue.'%" OR `description` LIKE "%'.$searchValue.'%" OR `description` LIKE "%'.$searchValue.'" ) OR ( `author` LIKE "'.$searchValue.'%" OR `author` LIKE "%'.$searchValue.'%" OR `author` LIKE "%'.$searchValue.'" ) ORDER BY `dateUploaded`';
            $exec = $conn->query($sql);

            if ($exec->num_rows>0) 
            {
            
              while ($res = $exec->fetch_assoc()) 
              {

               $id = strip_tags($res['id']);
               $string = strip_tags($res['description']);
                $newDate = date("M d-Y | h:i:s A", strtotime($res['dateUploaded']));
                if (strlen($string) > 100) 
                {

                    // truncate string
                    $stringCut = substr($string, 0, 100);
                    $endPoint = strrpos($stringCut, ' ');

                    //if the string doesn't contain any space then it will cut without word basis.
                    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                    $string .= '......<a href="news.php?id='.$id.'">more</a>';
                }

                
               ?>

              <div class="col-md-4 mt-2">
                
                <div class="card">
                    <img class="card-img-top img-fluid" src="images/news/<?php echo $res['imageName']; ?>" alt="Card image cap" style="height: 300px;">
                    <div class="card-body">
                      <center>  
                          <!-- <h4 class="card-title"><b><?php echo $res['title']; ?></b></h4> -->
                          <h4 class="card-title"><b><?php resultHighlight($searchValue,$res['title']);  ?></b></h4>
                          <h6><?php  resultHighlight($searchValue,$res['author']); ?></h6>
                          <p><?php echo $newDate; ?></p>
                      </center><br>  
                      <p class="card-text"><?php resultHighlight($searchValue,$string);  ?> </p>

                    </div>
                  </div>

                  <div class="card p-3 card-outline-primary">
                    <blockquote class="card-block card-blockquote">
                      <footer>
                      <center><a href="<?php echo 'news.php?id='.$id; ?>" class="btn btn-warning">View</a></center>
                        <small class="text-muted">
                          <!-- <?php echo $res['dateUploaded']; ?>              -->
                        </small>
                      </footer>
                    </blockquote>
                  </div>

              </div>
              <!-- <div class="col-md-4"> -->
              <?php } } else { ?>

                <div class="col-lg-12">
                  <h5 class="text-danger">No result</h5>
                </div>

              <?php } ?>

          </div>

        </div>
      </div>
      
      <!----------------------------------- NEWS -------------------------------------->





      <br><hr>

      <!----------------------------------- MSAC -------------------------------------->

      <div class="row">
        <div class="col-lg-12">
          <h3>MSAC</h3>

          <div class="row align-items-center" class="row aos-init" data-aos="fade-up"  data-aos-duration="1500" data-aos-duration="2000">


          <?php 
          $sql = ' SELECT `id`, `agencyName`, `address`, `contactNumber`, `email`, `imageName`, `dateUploaded` FROM `tbl_msac` WHERE ( `agencyName` LIKE "'.$searchValue.'%" OR `agencyName` LIKE "%'.$searchValue.'%" OR `agencyName` LIKE "%'.$searchValue.'" ) OR ( `address` LIKE "'.$searchValue.'%" OR `address` LIKE "%'.$searchValue.'%" OR `address` LIKE "%'.$searchValue.'" ) ORDER BY `agencyName` ASC ';
          $exec = $conn->query($sql);

          if ($exec->num_rows>0) 
          {
            while ($result = $exec->fetch_assoc())
            {
             ?>

              <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-duration="1500">
                <div class="card" style="height: 290px !important;">
                  <center>
                  <div class="card-header">
                      <a title="DILG IV-A" href="msac_profile.php?id=<?php echo $result['id']; ?>"><img class="card-img-top" src="images/msac/<?php echo $result['imageName']; ?>" alt="Card image cap" style="width: 100px;"></a>
                  </div>
                    <div class="card-body">
                      <h3 class="card-title" style="font-size: 13px;"><b><?php resultHighlight($searchValue,$result['agencyName']); ?></b></h3>
                      <p class="card-text" style="font-size: 15px;" ><?php resultHighlight($searchValue,$result['address']); ?></p>
                      <p class="card-text" style="font-size: 15px;" ><?php echo $result['contactNumber'].' / '.$result['email']; ?></p>
                    </div>
                  </center>
                </div>
              </div>
              
              
            <?php } } else { ?>  

              <div class="col-lg-12">
                <h5 class="text-danger">No result</h5>
              </div>

            <?php } ?>
          </div>  

        </div>
      </div>

      <!----------------------------------- MSAC -------------------------------------->

      <br><hr>


      <!----------------------------------- KNOWLEDGE PRODUCT -------------------------------------->


      <div class="row">
        <div class="col-lg-12">
        <h3>Knowledge Product</h3>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js"></script>

        <?php 
        $i = 1;
        $sql = ' SELECT `id`, `filename`, `title`, `status`, `dateUploaded` FROM `tbl_knowledge_products` WHERE ( `title` LIKE "'.$searchValue.'%" OR `title` LIKE "%'.$searchValue.'%" OR `title` LIKE "%'.$searchValue.'" ) ';
        $exec = $conn->query($sql);

        if ($exec->num_rows>0) 
        {
            while ($res = $exec->fetch_assoc()) 
            {
            $phpdate = strtotime( $res['dateUploaded'] );
            $mysqldate = date( 'M d, Y', $phpdate );
            ?>


            <div class="col-md-6 col-lg-3 mb-4 aos-init aos-animate productView" data-aos="fade-up" data-aos-duration="1500" >
            <div class="teacher text-center">
            <a href="knowledge-products.php?id=<?php echo $res['id']; ?>" style="text-decoration: none; color:black;">
              <!-- <img src="images/book1.jpg" alt="Image" class="img-fluid w-60 mx-auto mb-4"> -->
              <canvas id="pdf_renderer<?php echo $i; ?>" class="img-fluid mx-auto" style="height: 320px;"></canvas>
              <div class="py-5">
                <!-- <h6><?php resultHighlight($searchValue,$res['title']); ?></h6> -->
                <h5><?php echo str_replace($searchValue,'<span style="background-color:yellow; padding:3px; border-radius:3px;">'.$searchValue.'</span>',$res['title']); ?></h5>
                <p class="position"><?php echo $mysqldate; ?></p>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p> -->
              </div>
            </a>
            </div>
            </div>







            <script>


            var myState = {
                pdf: null,
                currentPage: 1,
                zoom: 0.5
            }



            function render<?php echo $i; ?>() {
                myState.pdf.getPage(myState.currentPage).then((page) => {
              
                    var canvas = document.getElementById("pdf_renderer<?php echo $i; ?>");
                    // alert(canvas);
                    var ctx = canvas.getContext('2d');

                    var viewport = page.getViewport(myState.zoom);

                    canvas.width = viewport.width;
                    canvas.height = viewport.height;
              
                    page.render({
                        canvasContext: ctx,
                        viewport: viewport
                    });
                });
            }

            pdfjsLib.getDocument('products/<?php echo $res['filename']; ?>').then((pdf) => {

              myState.pdf = pdf;
              render<?php echo $i; ?>();

            });

            </script>

            <?php $i++; } } else { ?>

              <div class="col-lg-12">
                <h5 class="text-danger">No result</h5>
              </div>


            <?php } ?>
      </div>

      <!----------------------------------- KNOWLEDGE PRODUCT -------------------------------------->
      <br><hr>


      <!----------------------------------- VIDEOS -------------------------------------->
      <div class="row">
        <div class="col-lg-12">
        <h3>Videos</h3>
        </div>

        <?php 
        
        $sql = ' SELECT `id`, `videoLink`, `videoTitle`, `dateUploaded`, `category` FROM `tbl_videos` WHERE ( `videoTitle` LIKE "'.$searchValue.'%" OR `videoTitle` LIKE "%'.$searchValue.'%" OR `videoTitle` LIKE "%'.$searchValue.'" ) ';
        $exec = $conn->query($sql);

        if ($exec->num_rows>0) 
        {
          while ($res = $exec->fetch_assoc()) {
          $phpdate = strtotime( $res['dateUploaded'] );
          $mysqldate = date( 'M d, Y', $phpdate );
           ?>


          <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="fb-video card-img-top" data-href="<?php echo $res['videoLink']; ?>" data-width="500" data-show-text="false"><blockquote cite="<?php echo $res['videoLink']; ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $res['videoLink']; ?>"><?php echo $res['videoTitle']; ?></a><p></blockquote></div>
              <div class="card-body">
                <p class="card-text"><b><?php resultHighlight($searchValue,$res['videoTitle']); ?></b></p>
                <p class="card-text text-muted"><?php echo $mysqldate; ?></p>
              </div>
            </div>
          </div>



          <?php } } else { ?>

            <div class="col-lg-12">
              <h5 class="text-danger">No result</h5>
            </div>

          <?php } ?>
      </div>

      <!----------------------------------- VIDEOS -------------------------------------->
      <br><hr>

      <!----------------------------------- DIRECTORY -------------------------------------->
      <div class="row">
      
        <div class="col-lg-12">
        <h3>Directory of Experts</h3>
        </div>

        <?php
          $sqlMain = ' SELECT `id`, `name`, `expertise`, `contactNumber`, `address`, `email`, `imageName`, `dateUploaded` FROM `tbl_expert` WHERE ( `name` LIKE "'.$searchValue.'%" OR `name` LIKE "%'.$searchValue.'%" OR `name` LIKE "%'.$searchValue.'" ) OR ( `expertise` LIKE "'.$searchValue.'%" OR `expertise` LIKE "%'.$searchValue.'%" OR `expertise` LIKE "%'.$searchValue.'" ) ORDER BY `name` ASC ';
          $exec = $conn->query($sqlMain);

          if ($exec->num_rows > 0) 
          {
              while ( $result = $exec->fetch_assoc() ) 
            {
          

               ?>

              <div class="col-md-4 asda" align="center">


                <div class="row tab-pane fade show" id="<?php echo $result['expertise']; ?>" role="tabpanel" aria-labelledby="<?php echo $result['expertise']; ?>-tab" style="border: 1px solid grey; border-radius: 5px; margin-right: 1px; height: 320px;">

                  <div class="col-md-5" style="border-right: 2px solid grey; background-color: lightgray">
                    <center><img class="m-2" src="images/expert/<?php echo $result['imageName']; ?>" width="70"></center>
                  </div>
                  <div class="col-md-7" style="word-wrap: break-word;">
                    <a href="directory-profile.php?id=<?php echo $result['id']; ?>" style="margin:1px; color: black;"><h4 style="border-bottom: 1px solid grey;"><?php resultHighlight($searchValue,$result['name']); ?></h4></a>
                    <p style="font-size: 13px;"><b>Expertise</b>: <b style="color: black;"><?php resultHighlight($searchValue,$result['expertise']); ?></b></p>
                    <p style="font-size: 13px;"><b>Address</b>: <b style="color: black;"><?php echo $result['address']; ?></b></p>
                  </div>

                </div>
                <hr>

              </div>


   
          <?php } } else { ?>

            <div class="col-lg-12">
              <h5 class="text-danger">No Result</h5>
            </div>

          <?php } ?>
      </div>


      <!----------------------------------- DIRECTORY -------------------------------------->
      <br><hr>

    </div>
    <!-- <div class="container"> -->

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/js_includes.php'; ?>

    <script type="text/javascript">

   



  





    </script>



  </body>
</html>