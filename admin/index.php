<?php include 'function php/conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Administrator</title>

    <?php include 'includes/css_includes.php'; ?>
    <link rel="stylesheet" href="dashboard/admin_css.css">

</head>

<body>
    <div class="page-wrapper default-theme sidebar-bg bg1 toggled">
        
        <!-- sidebar -->
        <?php include 'includes/sidebar.php'; ?>

        <!-- page-content  -->
        <main class="page-content pt-2">
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid p-5">
                <div class="row">

                    <div class="form-group col-md-12">
                        <a id="toggle-sidebar" class="btn btn-secondary rounded-0" href="#">
                            <!-- <span>Toggle Sidebar</span> -->
                            <span class="fas fa-list"></span>
                        </a>
                        <a id="pin-sidebar" class="btn btn-outline-secondary rounded-0" href="#">
                            <!-- <span>Pin Sidebar</span> -->
                            <span class="fas fa-map"></span>
                        </a>
                    </div>
                </div>
                <hr>



            <div class="row">
                <div class="col-md-12 mt-2">
                    <center><h2>Dashboard</h2></center>

                </div>
            </div>


            </div><!-- container -->



            <!-- <div class="content-wrapper"> -->
              <div class="container-fluid">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                </ol>
                <!-- Icon Cards-->
                <div class="row">
                  <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-secondary o-hidden h-100">
                      <div class="card-body">
                        <div class="card-body-icon">
                          <i class="fa fa-fw fa-users"></i>
                        </div>

                        <?php 
                        $sql = ' SELECT COUNT(`id`) as totalUser FROM `tbl_user` ';
                        $exec = $conn->query($sql);
                        $res = $exec->fetch_assoc();
                         ?>

                        <div class="mr-5"><?php echo $res['totalUser']; ?> Total Users</div>
                      </div>
                      <a class="card-footer text-white clearfix small z-1" href="users.php">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                          <i class="fa fa-angle-right"></i>
                        </span>
                      </a>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-warning o-hidden h-100">
                      <div class="card-body">
                        <div class="card-body-icon">
                          <i class="fa fa-fw fa-layer-group"></i>
                        </div>

                        <?php 
                        $sql = ' SELECT COUNT(`id`) as totalMsac FROM `tbl_msac` ';
                        $exec = $conn->query($sql);
                        $res = $exec->fetch_assoc();
                         ?>


                        <div class="mr-5"><?php echo $res['totalMsac']; ?> MSAC Members</div>
                      </div>
                      <a class="card-footer text-white clearfix small z-1" href="msac.php">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                          <i class="fa fa-angle-right"></i>
                        </span>
                      </a>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-success o-hidden h-100">
                      <div class="card-body">
                        <div class="card-body-icon">
                          <i class="fa fa-fw fa-book"></i>
                        </div>

                        <?php 
                        $sql = ' SELECT COUNT(`id`) as totalBook FROM `tbl_knowledge_products` ';
                        $exec = $conn->query($sql);
                        $res = $exec->fetch_assoc();
                         ?>

                        <div class="mr-5"><?php echo $res['totalBook']; ?> Knowledge Products</div>
                      </div>
                      <a class="card-footer text-white clearfix small z-1" href="knowledge-product.php">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                          <i class="fa fa-angle-right"></i>
                        </span>
                      </a>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-danger o-hidden h-100">
                      <div class="card-body">
                        <div class="card-body-icon">
                          <i class="fa fa-fw fa-user-tie"></i>
                        </div>

                        <?php 
                        $sql = ' SELECT COUNT(`id`) as totalExpert FROM `tbl_expert` ';
                        $exec = $conn->query($sql);
                        $res = $exec->fetch_assoc();
                         ?>

                        <div class="mr-5"><?php echo $res['totalExpert']; ?> Total Experts</div>
                      </div>
                      <a class="card-footer text-white clearfix small z-1" href="directory.php">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                          <i class="fa fa-angle-right"></i>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>

                <!-- Area Chart Example-->
                <div class="card mb-3">
                  <div class="card-header bg-primary text-white">
                    <i class="fa fa-area-chart"></i> Knowledge Product Borrowed History</div>
                  <div class="card-body">
                    <canvas id="myAreaChart" width="100%" height="30"></canvas>
                  </div>
                  <div class="card-footer small text-muted">

                    <?php 
                    $sql = ' SELECT `dateDownloaded` FROM `tbl_downloads` ORDER BY `dateDownloaded` DESC LIMIT 2 ';
                    $exec = $conn->query($sql);
                    $res = $exec->fetch_assoc();
                    $newDate = date("M d, Y | h:i:sA", strtotime($res['dateDownloaded']));
                    ?>


                      Updated <?php echo $newDate; ?>

                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-8">

                    <div class="mb-0 mt-4">
                      <i class="fa fa-newspaper-o"></i> Newly Uploaded News</div>
                    <hr class="mt-2">
                    <!-- <div class="card-columns"> -->

                      <div class="row">
                      <?php 
                      $sql = ' SELECT `id`, `title`, `description`, `imageName`, `status`, `dateUploaded`, `author` FROM `tbl_news` ORDER BY `dateUploaded` DESC LIMIT 2 ';
                      $exec = $conn->query($sql);
                      while ($res = $exec->fetch_assoc()) 
                      {
                        $newDate = date("M d, Y | h:i:sA", strtotime($res['dateUploaded']));
                       ?>

                        <!-- Example Social Card-->
                        <div class="col-sm-6">
                          <div class="card mb-3">
                            <a href="news.php">
                              <img class="card-img-top img-fluid" src="../images/news/<?php echo $res['imageName']; ?>" alt="" style="width: 500px; height: 350px;">
                            </a>
                            <div class="card-body">
                              <h6 class="card-title mb-1"><?php echo $res['author']; ?></h6>
                              <p class="card-text small"><?php echo $res['title']; ?>
                                <!-- <a href="#">#surfsup</a> -->
                              </p>
                            </div>
                            <hr class="my-0">
                            <div class="card-footer small text-muted"><?php echo $newDate; ?></div>
                          </div>
                        </div>
                        <!-- Example Social Card-->


                      <?php } ?>
                      </div>

                    <!-- </div> -->
                    <!-- /Card Columns-->
                  </div>
                  <div class="col-lg-4">

                    <div class="card mb-3">
                      <div class="card-header bg-success text-white">
                        <i class="fa fa-bell-o"></i>Newly Added MSAC Members</div>
                      <div class="list-group list-group-flush small">

                        <?php 
                          $sql = ' SELECT `id`, `agencyName`, `address`, `contactNumber`, `email`, `imageName`, `dateUploaded` FROM `tbl_msac` ORDER BY `dateUploaded` DESC LIMIT 6 ';
                          $exec = $conn->query($sql);
                          while ($res = $exec->fetch_assoc()) 
                          {
                            $newDate = date("M d, Y | h:i:sA", strtotime($res['dateUploaded']));
                         ?>


                        <a class="list-group-item list-group-item-action" href="msac.php">
                          <div class="media">
                            <img class="d-flex mr-3 rounded-circle" src="../images/msac/<?php echo $res['imageName']; ?>" alt="" style="width: 50px;">
                            <div class="media-body">
                              <strong><?php echo $res['agencyName']; ?></strong>
                              <div class="text-muted smaller"><?php echo $newDate; ?></div>
                            </div>
                          </div>
                        </a>

                         <?php } ?>

                        <a class="list-group-item list-group-item-action" href="msac.php">View all MSAC members</a>
                      </div>
                      <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
                    </div>
                  </div>
                </div>

                <hr>

                    <div class="mb-0 mt-4">
                      <i class="fa fa-newspaper-o"></i> Newly Embedded Videos
                    </div>
                    <hr class="mt-2">
                  
                <div class="row">
                    <?php 
                    $sql = ' SELECT `id`, `videoLink`, `videoTitle`, `dateUploaded`, `category`, `videoSeason` FROM `tbl_videos` ORDER BY `dateUploaded` DESC LIMIT 3 ';
                    $exec = $conn->query($sql);
                    while ($res = $exec->fetch_assoc()) 
                    {
                      $newDate = date("M d, Y | h:i:sA", strtotime($res['dateUploaded']));
                     ?>

                       <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                          <div class="fb-video card-img-top" data-href="<?php echo $res['videoLink']; ?>" data-width="500" data-show-text="false"><blockquote cite="<?php echo $res['videoLink']; ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $res['videoLink']; ?>"><?php echo $res['videoTitle']; ?></a><p></blockquote></div>
                          <div class="card-body">
                            <p class="card-text"><b><?php echo $res['videoTitle']; ?></b></p>
                            <p class="card-text text-muted"><?php echo $newDate; ?></p>
                          </div>
                        </div>
                      </div>


                    <?php } ?>



              </div>
              <!-- /.container-fluid-->
            <!-- </div> -->





        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->

 
    <!--------------------------------- COUNT BORROWED PRODUCT HISTORY -------------------------->
    <?php 

    for ($i=1; $i < 13; $i++) { 
      
   
      $sql = ' SELECT COUNT(`id`) as totalDownload FROM `tbl_downloads` WHERE MONTH(dateDownloaded) = '.$i.' ';
      $exec = $conn->query($sql);
      $resTotal = $exec->fetch_assoc();
      $totalDownload[$i] = $resTotal['totalDownload'];

    }

     ?>

    <!--------------------------------- COUNT BORROWED PRODUCT HISTORY -------------------------->


    <!-- using local scripts -->
<?php include 'includes/js_includes.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>

<script>

  // Chart.js scripts
  // -- Set new default font family and font color to mimic Bootstrap's default styling
  Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
  Chart.defaults.global.defaultFontColor = '#292b2c';
  // -- Area Chart Example
  var ctx = document.getElementById("myAreaChart");
  var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
      datasets: [{
        label: "Downloads",
        lineTension: 0.3,
        backgroundColor: "rgba(2,117,216,0.2)",
        borderColor: "rgba(2,117,216,1)",
        pointRadius: 5,
        pointBackgroundColor: "rgba(2,117,216,1)",
        pointBorderColor: "rgba(255,255,255,0.8)",
        pointHoverRadius: 5,
        pointHoverBackgroundColor: "rgba(2,117,216,1)",
        pointHitRadius: 20,
        pointBorderWidth: 2,
        data: [<?php echo $totalDownload[1]; ?>, <?php echo $totalDownload[2]; ?>, <?php echo $totalDownload[3]; ?>, <?php echo $totalDownload[4]; ?>, <?php echo $totalDownload[5]; ?>, <?php echo $totalDownload[6]; ?>, <?php echo $totalDownload[7]; ?>, <?php echo $totalDownload[8]; ?>, <?php echo $totalDownload[9]; ?>, <?php echo $totalDownload[10]; ?>, <?php echo $totalDownload[11]; ?>, <?php echo $totalDownload[12]; ?>],
      }],
    },
    options: {
      scales: {
        xAxes: [{
          time: {
            unit: 'date'
          },
          gridLines: {
            display: false
          },
          ticks: {
            maxTicksLimit: 7
          }
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: <?php echo max($totalDownload); ?>,
            maxTicksLimit: 5
          },
          gridLines: {
            color: "rgba(0, 0, 0, .125)",
          }
        }],
      },
      legend: {
        display: false
      }
    }
  });
  // -- Bar Chart Example
  var ctx = document.getElementById("myBarChart");
  var myLineChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["January", "February", "March", "April", "May", "June"],
      datasets: [{
        label: "Revenue",
        backgroundColor: "rgba(2,117,216,1)",
        borderColor: "rgba(2,117,216,1)",
        data: [4215, 5312, 6251, 7841, 9821, 14984],
      }],
    },
    options: {
      scales: {
        xAxes: [{
          time: {
            unit: 'month'
          },
          gridLines: {
            display: false
          },
          ticks: {
            maxTicksLimit: 6
          }
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: 15000,
            maxTicksLimit: 5
          },
          gridLines: {
            display: true
          }
        }],
      },
      legend: {
        display: false
      }
    }
  });
  // -- Pie Chart Example
  var ctx = document.getElementById("myPieChart");
  var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["Blue", "Red", "Yellow", "Green"],
      datasets: [{
        data: [12.21, 15.58, 11.25, 8.32],
        backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
      }],
    },
  });

  $(document).ready(function() {
    $('#dataTable').DataTable();
  });

  (function($) {
    "use strict"; // Start of use strict
    // Configure tooltips for collapsed side navigation
    $('.navbar-sidenav [data-toggle="tooltip"]').tooltip({
      template: '<div class="tooltip navbar-sidenav-tooltip" role="tooltip" style="pointer-events: none;"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
    })
    // Toggle the side navigation
    $("#sidenavToggler").click(function(e) {
      e.preventDefault();
      $("body").toggleClass("sidenav-toggled");
      $(".navbar-sidenav .nav-link-collapse").addClass("collapsed");
      $(".navbar-sidenav .sidenav-second-level, .navbar-sidenav .sidenav-third-level").removeClass("show");
    });
    // Force the toggled class to be removed when a collapsible nav link is clicked
    $(".navbar-sidenav .nav-link-collapse").click(function(e) {
      e.preventDefault();
      $("body").removeClass("sidenav-toggled");
    });
    // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
    $('body.fixed-nav .navbar-sidenav, body.fixed-nav .sidenav-toggler, body.fixed-nav .navbar-collapse').on('mousewheel DOMMouseScroll', function(e) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    });
    // Scroll to top button appear
    $(document).scroll(function() {
      var scrollDistance = $(this).scrollTop();
      if (scrollDistance > 100) {
        $('.scroll-to-top').fadeIn();
      } else {
        $('.scroll-to-top').fadeOut();
      }
    });
    // Configure tooltips globally
    $('[data-toggle="tooltip"]').tooltip()
    // Smooth scrolling using jQuery easing
    $(document).on('click', 'a.scroll-to-top', function(event) {
      var $anchor = $(this);
      $('html, body').stop().animate({
        scrollTop: ($($anchor.attr('href')).offset().top)
      }, 1000, 'easeInOutExpo');
      event.preventDefault();
    });
  })(jQuery); // End of use strict

</script>

</body>

</html>