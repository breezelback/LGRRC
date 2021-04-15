<?php 
include 'function php/conn.php';

if (isset($_GET['btnSearch'])) 
{
  $searchValue = $_GET['searchValue'];
  if ($searchValue != '') 
  {
    $queryWhere = 'WHERE `borrowerId` = "'.$searchValue.'" OR `borrowerName` = "%'.$searchValue.'%" ';
  }
  else
  { 
    $queryWhere = '';
  }
}
else
{
  $queryWhere = '';
  $searchValue = '';
}
 ?>
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
                    <center><h2>Downloaded Product Logs</h2></center>

                    <form action="" method="get">
                      <div class="input-group" style="width:22%;">
                        <input type="text" class="form-control" placeholder="Search Borrower ID or Name" name="searchValue" value="<?php echo $searchValue; ?>">
                        <div class="input-group-append">
                          <button class="btn btn-secondary" type="submit" name="btnSearch">
                            <i class="fa fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </form>

                    <br>
                     <div class="card mb-3">
                      <div class="card-header">
                        <i class="fa fa-table"></i> Data Management
                      </div>
                      <div class="card-body">
                        <div class="table-responsive" style="font-family: ui monospace;">
                          <table class="table table-bordered" width="100%" cellspacing="0" style="font-size: 15px;">
                            <thead>
                              <tr>
                                <th>Borrower ID</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th width="7%"><center>Action</center></th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sql = ' SELECT DISTINCT(`borrowerId`) FROM `tbl_downloads` '.$queryWhere.' ORDER BY `borrowerId` ';
                                $exec = $conn->query($sql);
                                while ($res = $exec->fetch_assoc()) 
                                {
                                  $selectUser = ' SELECT `id`, `lastname`, `firstname`, `middlename`, `address`, `mobile`, `birthday`, `username`, `password`, `status`, `dateUploaded`, `borrowerId` FROM `tbl_user` WHERE `borrowerId` = "'.$res['borrowerId'].'" ';
                                  $execUser = $conn->query($selectUser);
                                  $resUser = $execUser->fetch_assoc();
                                 ?>
                                  <tr>
                                     <td><?php echo $resUser['borrowerId']; ?></td>
                                     <td><?php echo $resUser['firstname'].' '.$resUser['lastname']; ?></td>
                                     <td><?php echo $resUser['address']; ?></td>

                                     <td><button class="btn btn-success" onclick="viewLog('<?php echo $resUser['borrowerId']; ?>');"><i class="fa fa-list"></i> View Log</button></td>
                                  </tr>


                                <?php } ?>
                            </tbody>

                          </table>
                        </div>
                      </div>
                      <div class="card-footer small text-muted"></div>
                    </div>


                </div>
            </div>

             <!--  <div class="row">
                <div class="col-md-12 mt-2">
                    <center><h2>Downloaded Product Logs</h2></center>
                    <br>
                     <div class="card mb-3">
                      <div class="card-header">
                        <i class="fa fa-table"></i> Data Management
                      </div>
                      <div class="card-body">
                        <div class="table-responsive" style="font-family: ui monospace;">
                          <table class="table table-bordered" id="result1" width="100%" cellspacing="0" style="font-size: 15px;">
                            <thead>
                              <tr>
                                <th>Borrower ID</th>
                                <th>Name</th>
                                <th width="7%"><center>Action</center></th>
                              </tr>
                            </thead>
                          </table>
                        </div>
                      </div>
                      <div class="card-footer small text-muted"></div>
                    </div>


                </div>
            </div> -->



            <!----------------------------------------------- MODAL VIEW LOG ---------------------------------->

              <div class="modal fade" id="modalViewLog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">View Logs</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <table class="table table-bordered">
                        <thead>
                          <th>Knowledge Product Title</th>
                          <th>Date Downloaded</th>
                        </thead>
                        <tbody id="logOutput">
                          
                        </tbody>
                      </table>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

            <!----------------------------------------------- MODAL VIEW LOG ---------------------------------->










            </div><!-- container -->
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->

    <!-- using local scripts -->

<?php include 'includes/js_includes.php' ?>
<script type="text/javascript">
    //-----------------------------------------------------FETCH USER-----------------------------------------------------------------------
 function fetch_users() {
   $('#result1').DataTable().destroy();

   var dataTable = $('#result1').DataTable({
    "sDom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
    "processing" : true,
    "bStateSave": true, //stay on this page
    responsive: true,
    "serverSide" : true,
    "order" : [],
    "drawCallback": function(settings) {
    // console.log(settings.json);
    
   
    },
    "ajax" : {
     url:"function php/fetchBorrower.php",
     type:"POST",
     cache:false,

    },
    "autoWidth" : false
   });

  }

fetch_users();

//----------------------------------------------------------FETCH USER-----------------------------------------------------------------------



function viewLog(borrowerId)
{

  $.ajax({

    url:"function php/fetchLogs.php?borrowerId="+borrowerId, 
    method:"POST",  

    contentType:false,
    cache:false,
    processData:false,
    beforeSend:function() {

      // $('#imgLoading').show();

    },  
    error:function(data){

               
    }, 
    success:function(data){
      $('#imgLoading').hide();

      document.getElementById("logOutput").innerHTML=data;
      document.getElementById("logOutput").hidden=false;

      }
            


  });

  $('#modalViewLog').modal('show');
}




</script>
</body>

</html>