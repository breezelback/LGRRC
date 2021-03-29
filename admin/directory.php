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
                    <button class="btn btn-success float-right" data-toggle="modal" data-target="#modalAddProduct">Add New Expert <i class="fas fa-plus"></i></button>
                    <center><h2>Directory of Experts</h2></center>
                    <br>
                     <div class="card mb-3">
                      <div class="card-header">
                        <i class="fa fa-table"></i> Expert Management
                      </div>
                      <div class="card-body">
                        <div class="table-responsive" style="font-family: ui monospace;">
                          <table class="table table-bordered" id="result1" width="100%" cellspacing="0" style="font-size: 15px;">
                            <thead>
                              <tr>
                                <th>PICTURE</th>
                                <th>NAME</th>
                                <th>AREA OF EXPERTISE</th>
                                <th>ADDRESS</th> 
                                <th>CONTACT NUMBER</th>
                                <th>EMAIL</th> 
                                <th width="7%"><center>Action</center></th>
                              </tr>
                            </thead>
                          </table>
                        </div>
                      </div>
                      <div class="card-footer small text-muted"></div>
                    </div>


                </div>
            </div>

   





          <!-------------------------------------------------- MODAL INSERT -------------------------------------------------------------->
          <div id="modalAddProduct" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                  <h4 class="modal-title" style=" margin: 0 auto;">Add Expert Member</h4>
                </div>
                <div class="modal-body">
                  <center>
                    <img class="ml-2" src="../images/attachedagency_dilgcentral.png" style="width: 170px; height: 170px; border-radius: 50%;" id="image_editProfile"><br>
                    <label class="btn btn-primary btn mt-2" style="width:150px;">
                    <span class="fa fa-picture"></span>&nbsp&nbspBrowse Image<input type="file" style="display: none;" id="file_editProfile">
                    </label>
                  </center>
                  
                  Name:
                  <input type="text" class="form-control" id="name" name="">
                  Expertise <i>(Please add , if 2 or more field of expertise)</i>:
                  <input type="text" class="form-control" id="expertise" name="">
                  Address:
                  <input type="text" class="form-control" id="address" name="">
                  Contact Number:
                  <input type="text" class="form-control" id="contactNumber" name="">
                  Email:
                  <input type="text" class="form-control" id="email" name="">


                </div><!-- <div class="modal-body"> -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-dismiss="modal">Close <i class="fas fa-times"></i></button>
                  <button type="button" class="btn btn-success" id="btnInsertExpert">Save <i class="fas fa-check"></i></button>
                </div>
              </div>

            </div>
          </div>
          <!-------------------------------------------------- MODAL INSERT -------------------------------------------------------------->




          <!-------------------------------------------------- MODAL UPDATE -------------------------------------------------------------->
          <div id="modalUpdateExpert" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                  <h4 class="modal-title" style=" margin: 0 auto;">Update Expert Member</h4>
                </div>
                <div class="modal-body">
                  <center>
                    <img class="ml-2" src="../images/attachedagency_dilgcentral.png" style="width: 170px; height: 170px; border-radius: 50%;" id="image_updateExpert"><br>
                    <label class="btn btn-primary btn mt-2" style="width:150px;">
                    <span class="fa fa-picture"></span>&nbsp&nbspBrowse Image<input type="file" style="display: none;" id="file_updateExpert">
                    </label>
                  </center>
                  
                  Name:
                  <input type="text" class="form-control" id="updateName" name="">
                  Expertise <i>(Please add , if 2 or more field of expertise)</i>:
                  <input type="text" class="form-control" id="updateExpertise" name="">
                  Address:
                  <input type="text" class="form-control" id="updateAddress" name="">
                  Contact Number:
                  <input type="text" class="form-control" id="updateContactNumber" name="">
                  Email:
                  <input type="text" class="form-control" id="updateEmail" name="">


                </div><!-- <div class="modal-body"> -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-dismiss="modal">Close <i class="fas fa-times"></i></button>
                  <button type="button" class="btn btn-success" id="btnUpdateExpert">Update <i class="fas fa-check"></i></button>
                </div>
              </div>

            </div>
          </div>
          <!-------------------------------------------------- MODAL UPDATE -------------------------------------------------------------->



            </div><!-- container -->
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->

    <!-- using local scripts -->
<?php include 'includes/js_includes.php' ?>
<script type="text/javascript">
    //-----------------------------------------------------FETCH DATA-----------------------------------------------------------------------
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
    //console.log(settings.json);
   
    },
    "ajax" : {
     url:"function php/fetchExpert.php",
     type:"POST",
     cache:false,

    },
    "autoWidth" : false
   });

  }

fetch_users();

//--------------------------------------------------------FETCH DATA-----------------------------------------------------------------------



//--------------------------------------------------------INSERT IMAGE-----------------------------------------------------------------------
$(document).on("change", "#file_editProfile", function() { 
    event.preventDefault();

    //get file details
      var property = this.files[0];
      var image_name = property.name;
      var image_extension = image_name.split('.').pop().toLowerCase();
      var image_size = property.size;
      // alert(image_name);
    //filter extension
    if(jQuery.inArray(image_extension, ['gif','png','jpg','jpeg'])==-1) {

            swal({
                  title: "Invalid File Type!",
                  text: "Image must be in 'gif','png','jpg','jpeg' format!",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonColor: "#5cb85c",
                  confirmButtonText: '<span class="glyphicon glyphicon-ok"></span>&nbspProceed',
                  confirmButtonClass: "btn"
                  }).then((result) => {
                  if (result.value) {

                      this.value="";
                      document.getElementById("image_editProfile").src=current_image;
                      image_status="old"; 

                  }
                  });      
    }

    //filter size
    else if(image_size>2000000) {

            swal({
                  title: "Invalid File Size!",
                  text: "Please select an image with size lower than 2MB!",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonColor: "#5cb85c",
                  confirmButtonText: '<span class="glyphicon glyphicon-ok"></span>&nbspProceed',
                  confirmButtonClass: "btn"
                  }).then((result) => {
                  if (result.value) {

                        this.value="";
                        document.getElementById("image_editProfile").src=current_image;
                        image_status="old";

                  }
                  });
      
    } 

    else if(this.files && this.files[0]) {
      var obj = new FileReader();
      obj.onload = function(data) { document.getElementById("image_editProfile").src = data.target.result; }
      obj.readAsDataURL(this.files[0]);
      image_status="new";
    }

 }); 


//--------------------------------------------------------INSERT IMAGE-----------------------------------------------------------------------




//--------------------------------------------------------INSERT EXPERT-----------------------------------------------------------------------
$('#btnInsertExpert').click(function(){
  var name = document.getElementById("name").value;
  var expertise = document.getElementById("expertise").value;
  var contactNumber = document.getElementById("contactNumber").value;
  var address = document.getElementById("address").value;
  var email = document.getElementById("email").value;
  var file = document.getElementById("file_editProfile").value;


  //alert if incomplete start
  if(name=="" || expertise=="" || contactNumber=="" || address=="" || email=="" ) 
  {
      swal({
        title: "Incomplete Registration!",
        text: "Please complete required fields!",
        type: "error",
        showCancelButton: false,
        confirmButtonColor: "#5cb85c",
        confirmButtonText: '<span class="fa fa-check"></span>&nbspProceed',
        confirmButtonClass: "btn"
        }).then((result) => {
        if (result.value) {

            swal.close();

        }
      });
  } // alert if incomplete end

  else if(file =="") 
  {

        swal({
            title: "Incomplete Registration!",
            text: "Please browse your image on the computer!",
            type: "warning",
            showCancelButton: false,
            confirmButtonColor: "#5cb85c",
            confirmButtonText: '<span class="fa fa-check"></span>&nbspProceed',
            confirmButtonClass: "btn"
            }).then((result) => {
            if (result.value) {

                document.getElementById("image_add").className += " required-fields";

            }
            });
         
  }//if file is nothing

  else
  {
          //get file
      var file_property = document.getElementById("file_editProfile").files[0];

      //confirmation start
      swal({
      title: "Are you sure?",
      text: "Registration!",
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

              //data with object
              var form_data = new FormData();
              form_data.append("file_editProfile",file_property);
              var other_data = 'name='+name+'&expertise='+expertise+'&contactNumber='+contactNumber+'&address='+address+'&email='+email+"&image_name="+new Date().getTime();

              //ajax start
              $.ajax({  
                 url:"function php/insertExpert.php?"+other_data, 
                 method:"POST",  
                 //post:data  
                 data:form_data,
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
                  title: "Expert Successfully Registered!",
                  text: data,
                  type: "success",
                  showCancelButton: false,
                  confirmButtonColor: "#5cb85c",
                  confirmButtonText: '<span class="fa fa-check"></span>&nbspProceed',
                  confirmButtonClass: "btn"
                  }).then((result) => {
                    if (result.value) {

                        //fetch_data();
                        //close modal
                        //$("#add_data_modal").modal("hide");
                        location.reload();
                    }
                  });

                  }
                      
              });  
              //ajax end 
      }
      });
      //confirmation end

  } // else end


});

//--------------------------------------------------------INSERT EXPERT-----------------------------------------------------------------------

  
//--------------------------------------------------------DELETE EXPERT-----------------------------------------------------------------------
$(document).on('click', "#td_btn_delete", function(){
 
  var id=$(this).data("id_delete");
  // alert(id);

  //confirmation start
  swal({
  title: "Are you sure?",
  text: "Delete Expert!",
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
           url:"function php/deleteExpert.php?id="+id, 
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
            title: "Expert Successfully Deleted!",
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

//--------------------------------------------------------DELETE EXPERT-----------------------------------------------------------------------


//----------------------------------TRANSFER VALUE TO UPDATE MODAL AND INITIALIZE NEEDED VARIABLE---------------------------------------------

var image_status = 'old';
var id = 0;
var oldImagename = '';

$(document).on('click', "#td_btn_edit", function(){
 
  id=$(this).data("id_edit");

  var updateImage=$("#td_image"+id).data("data0");
  oldImagename = updateImage;
  var updateName=$("#td_name"+id).data("data1");
  var updateExpertise=$("#td_expertise"+id).data("data2");
  var updateAddress=$("#td_address"+id).data("data3");
  var updateContactNumber=$("#td_contact"+id).data("data4");
  var updateEmail=$("#td_email"+id).data("data5");


  document.getElementById("image_updateExpert").src=updateImage;
  $('#updateName').val(updateName);
  $('#updateExpertise').val(updateExpertise);
  $('#updateAddress').val(updateAddress);
  $('#updateContactNumber').val(updateContactNumber);
  $('#updateEmail').val(updateEmail);

});

//----------------------------------TRANSFER VALUE TO UPDATE MODAL AND INITIALIZE NEEDED VARIABLE---------------------------------------------



//--------------------------------------------------------UPDATE IMAGE-----------------------------------------------------------------------
$(document).on("change", "#file_updateExpert", function() { 
    event.preventDefault();

    //get file details
      var property = this.files[0];
      var image_name = property.name;
      var image_extension = image_name.split('.').pop().toLowerCase();
      var image_size = property.size;
      // alert(image_name);
    //filter extension
    if(jQuery.inArray(image_extension, ['gif','png','jpg','jpeg'])==-1) {

            swal({
                  title: "Invalid File Type!",
                  text: "Image must be in 'gif','png','jpg','jpeg' format!",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonColor: "#5cb85c",
                  confirmButtonText: '<span class="glyphicon glyphicon-ok"></span>&nbspProceed',
                  confirmButtonClass: "btn"
                  }).then((result) => {
                  if (result.value) {

                      this.value="";
                      document.getElementById("image_updateExpert").src=current_image;
                      image_status="old"; 

                  }
                  });      
    }

    //filter size
    else if(image_size>2000000) {

            swal({
                  title: "Invalid File Size!",
                  text: "Please select an image with size lower than 2MB!",
                  type: "error",
                  showCancelButton: false,
                  confirmButtonColor: "#5cb85c",
                  confirmButtonText: '<span class="glyphicon glyphicon-ok"></span>&nbspProceed',
                  confirmButtonClass: "btn"
                  }).then((result) => {
                  if (result.value) {

                        this.value="";
                        document.getElementById("image_updateExpert").src=current_image;
                        image_status="old";

                  }
                  });
      
    } 

    else if(this.files && this.files[0]) {
      var obj = new FileReader();
      obj.onload = function(data) { document.getElementById("image_updateExpert").src = data.target.result; }
      obj.readAsDataURL(this.files[0]);
      image_status="new";
    }

 }); 


//--------------------------------------------------------UPDATE IMAGE-----------------------------------------------------------------------





$('#btnUpdateExpert').click(function(){

  var updateName = $('#updateName').val();
  var updateExpertise = $('#updateExpertise').val();
  var updateAddress = $('#updateAddress').val();
  var updateContactNumber = $('#updateContactNumber').val();
  var updateEmail = $('#updateEmail').val();
  var file = document.getElementById("file_updateExpert").value;


  //alert if incomplete start
  if(updateName=="" || updateExpertise=="" || updateAddress=="" || updateContactNumber=="" || updateEmail=="" ) 
  {
      swal({
        title: "Incomplete Registration!",
        text: "Please complete required fields!",
        type: "error",
        showCancelButton: false,
        confirmButtonColor: "#5cb85c",
        confirmButtonText: '<span class="fa fa-check"></span>&nbspProceed',
        confirmButtonClass: "btn"
        }).then((result) => {
        if (result.value) {
          swal.close();
        }
      });
  } // alert if incomplete end


  else
  {
          //get file
      var file_property = document.getElementById("file_updateExpert").files[0];

      //confirmation start
      swal({
      title: "Are you sure?",
      text: "Registration!",
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

              //data with object
              var form_data = new FormData();
              form_data.append("file_updateExpert",file_property);
              var other_data = 'id='+id+'&updateName='+updateName+'&updateExpertise='+updateExpertise+'&updateAddress='+updateAddress+'&updateContactNumber='+updateContactNumber+'&updateEmail='+updateEmail+'&oldImagename='+oldImagename+'&image_status='+image_status+"&image_name="+new Date().getTime();

              //ajax start
              $.ajax({  
                 url:"function php/updateExpert.php?"+other_data, 
                 method:"POST",  
                 //post:data  
                 data:form_data,
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
                  title: "Expert Successfully Updated!",
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
                        $("#modalUpdateExpert").modal("hide");
                    }
                  });

                  }
                      
              });  
              //ajax end 
      }
      });
      //confirmation end

  } // else end
});



</script>
</body>

</html>