
<?php 
require_once 'validate.php';
require_once 'function php/fetchUsersData.php';

 ?>

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
                    <center><h2>Public User Accounts</h2></center>

                     <div class="card mb-3">
                      <div class="card-header">
                        <i class="fa fa-table"></i> User Management
                      </div>
                      <div class="card-body">
                        <div class="table-responsive" style="font-family: ui monospace;">
                          <table class="table table-bordered" id="result1" width="100%" cellspacing="0" style="font-size: 15px;">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Mobile</th>
                                <th>Birthday</th>
                                <th>Status</th>
                                <th>Date Registered</th> 
                                <th width="7%"><center>Action</center></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($users as $key => $user): ?>  
                              <tr>
                                <td><?php echo $user['firstname'].' '.$user['middlename'].' '.$user['lastname']; ?></td>
                                <td><?php echo $user['address']; ?></td>
                                <td><?php echo $user['mobile']; ?></td>
                                <td><?php echo $user['birthday']; ?></td>
                                <td><?php echo $user['status']; ?></td>
                                <td><?php echo $user['dateUploaded']; ?></td>

                                <?php if ( $user['status'] == 'approved' ) { ?>
                                  <td>
                                    <center>
                                      <div class="cell-button-alignment">
                                        <div class="cell-button btn-group">
                                          <button style="width:60px;" type="button" id="td_btn_edit" data-id_edit="<?php echo $user["id"]; ?>" data-toggle= "modal" data-target="#modalUpdate" class="btn btn-md btn-primary">
                                          <span class="fa fa-edit"></span></button>
                                          <button style="width:60px;" type="button" id="td_btn_delete" data-id_delete="<?php echo $user["id"]; ?>" class="btn btn-md btn-danger" data-toggle="modal" data-target="#residentsModal">
                                          <span class="fa fa-times-circle"></span></button>
                                        </div>
                                      </div>
                                    </center>
                                  </td>
                                <?php } else { ?>
                                  <td>
                                    <center>
                                      <div class="cell-button-alignment">
                                        <div class="cell-button btn-group">
                                          <button style="width:60px;" type="button" id="td_btn_approve" data-id_approve="<?php echo $user["id"]; ?>" data-toggle= "modal" data-target="#modalEditExam" class="btn btn-md btn-success">
                                          <span class="fa fa-check"></span></button>
                                          <button style="width:60px;" type="button" id="td_btn_edit" data-id_edit="<?php echo $user["id"]; ?>" data-toggle= "modal" data-target="#modalUpdate" class="btn btn-md btn-primary">
                                          <span class="fa fa-edit"></span></button>
                                        </div>
                                      </div>
                                    </center>
                                  </td>
                                <?php } ?>
                              </tr>
                              <?php endforeach ?> 

                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="card-footer small text-muted"></div>
                    </div>


                </div>
            </div>

   

            <!-- Modal -->
            <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                  <div class="modal-header bg-success">
                    <h5 class="modal-title text-white" id="exampleModalLabel" style="margin: 0 auto;">Update User <i class="fa fa-users-cog"></i></h5>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-4">
                        Lastname:
                        <input type="text" class="form-control" id="updateLastname">
                      </div>
                      <div class="col-md-4">
                        Firstname:
                        <input type="text" class="form-control" id="updateFirstname">
                      </div>
                      <div class="col-md-4">
                        Middlename:
                        <input type="text" class="form-control" id="updateMiddlename">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        Mobile Number:
                        <input type="text" class="form-control" id="updateMobile">
                      </div>
                      <div class="col-md-6">
                        Address:
                        <input type="text" class="form-control" id="updateAddress">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        Birthday:
                        <input type="date" class="form-control" id="updateBirthday">
                      </div>
                      <div class="col-md-6">
                        Status:
                        <select name="updateStatus" id="updateStatus" class="form-control">
                          <option value="pending">Pending</option>
                          <option value="approved">Approve</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btnUpdateUser">Save changes <i class="fa fa-check"></i></button>
                  </div>
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
  $( document ).ready(function() {



    //-----------------------------------------------------FETCH USER-----------------------------------------------------------------------
    let dt = $('#result1').DataTable( {
        // 'paging'      : true,  
        'lengthChange': false,
        'searching'   : true,
        'ordering'    : true,
        'info'        : false,
        'autoWidth'   : false,
      } );

    //----------------------------------------------------------FETCH USER-----------------------------------------------------------------------


    //-----------------------------------------------------DELETE USER-----------------------------------------------------------------------
    $(document).on('click', "#td_btn_delete", function(){
     
      var id=$(this).data("id_delete");
       // alert(id);

      //confirmation start
      swal({
      title: "Are you sure?",
      text: "Block User!",
      type: "question",
      showCancelButton: true,
      confirmButtonColor: "#5cb85c",
      cancelButtonColor: "#d9534f",
      confirmButtonText: '<span class="fa fa-check"></span>&nbspProceed',
      cancelButtonText: '<span class="fa fa-remove"></span>&nbspDecline',
      confirmButtonClass: "btn",
      cancelButtonClass: "btn"
      }).then((result) => {
      if (result.value) {
            
            //ajax start
            $.ajax({  
               url:"function php/deleteUser.php?id="+id, 
               method:"POST",  
               //post:data  
               contentType:false,
               cache:false,
               processData:false,

               beforeSend:function() {

                      swal({
                      position: "top-end",
                      type: "info",
                      title: "Processing Data...",
                      showConfirmButton: false,
                      });

              }, 

               success:function(data){  
                swal.close();
                //alert(data); 
                swal({
                title: "User Successfully Blocked!",
                text: data,
                type: "success",
                showCancelButton: false,
                confirmButtonColor: "#5cb85c",
                confirmButtonText: '<span class="fa fa-check"></span>&nbspProceed',
                confirmButtonClass: "btn"
                }).then((result) => {
                  if (result.value) {

                      fetch_users();
                      //close modal
                      // location.reload();
                  }
                });

                }
                    
            });  
            //ajax end 
      }
      });
      //confirmation end


    });

    //-----------------------------------------------------DELETE USER-----------------------------------------------------------------------


    //-----------------------------------------------------APPROVE USER-----------------------------------------------------------------------
    $(document).on('click', "#td_btn_approve", function(){
     
      var id=$(this).data("id_approve");
       // alert(id);

      //confirmation start
      swal({
      title: "Are you sure?",
      text: "Unblock User!",
      type: "question",
      showCancelButton: true,
      confirmButtonColor: "#5cb85c",
      cancelButtonColor: "#d9534f",
      confirmButtonText: '<span class="fa fa-check"></span>&nbspProceed',
      cancelButtonText: '<span class="fa fa-remove"></span>&nbspDecline',
      confirmButtonClass: "btn",
      cancelButtonClass: "btn"
      }).then((result) => {
      if (result.value) {
            
            //ajax start
            $.ajax({  
               url:"function php/unblockUser.php?id="+id, 
               method:"POST",  
               //post:data  
               contentType:false,
               cache:false,
               processData:false,

               beforeSend:function() {

                      swal({
                      position: "top-end",
                      type: "info",
                      title: "Processing Data...",
                      showConfirmButton: false,
                      });

              }, 

               success:function(data){  
                swal.close();
                //alert(data); 
                swal({
                title: "User Successfully Unblock!",
                text: data,
                type: "success",
                showCancelButton: false,
                confirmButtonColor: "#5cb85c",
                confirmButtonText: '<span class="fa fa-check"></span>&nbspProceed',
                confirmButtonClass: "btn"
                }).then((result) => {
                  if (result.value) {

                      fetch_users();
                      //close modal
                      // location.reload();
                  }
                });

                }
                    
            });  
            //ajax end 
      }
      });
      //confirmation end

    });

    //-----------------------------------------------------APPROVE USER-----------------------------------------------------------------------


    var id = 0;

    //-----------------------------------------------------TRANSFER VALUE TO MODAL-----------------------------------------------------------------------
    $(document).on('click', "#td_btn_edit", function(){

      id=$(this).data("id_edit");
      var updateName=$("#td_name"+id).data("data0");

      var updateName = updateName.split(',');
      var updateLastname = updateName[0];
      var updateFirstname = updateName[1];
      var updateMiddlename = updateName[2];
      var updateAddress=$("#td_address"+id).data("data1");
      var updateMobile=$("#td_mobile"+id).data("data2");
      var updateBirthday=$("#td_birthday"+id).data("data3");
      var updateStatus=$("#td_status"+id).data("data4");

      $('#updateLastname').val(updateLastname);
      $('#updateFirstname').val(updateFirstname);
      $('#updateMiddlename').val(updateMiddlename);

      $('#updateAddress').val(updateAddress);
      $('#updateMobile').val(updateMobile);
      $('#updateBirthday').val(updateBirthday);

      $('#updateStatus').val(updateStatus);


    });

    //-----------------------------------------------------TRANSFER VALUE TO MODAL-----------------------------------------------------------------------




    $('#btnUpdateUser').click(function(){
      var updateLastname = $('#updateLastname').val();
      var updateFirstname = $('#updateFirstname').val();
      var updateMiddlename = $('#updateMiddlename').val();
      var updateAddress = $('#updateAddress').val();
      var updateMobile = $('#updateMobile').val();
      var updateBirthday = $('#updateBirthday').val();
      var updateStatus = $('#updateStatus').val();

      var other_data = 'id='+id+'&updateLastname='+updateLastname+'&updateFirstname='+updateFirstname+'&updateMiddlename='+updateMiddlename+'&updateAddress='+updateAddress+'&updateMobile='+updateMobile+'&updateBirthday='+updateBirthday+'&updateStatus='+updateStatus;

      if ( updateLastname == '' || updateFirstname == '' || updateMiddlename == '' || updateAddress == '' || updateMobile == '' || updateBirthday == '' || updateStatus == '' )
      {
        swal('Error','Please input required fields!','error');
      }
      else
      {

        //confirmation start
        swal({
        title: "Are you sure?",
        text: "Update User!",
        type: "question",
        showCancelButton: true,
        confirmButtonColor: "#5cb85c",
        cancelButtonColor: "#d9534f",
        confirmButtonText: '<span class="fa fa-check"></span>&nbspProceed',
        cancelButtonText: '<span class="fa fa-remove"></span>&nbspDecline',
        confirmButtonClass: "btn",
        cancelButtonClass: "btn"
        }).then((result) => {
        if (result.value) {
              
              //ajax start
              $.ajax({  
                 url:"function php/updateUser.php?"+other_data, 
                 method:"POST",  
                 //post:data  
                 contentType:false,
                 cache:false,
                 processData:false,

                 beforeSend:function() {

                        swal({
                        position: "top-end",
                        type: "info",
                        title: "Processing Data...",
                        showConfirmButton: false,
                        });

                }, 

                 success:function(data){  
                  swal.close();
                  // alert(data); 
                  swal({
                  title: "User Successfully Updated!",
                  text: data,
                  type: "success",
                  showCancelButton: false,
                  confirmButtonColor: "#5cb85c",
                  confirmButtonText: '<span class="fa fa-check"></span>&nbspProceed',
                  confirmButtonClass: "btn"
                  }).then((result) => {
                    if (result.value) {

                        fetch_users();
                        $('#modalUpdate').modal('hide');
                        //close modal
                        // location.reload();
                    }
                  });

                  }
                      
              });  
              //ajax end 
        }
        });
        //confirmation end

      }
      // else
    });

  }); //document ready
</script>


</body>

</html>