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
            <h2 class="section-title">Contact Tracer Learning Materials</h2>

            <ul class="nav nav-pills nav-fill mt-5" style="width: 50%;">
              <li class="nav-item">
                <a class="nav-link" href="ct-documents.php">2021 DOH 4A</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navPill" href="#">2021 LGA</a>
              </li>
            </ul>
          </center>

        </div>
      </div>
      <hr>
      <div class="row aos-init mt-5" data-aos="fade-up"  data-aos-duration="1500" data-aos-duration="2000">
        <div class="col-lg-12">
          <div id="exTab3"> 
            <ul  class="nav nav-tabs nav-justified mb-3">
              <li class="nav-item tab1">
                <a href="#1b" data-toggle="tab">Session 1</a>
              </li>
              <li class="nav-item tab2">
                <a href="#2b" data-toggle="tab">Session 2</a>
              </li>
              <li class="nav-item tab3">
                <a href="#3b" data-toggle="tab">Session 3</a>
              </li>
              <li class="nav-item tab4">
                <a href="#4b" data-toggle="tab">Session 4</a>
              </li>
              <li class="nav-item tab5">
                <a href="#5b" data-toggle="tab">Session 5</a>
              </li>
              <li class="nav-item tab6">
                <a href="#6b" data-toggle="tab">Session 6</a>
              </li>
            </ul>

            <div class="tab-content clearfix">
              <div class="tab-pane active" id="1b">
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <center>
                      <h3>Developments on COVID 19 Situation</h3>
                    </center>
                    <div class="accordion" id="accordionExample">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              [CT] COVID Situationer_1621302963.pdf

                              <div class="btnExam">Take Exam</div>
                            </button>
                          </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            <iframe src="https://drive.google.com/file/d/1MhteJt413eDoGtH47n9vAnX2rrwn8902/preview" width="100%" height="480" allow="autoplay"></iframe>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Collapsible Group Item #2
                            </button>
                          </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Collapsible Group Item #3
                            </button>
                          </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-1"></div>
                </div>


              </div>
              <div class="tab-pane" id="2b">
                <h3>Contact Tracing_A Review</h3>
              </div>
              <div class="tab-pane" id="3b">
                <h3>Cognitive Interviewing</h3>
              </div>
              <div class="tab-pane" id="4b">
                <h3>Contact Tracing Data Analytics _ Mapping</h3>
              </div>
              <div class="tab-pane" id="5b">
                <h3>Stay Safe</h3>
              </div>
              <div class="tab-pane" id="6b">
                <h3>Conversation Cafe</h3>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  <!-- </div> --> 


  <br><br><br>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/js_includes.php'; ?>

    <script type="text/javascript">
      $('.nav-item a').click(function(){
        $('.nav-item a').removeClass( "activeTab" );
        $('.tab1').removeClass( "activeTab" );
        $(this).addClass( "activeTab" );
      });

      $('.tab1').addClass( "activeTab" );

    </script>



  </body>
</html>