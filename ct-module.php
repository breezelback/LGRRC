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
      <div class="row aos-init mt-5" data-aos="fade-up"  data-aos-duration="1500" data-aos-duration="2000">
        <div class="col-lg-12">
          <div id="exTab3"> 
            <ul  class="nav nav-tabs nav-justified mb-3">
              <li class="nav-item tab1">
                <a href="#1b" data-toggle="tab">Module 1. COVID-19 Situationer</a>
              </li>
              <li class="nav-item tab2">
                <a href="#2b" data-toggle="tab">Module 2. The Contact Tracing Handbook</a>
              </li>
              <li class="nav-item tab3">
                <a href="#3b" data-toggle="tab">Module 3. Baguio City's Best Practices</a>
              </li>
              <li class="nav-item tab4">
                <a href="#4b" data-toggle="tab">Module 4. Cognitive Interviewing</a>
              </li>
              <li class="nav-item tab5">
                <a href="#5b" data-toggle="tab">Module 5. The StaySafe App</a>
              </li>
            </ul>

            <div class="tab-content clearfix">
              <div class="tab-pane active" id="1b">

                <div class="row">
                  <div class="col-md-12">
                    <center>
                      <iframe src="https://drive.google.com/file/d/1DjcBkP8RgQRBiv6uZ5K3teykIZGHBJjE/preview" width="1040" height="680" allow="autoplay"></iframe>
                      <h3>1_COVID-19 Situationer_DOH_Arianne Zamora.mp4</h3>
                    </center>


                    <p>Additional Learning Materials/Reference</p>

                    <a href="https://drive.google.com/file/d/1WVhETM300ubqOeR0GVsp4K84tPB7RirM/view" target="_blank">Revised Omnibus Guidelines on PDITR for Covid 19.pdf</a>

                    <p>Evaluation and Assessment Link</p>
                    <a href="https://tinyurl.com/2021CTMod1" target="_blank">Module 1: COVID-19 Situationer</a>

                  </div>
                </div>
                
              </div>

              <div class="tab-pane" id="2b">

                <div class="row">
                  <div class="col-md-12">
                    <center>
                      <iframe src="https://drive.google.com/file/d/1XcdSGZONNbxHZWrbj1JrDcNIZD21k2mh/preview" width="1040" height="680" allow="autoplay"></iframe>
                      <h3>Instructional Video on Contact Tracing (Language_ Tagalog).mp4</h3>
                    </center>


                    <br>
                    <center>
                      <iframe src="https://drive.google.com/file/d/1umA0BkpZ-zXu4M1cTCNm7iMpj-2GuYoK/preview" width="1040" height="680" allow="autoplay"></iframe>
                      <h3>2_Contact Tracing Handbook_WHO_Harold Doroteo.mp4</h3>
                    </center>



                    <p>Additional Learning Materials/Reference</p>

                    <a href="https://drive.google.com/file/d/1jp0Z78BniL2AsSc_eQlaQmqejjU6vaGD/view" target="_blank">CT-Handbook.pdf</a>

                    <p>Evaluation and Assessment Link</p>
                    <a href="https://tinyurl.com/2021CTMod2" target="_blank">Module 2: The COVID-19 Contact Tracing Handbook</a>

                  </div>
                </div>

              </div>

              <div class="tab-pane" id="3b">
               
                <div class="row">
                  <div class="col-md-12">
                    <center>
                      <iframe src="https://drive.google.com/file/d/1Gl6npcnT0bNhTUkCBdIzaCVB_zOxHt0k/preview" width="1040" height="680" allow="autoplay"></iframe>
                      <h3>3_LGU Practice_Mayor Magalong.mp4</h3>
                    </center>


                    <p>Evaluation and Assessment Link</p>
                    <a href="https://tinyurl.com/2021CTMod3" target="_blank">Module 3: Baguio City’s Contact Tracing Best Practices</a>

                  </div>
                </div>

              </div>
              <div class="tab-pane" id="4b">
               
                <div class="row">
                  <div class="col-md-12">
                    <center>
                      <iframe src="https://drive.google.com/file/d/1ZVYE1DgtIe93UTQghZ_HpbLjN_kPUrqH/preview" width="1040" height="680" allow="autoplay"></iframe>
                      <h3>4_Cognitive Interviewing_PLtCol Maximo Sumeg-ang.mp4</h3>
                    </center>


                    <p>Evaluation and Assessment Link</p>
                    <a href="https://tinyurl.com/2021CTMod4" target="_blank">Module 4. Cognitive Interviewing</a>

                  </div>
                </div>

              </div>
              <div class="tab-pane" id="5b">
               
                <div class="row">
                  <div class="col-md-12">
                    <center>
                      <iframe src="https://drive.google.com/file/d/1nUQs5iP3UMv2yO1_A5BKAFy4BVcnODQJ/preview" width="1040" height="680" allow="autoplay"></iframe>
                      <h3>Stay Safe PH AVP May 2020.mp4</h3>
                    </center>


                    <center>
                      <iframe src="https://drive.google.com/file/d/1M3lju7HDWMDpeQmYHFkQlc19BEe5Pf8Q/preview" width="1040" height="680" allow="autoplay"></iframe>
                      <h3>FIL StaySafePH COVID19 Mitigation System w advanced contact tracing social distancing features.mp4</h3>
                    </center>

                    
                    <center>
                      <iframe src="https://drive.google.com/file/d/1CY7orD2bDGhg3Ry5kNLswm3Yy6skJFKZ/preview" width="1040" height="680" allow="autoplay"></iframe>
                      <h3>5a_StaySafe_Eric Baste.mp4</h3>
                    </center>


                    <p>Evaluation and Assessment Link</p>
                    <a href="https://tinyurl.com/2021CTMod5" target="_blank">Module 5. The StaySafe App</a>

                  </div>
                </div>

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
      $('#navCt').addClass('active');

      $('.tab1').click(function(){
        $( "li" ).removeClass( "activeTab" );
        $(this).addClass( "activeTab" );
      })

      $('.tab2').click(function(){
        $( "li" ).removeClass( "activeTab" );
        $(this).addClass( "activeTab" );
      })

      $('.tab3').click(function(){
        $( "li" ).removeClass( "activeTab" );
        $(this).addClass( "activeTab" );
      })

      $('.tab4').click(function(){
        $( "li" ).removeClass( "activeTab" );
        $(this).addClass( "activeTab" );
      })

      $('.tab5').click(function(){
        $( "li" ).removeClass( "activeTab" );
        $(this).addClass( "activeTab" );
      })




      $('.tab1').addClass( "activeTab" );


    </script>



  </body>
</html>