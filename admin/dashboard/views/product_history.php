<?php 
  $sql = ' SELECT `dateDownloaded` FROM `tbl_downloads` ORDER BY `dateDownloaded` DESC LIMIT 2 ';
  $exec = $conn->query($sql);
  $res = $exec->fetch_assoc();
  $newDate = date("M d, Y | h:i:sA", strtotime($res['dateDownloaded']));
?>    

<div class="col-xl-12 col-sm-12 mb-3">
  <div class="card-header bg-primary text-white">
    <i class="fa fa-area-chart"></i> Knowledge Product Borrowed History
  </div>

  <div class="row mt-1">
    <div class="col-xl-12 col-sm-12">
      <div class="card">
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
        <div class="card-footer small text-muted">
          Updated <?php echo $newDate; ?>
        </div>
      </div>  
    </div>  
  </div>  

</div>

<!--------------------------------- COUNT BORROWED PRODUCT HISTORY -------------------------->
<?php 

for ($i=1; $i < 13; $i++) 
{ 


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


</script>