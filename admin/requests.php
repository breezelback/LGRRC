
<?php include 'function php/conn.php'; ?>
<?php include 'validate.php'; ?>

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


</head>

<body>

    <div class="page-wrapper default-theme sidebar-bg bg1 toggled">
        
        <!-- sidebar -->
        <?php include 'includes/sidebar.php' ?>

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
                    <center><h2>Expert Requests</h2></center>

                     <div class="card mb-3">
                      <div class="card-header">
                        <i class="fa fa-table"></i> Request Management
                      </div>
                      <div class="card-body">
                        <div class="table-responsive" style="font-family: ui monospace;">
                          <table class="table table-bordered" id="result1" width="100%" cellspacing="0" style="font-size: 15px;">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th><center>Expert Name</center></th>
                                <th>Requested Expertise</th>
                                <th>Purpose/Reason</th>
                                <th>Requestor Name</th>
                                <th>Date Requested</th>
                                <!-- <th width="7%"><center>Action</center></th> -->
                              </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $x = 1;
                                $sql = ' SELECT `id`, `expertId`, `expertName`, `expertExpertise`, `requestorId`, `requestorName`, `requestorAddress`, DATE_FORMAT(`dateRequested`, "%M %d, %Y") AS dateRequested, `reason`, `requested_expertise` FROM `tbl_request` ';
                                $exec = $conn->query($sql);

                                while ($row = $exec->fetch_assoc()) { 

                                  $selectExpert = ' SELECT `name` FROM `tbl_expert` WHERE `id` = '.$row['expertId'].' ';
                                  $execExpert = $conn->query($selectExpert);
                                  $expertName = $execExpert->fetch_assoc();

                                  $selectRequestor = ' SELECT `id`, `lastname`, `firstname`, `middlename`, `mobile`, `email` FROM `tbl_user` WHERE `id` = '.$row['requestorId'].' ';
                                  $execRequestor = $conn->query($selectRequestor);
                                  $requestor = $execRequestor->fetch_assoc();
                                  $requestorName = $requestor['firstname'].' '.$requestor['lastname'];
                                  $mobile_number = '';
                                  $email = '';

                                  if (!empty($requestor['mobile'])) {
                                    $mobile_number = ' / '.$requestor['mobile'];
                                  }

                                  if (!empty($requestor['email'])) {
                                    $email = ' / '.$requestor['email'];
                                  }



                                  ?>
                                  <tr>
                                    <td><?php echo $x; ?></td>
                                    <td><center><?php echo $expertName["name"] ?><br> <span style="font-size:12px; font-family: segoe UI;">Expertise: <b><?php echo $row["expertExpertise"]; ?></b></span></center></td>
                                    <td><?php echo $row['requested_expertise']; ?></td>
                                    <td><?php echo $row['reason']; ?></td>
                                    <td><?php echo $requestorName.$mobile_number.$email; ?></td>
                                    <td><?php echo $row['dateRequested']; ?></td>
                                  </tr>

                                <?php $x++; } ?>

                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="card-footer small text-muted"></div>
                    </div>


                </div>
            </div>

   

            </div><!-- container -->
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->

    <!-- using local scripts -->
<?php include 'includes/js_includes.php' ?>
<script type="text/javascript">
    

</script>
</body>

</html>