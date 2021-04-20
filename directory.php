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
                    <h1 class="display-6 headingText">Directory of Experts</h1>
                    <p class="lead mb-0 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa nulla sed quis rerum amet natus quas necessitatibus.</p>
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

 <!-- <div class="parallax"> -->
 <div class="container-fluid">
<br>
<div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-3" style="border-right: 2px solid lightgray;">
        <p style="font-weight: bold;">Categories:</p><br>
        <hr>


        <p>Filter by Name</p>
        <div class="row">
          <div class="input-group col-md-12">
                  <input class="form-control py-2 border-right-0 border" type="search" placeholder ="Name" id="searchName">
                  <span class="input-group-append">
                      <button class="btn btn-outline-secondary border-left-0 border" type="button" id="btnSearchName" onclick="searchCategory('test');">
                          <i class="fa fa-search"></i>
                      </button>
                    </span>
              </div>
        </div>
        <hr>
        <p>Filter Position</p>
        <div class="row">
          <div class="input-group col-md-12">
                  <input class="form-control py-2 border-right-0 border" type="search" placeholder ="Position" id="searchAddress">
                  <span class="input-group-append">
                      <button class="btn btn-outline-secondary border-left-0 border" type="button" id="btnSearchAddress" onclick="searchCategory('test');">
                          <i class="fa fa-search"></i>
                      </button>
                    </span>
              </div>
        </div>
        <hr>
        <p>Filter by Expertise</p>
        <div class="row">
          <ul class="nav nav-pills">
                  <li class="nav-item ml-1">
                    <a type="submit" class="nav-link" data-toggle="pill" href="#" role="tab" onclick="fetchExperts();" id="btnAll">All</a>
                  </li>
            <?php 
            // $sql = ' SELECT `expertise` FROM `tbl_expert` ORDER BY `expertise` ASC ';
            $sql = ' SELECT `expertise` FROM `tbl_expert` ';
            $exec = $conn->query($sql);
            $expertise1 = '';
            $x = 0;
            while ( $result = $exec->fetch_assoc() ) {
              $expertise = $result['expertise'];

              $expertise = str_replace(', ', ',', $expertise);
              $expertise = str_replace(' ,', ',', $expertise);


              $expertise = rtrim($expertise, ' ');

              $expertise1 .= $expertise.',';

              $expertise = explode(',', $expertise1);
              $expertise = array_unique($expertise);
              asort($expertise);
              // print_r($expertise)
             ?>

            <?php 
              $x++;
              }
            ?>
              <div style="float: left;">
                <?php
                  foreach($expertise as $output) 
                {
                ?>
                  <li class="nav-item ml-1">
                  <a type="submit" class="nav-link navPill" data-toggle="pill" href="<?php echo $output; ?>" role="tab" onclick="searchCategory('<?php echo $output; ?>');"><?php echo $output; ?></a>
                  </li>

                <?php
                }

                ?>
              </div>
             </ul>
        </div>
        <hr>

      </div>
      <div class="col-md-7 ml-2">
        <!-- <br><hr> -->
        <center><h2 id="ViewText"></h2></center><br>
        <center><img src="images/loading1.gif" width="40%" id="imgLoading"></center>
        <div class="row" id="directoryOutput">
        </div>
      </div>
    
    </div>
        <!-- <div class="row"> -->

    </div>
  <!-- </div> -->


<br><br><br>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/js_includes.php'; ?>

    <script type="text/javascript">

    $('#navDir').addClass('active');

    var keywordHolder = '';
    var nameHolder = '';
    var addressHolder = '';


    $("#searchName").on('keyup', function (e) {
        if (e.key === 'Enter' || e.keyCode === 13) 
        {
          if ($(this).val() == '') 
          {
            fetchExperts();
          }
          else
          {
              searchCategory(keywordHolder);
          }
        }
    });


    $("#searchAddress").on('keyup', function (e) {
        if (e.key === 'Enter' || e.keyCode === 13) 
        {
          if ($(this).val() == '') 
          {
            fetchExperts();
          }
          else
          {
              searchCategory(keywordHolder);
          }
        }
    });



    function searchCategory(searchCategory)
    { 
     $('.navPill').removeClass("active");
      // $('.navPill').addClass("active");
      // alert(searchCategory)
      document.getElementById("directoryOutput").hidden=true;

      if (searchCategory != 'test') 
      {
        keywordHolder = searchCategory;
      }

      nameHolder = $('#searchName').val();
      addressHolder = $('#searchAddress').val();

      $('#ViewText').text('Results for: '+keywordHolder+' '+nameHolder+' '+addressHolder);


      $.ajax({

        url:"function php/fetchExperts.php?id="+keywordHolder+'&nameHolder='+nameHolder+'&addressHolder='+addressHolder, 
        method:"GET",  

        contentType:false,
        cache:false,
        processData:false,
        beforeSend:function() {

         $('#imgLoading').show();

        },  
        error:function(data){

                       
        }, 
        success:function(data){
        // alert(data); 
           $('#imgLoading').hide();
          document.getElementById("directoryOutput").innerHTML=data;
          document.getElementById("directoryOutput").hidden=false;

        }
                
        });
    }




    function fetchExperts(){

     $('.navPill').removeClass("active");
     $('#btnAll').addClass("active");
     $('#searchName').val('');
     $('#searchAddress').val('');
     $('#ViewText').text('All Entries');
      document.getElementById("directoryOutput").hidden=true;

     $.ajax({

      url:"function php/fetchExperts.php", 
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

      document.getElementById("directoryOutput").innerHTML=data;
      document.getElementById("directoryOutput").hidden=false;

          }
                


        });
    }

    fetchExperts();

    </script>



  </body>
</html>