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
                            <a href="https://drive.google.com/file/d/1x5Hebo0Cju0-nP4jWWs4hb0fODXwj1id/view?usp=sharing" target="_blank" class="btn btn-primary btnDownload" title="Download"><i class="fa fa-chevron-circle-down"></i></a>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              [CT] COVID Situationer_1621302963.pdf
                            </button>
                              <a class="float-right btnExam" onclick="alert('Redirect to google form');">Take Exam <i class="fa fa-link"></i></a>
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
                            <a href="https://drive.google.com/file/d/1FwZ_124Am93_Y4T0kjIovh0Rs5IMyNBE/view?usp=sharing" target="_blank" class="btn btn-primary btnDownload" title="Download"><i class="fa fa-chevron-circle-down"></i></a>
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Revised Omnibus Guidelines on PDITR for Covid 19.pdf
                            </button>
                              <a class="float-right btnExam" onclick="alert('Redirect to google form');">Take Exam <i class="fa fa-link"></i></a>
                          </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-body">
                            <iframe src="https://drive.google.com/file/d/1QXWxr5-zvi2XfSOggGV4hvgUVE68D9nr/preview" width="100%" height="480" allow="autoplay"></iframe>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-1"></div>
                </div>


              </div>
              <div class="tab-pane" id="2b">
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <center>
                      <h3>Contact Tracing_A Review</h3>
                    </center>
                    <div class="accordion" id="accordionExample">
                      <div class="card">
                        <div class="card-header" id="headingOneA">
                          <h2 class="mb-0">
                            <a href="https://drive.google.com/file/d/1swwljkJXxIv6RxpyqCz1XsQ9YuxW6LqB/view?usp=sharing" target="_blank" class="btn btn-primary btnDownload" title="Download"><i class="fa fa-chevron-circle-down"></i></a>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOneA" aria-expanded="true" aria-controls="collapseOneA">
                              CT-Handbook.pdf
                            </button>
                              <a class="float-right btnExam" onclick="alert('Redirect to google form');">Take Exam <i class="fa fa-link"></i></a>
                          </h2>
                        </div>

                        <div id="collapseOneA" class="collapse show" aria-labelledby="headingOneA" data-parent="#accordionExample">
                          <div class="card-body">
                            <iframe src="https://drive.google.com/file/d/1swwljkJXxIv6RxpyqCz1XsQ9YuxW6LqB/preview" width="100%" height="480" allow="autoplay"></iframe>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwoA">
                          <h2 class="mb-0">
                            <a href="https://drive.google.com/file/d/1XJG3i5ZqOje7_j-mBxVIH0fLhFGlLB2s/view?usp=sharing" target="_blank" class="btn btn-primary btnDownload" title="Download"><i class="fa fa-chevron-circle-down"></i></a>
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwoA" aria-expanded="false" aria-controls="collapseTwoA">
                              LINKS TO CONTACT TRACING VIDEOS.docx
                            </button>
                              <a class="float-right btnExam" onclick="alert('Redirect to google form');">Take Exam <i class="fa fa-link"></i></a>
                          </h2>
                        </div>
                        <div id="collapseTwoA" class="collapse" aria-labelledby="headingTwoA" data-parent="#accordionExample">
                          <div class="card-body">
                            <iframe src="https://docs.google.com/document/d/e/2PACX-1vTreX5OukC4eOoMGeuNFBIQtZUx-lx123yq4SNH84Hbiw0hK4bieJ_70f6lSW-ksA/pub?embedded=true" width="100%" height="480"></iframe>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThreeA">
                          <h2 class="mb-0">
                            <a href="https://drive.google.com/file/d/1bN1m15zBP4ZljXSv1JGU6dbzSXfgH1I1/view?usp=sharing" target="_blank" class="btn btn-primary btnDownload" title="Download"><i class="fa fa-chevron-circle-down"></i></a>
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThreeA" aria-expanded="false" aria-controls="collapseThreeA">
                              Session 2.1 Contact Tracing for COVID 19 (CT Handbook).pptx
                            </button>
                              <a class="float-right btnExam" onclick="alert('Redirect to google form');">Take Exam <i class="fa fa-link"></i></a>
                          </h2>
                        </div>
                        <div id="collapseThreeA" class="collapse" aria-labelledby="headingThreeA" data-parent="#accordionExample">
                          <div class="card-body">
                            <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vShn2tbqlb_ioacMZOCcaYQ8_N_J65gVMr796kmeoSTQXQdYpRgKw72-Ct2WjWofw/embed?start=false&loop=false&delayms=3000" frameborder="0" width="100%" height="480" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingFourA">
                          <h2 class="mb-0">
                            <a href="https://drive.google.com/file/d/1GT8xqK7v570ruf0uahuMqwOjPC-MNwV-/view?usp=sharing" target="_blank" class="btn btn-primary btnDownload" title="Download"><i class="fa fa-chevron-circle-down"></i></a>
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFourA" aria-expanded="false" aria-controls="collapseFourA">
                              Session 2.2 LGU Practice-Baguio City Contact Tracing System.pdf
                            </button>
                              <a class="float-right btnExam" onclick="alert('Redirect to google form');">Take Exam <i class="fa fa-link"></i></a>
                          </h2>
                        </div>
                        <div id="collapseFourA" class="collapse" aria-labelledby="headingFourA" data-parent="#accordionExample">
                          <div class="card-body">
                            <iframe src="https://drive.google.com/file/d/1GT8xqK7v570ruf0uahuMqwOjPC-MNwV-/preview" width="100%" height="480" allow="autoplay"></iframe>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingFiveA">
                          <h2 class="mb-0">
                            <a href="https://drive.google.com/file/d/1pa4dFVA1jKJeMRVslN7UcjEUH7MRfs_r/view?usp=sharing" target="_blank" class="btn btn-primary btnDownload" title="Download"><i class="fa fa-chevron-circle-down"></i></a>
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFiveA" aria-expanded="false" aria-controls="collapseFiveA">
                              Session 2.2a LGU Practice-Baguio City Contact Tracing System.pptx
                            </button>
                              <a class="float-right btnExam" onclick="alert('Redirect to google form');">Take Exam <i class="fa fa-link"></i></a>
                          </h2>
                        </div>
                        <div id="collapseFiveA" class="collapse" aria-labelledby="headingFiveA" data-parent="#accordionExample">
                          <div class="card-body">
                            <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vRSiVnOGoKahJ07tbpV08XDzOUDSMZoKzmo_OIybdcJOR5AndoFTieRDv7og2A-nA/embed?start=false&loop=false&delayms=3000" frameborder="0" width="100%" height="480" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
                  <div class="col-md-1"></div>
                </div>


              </div>
              <div class="tab-pane" id="3b">
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <center>
                      <h3>Cognitive Interviewing</h3>
                    </center>
                    <div class="accordion" id="accordionExample">
                      <div class="card">
                        <div class="card-header" id="headingOneB">
                          <h2 class="mb-0">
                            <a href="https://drive.google.com/file/d/1qscCQ0Tsk-1uhO0Yb7f4t5PR6851LkWa/view?usp=sharing" target="_blank" class="btn btn-primary btnDownload" title="Download"><i class="fa fa-chevron-circle-down"></i></a>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOneB" aria-expanded="true" aria-controls="collapseOneB">
                              Session 3- Cognitive Interviewing.pptx
                            </button>
                              <a class="float-right btnExam" onclick="alert('Redirect to google form');">Take Exam <i class="fa fa-link"></i></a>
                          </h2>
                        </div>

                        <div id="collapseOneB" class="collapse show" aria-labelledby="headingOneB" data-parent="#accordionExample">
                          <div class="card-body">
                            <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vRYvy1HqiRlWLtxa577H5Zpidpa8Nu9NIstEs6EJS4ONw8cNt8z58NECO1Z-fQlKg/embed?start=false&loop=false&delayms=3000" frameborder="0" width="100%" height="480" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-1"></div>
                </div>
              </div>
              <div class="tab-pane" id="4b">
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <center>
                      <h3>Contact Tracing Data Analytics _ Mapping</h3>
                    </center>
                    <div class="accordion" id="accordionExample">

                      <div class="card">
                        <div class="card-header" id="headingOneC">
                          <h2 class="mb-0">
                            <a href="https://drive.google.com/file/d/1BoXmSYB-iQ5gCbn-nHnSluI3JkJusGNz/view?usp=sharing" target="_blank" class="btn btn-primary btnDownload" title="Download"><i class="fa fa-chevron-circle-down"></i></a>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOneC" aria-expanded="true" aria-controls="collapseOneC">
                              LINKS TO VIDEO TUTORIALS.docx
                            </button>
                              <a class="float-right btnExam" onclick="alert('Redirect to google form');">Take Exam <i class="fa fa-link"></i></a>
                          </h2>
                        </div>
                        <div id="collapseOneC" class="collapse show" aria-labelledby="headingOneC" data-parent="#accordionExample">
                          <div class="card-body">
                            <iframe src="https://docs.google.com/document/d/e/2PACX-1vRdVJOGhkmyImDGJN0CyYOcZVmp-NGFN14MlSqgRKb6qZvzqa3obA4T0GSHaAVpyw/pub?embedded=true" width="100%" height="480"></iframe>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" id="headingTwoC">
                          <h2 class="mb-0">
                            <a href="https://drive.google.com/file/d/1c6hWkVg1VZC0-RtVHfAtKX0KWDtFrPtJ/view?usp=sharing" target="_blank" class="btn btn-primary btnDownload" title="Download"><i class="fa fa-chevron-circle-down"></i></a>
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwoC" aria-expanded="false" aria-controls="collapseTwoC">
                              Process Flow with Personnel v4-2_1621492473.pdf
                            </button>
                              <a class="float-right btnExam" onclick="alert('Redirect to google form');">Take Exam <i class="fa fa-link"></i></a>
                          </h2>
                        </div>
                        <div id="collapseTwoC" class="collapse" aria-labelledby="headingTwoC" data-parent="#accordionExample">
                          <iframe src="https://drive.google.com/file/d/1c6hWkVg1VZC0-RtVHfAtKX0KWDtFrPtJ/preview" width="100%" height="480" allow="autoplay"></iframe>
                        </div>
                      </div>
                      
                      <div class="card">
                        <div class="card-header" id="headingThreeC">
                          <h2 class="mb-0">
                            <a href="https://drive.google.com/file/d/1bZxR1WZ4yZ7UlALRRLc-RP44N1keQ-m1/view?usp=sharing" target="_blank" class="btn btn-primary btnDownload" title="Download"><i class="fa fa-chevron-circle-down"></i></a>
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThreeC" aria-expanded="false" aria-controls="collapseThreeC">
                              Session 4a Contact Tracing Data Analytics _ Mapping-Baguio City Experience.pptx
                            </button>
                              <a class="float-right btnExam" onclick="alert('Redirect to google form');">Take Exam <i class="fa fa-link"></i></a>
                          </h2>
                        </div>
                        <div id="collapseThreeC" class="collapse" aria-labelledby="headingThreeC" data-parent="#accordionExample">
                          <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vR4N8l04qOVROMjGYu4kqoP91t-2kcYpiaC1Muf3iAz5xaL4ozrecAZncnviY018A/embed?start=false&loop=false&delayms=3000" frameborder="0" width="100%" height="480" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                        </div>
                      </div>
                      
                      <div class="card">
                        <div class="card-header" id="headingFourC">
                          <h2 class="mb-0">
                            <a href="https://drive.google.com/file/d/1tV9i-eWZPe9LqV4dCnuBa1758dbMT7yc/view?usp=sharing" target="_blank" class="btn btn-primary btnDownload" title="Download"><i class="fa fa-chevron-circle-down"></i></a>
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFourC" aria-expanded="false" aria-controls="collapseFourC">
                              Session 4b Contact Tracing Data Analytics _ Mapping-Baguio City Experience.pptx
                            </button>
                              <a class="float-right btnExam" onclick="alert('Redirect to google form');">Take Exam <i class="fa fa-link"></i></a>
                          </h2>
                        </div>
                        <div id="collapseFourC" class="collapse" aria-labelledby="headingFourC" data-parent="#accordionExample">
                          <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vS0IiK4gItgS6gdRM29zYL3kQhECuFr-gypsA8Fnbn9gNKGB1E8R0BTQh_M6h4qKA/embed?start=false&loop=false&delayms=3000" frameborder="0" width="1280" height="749" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-1"></div>
                </div>
              </div>
              <div class="tab-pane" id="5b">
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <center>
                      <h3>Stay Safe</h3>
                    </center>
                    <div class="accordion" id="accordionExample">
                      <div class="card">
                        <div class="card-header" id="headingOneD">
                          <h2 class="mb-0">
                            <a href="https://drive.google.com/file/d/1agqrKECuLGjqh-3uQr0EjFvuATCZRfjp/view?usp=sharing" target="_blank" class="btn btn-primary btnDownload" title="Download"><i class="fa fa-chevron-circle-down"></i></a>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOneD" aria-expanded="true" aria-controls="collapseOneD">
                              FIL StaySafePH COVID19 Mitigation System w advanced contact tracing social distancing features.mp4
                            </button>
                              <a class="float-right btnExam" onclick="alert('Redirect to google form');">Take Exam <i class="fa fa-link"></i></a>
                          </h2>
                        </div>

                        <div id="collapseOneD" class="collapse show" aria-labelledby="headingOneD" data-parent="#accordionExample">
                          <div class="card-body">
                            <iframe src="https://drive.google.com/file/d/1agqrKECuLGjqh-3uQr0EjFvuATCZRfjp/preview" width="100%" height="480" allow="autoplay"></iframe>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwoD">
                          <h2 class="mb-0">
                            <a href="https://drive.google.com/file/d/10tkbmNO-OKoBP6kAu4__VcipY16bxTWe/view?usp=sharing" target="_blank" class="btn btn-primary btnDownload" title="Download"><i class="fa fa-chevron-circle-down"></i></a>
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwoD" aria-expanded="false" aria-controls="collapseTwoD">
                              Session 5-Stay Safe (Citizens and Establishment).pdf
                            </button>
                              <a class="float-right btnExam" onclick="alert('Redirect to google form');">Take Exam <i class="fa fa-link"></i></a>
                          </h2>
                        </div>
                        <div id="collapseTwoD" class="collapse" aria-labelledby="headingTwoD" data-parent="#accordionExample">
                          <div class="card-body">
                            <iframe src="https://drive.google.com/file/d/10tkbmNO-OKoBP6kAu4__VcipY16bxTWe/preview" width="100%" height="480" allow="autoplay"></iframe>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThreeD">
                          <h2 class="mb-0">
                            <a href="https://drive.google.com/file/d/1MH1EtyBroxoY1rFNnSW3hKFWmd277kTc/view?usp=sharing" target="_blank" class="btn btn-primary btnDownload" title="Download"><i class="fa fa-chevron-circle-down"></i></a>
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThreeD" aria-expanded="false" aria-controls="collapseThreeD">
                              Stay Safe PH AVP May 2020.mp4
                            </button>
                              <a class="float-right btnExam" onclick="alert('Redirect to google form');">Take Exam <i class="fa fa-link"></i></a>
                          </h2>
                        </div>
                        <div id="collapseThreeD" class="collapse" aria-labelledby="headingThreeD" data-parent="#accordionExample">
                          <div class="card-body">
                            <iframe src="https://drive.google.com/file/d/1MH1EtyBroxoY1rFNnSW3hKFWmd277kTc/preview" width="100%" height="480" allow="autoplay"></iframe>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-1"></div>
                </div>

              </div>
              <div class="tab-pane" id="6b">
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <center>
                      <h3>Conversation Cafe</h3>
                    </center>
                    <div class="accordion" id="accordionExample">
                      <div class="card">
                        <div class="card-header" id="headingOneE">
                          <h2 class="mb-0">
                            <a href="https://drive.google.com/file/d/1FGFFz7wmRae9PFU1N-ES0zV7-_mcwPvn/view?usp=sharing" target="_blank" class="btn btn-primary btnDownload" title="Download"><i class="fa fa-chevron-circle-down"></i></a>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOneE" aria-expanded="true" aria-controls="collapseOneE">
                              CT_Workshop Mechanics.pptx
                            </button>
                              <a class="float-right btnExam" onclick="alert('Redirect to google form');">Take Exam <i class="fa fa-link"></i></a>
                          </h2>
                        </div>

                        <div id="collapseOneE" class="collapse show" aria-labelledby="headingOneE" data-parent="#accordionExample">
                          <div class="card-body">
                            <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vTvNfWl1eVwVH24-bQXLbpJYdttVx4vSK4VRJ_oNn2KxvGGpvc0BiGo0eVI-WCDdw/embed?start=false&loop=false&delayms=3000" frameborder="0" width="100%" height="480" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwoE">
                          <h2 class="mb-0">
                            <a href="https://drive.google.com/file/d/1tQAylx0RdgDol-SwCmeDPTdKkN7eCCqo/view?usp=sharing" target="_blank" class="btn btn-primary btnDownload" title="Download"><i class="fa fa-chevron-circle-down"></i></a>
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwoE" aria-expanded="false" aria-controls="collapseTwoE">
                              Workshop Output CT_[Group No.].pptx
                            </button>
                              <a class="float-right btnExam" onclick="alert('Redirect to google form');">Take Exam <i class="fa fa-link"></i></a>
                          </h2>
                        </div>
                        <div id="collapseTwoE" class="collapse" aria-labelledby="headingTwoE" data-parent="#accordionExample">
                          <div class="card-body">
                            <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vTckhDjViNWNiwJlnPhtLlCWMx_f2SAKAezTTxoxClzrS1wxhBOTHmT9qApukRT-A/embed?start=false&loop=false&delayms=3000" frameborder="0" width="100%" height="480" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-1"></div>
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
      $('.nav-item a').click(function(){
        $('.nav-item a').removeClass( "activeTab" );
        $('.tab1').removeClass( "activeTab" );
        $(this).addClass( "activeTab" );
      });

      $('.tab1').addClass( "activeTab" );


    </script>



  </body>
</html>