
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
                    <!-- <button class="btn btn-success float-right" data-toggle="modal" data-target="#modalAddProduct">Add MSAC Member <i class="fas fa-plus"></i></button> -->
                    <center><h2>Images and Quotations Content</h2></center>
                    <br>
                     <div class="card mb-3">
                      <div class="card-header">
                        <i class="fa fa-table"></i> MSAC Management
                      </div>
                      <div class="card-body">
                        <div class="table-responsive" style="font-family: ui monospace;">
                          <table class="table table-bordered" id="result1" width="100%" cellspacing="0" style="font-size: 15px;">
                            <thead>
                              <tr>
                                <th>IMAGE</th>
                                <th>NAME</th>
                                <th>QUOTATION</th>
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

   





          <!-- ---------------------------------------------------MODAL ADD MSAC -------------------------------------------------------------->

          <div id="modalAddProduct" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                  <h4 class="modal-title" style=" margin: 0 auto;">Add New</h4>
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
                  Quotation:
                  <textarea type="text" class="form-control" id="quotation" name=""></textarea>


                </div><!-- <div class="modal-body"> -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-dismiss="modal">Close <i class="fas fa-times"></i></button>
                  <button type="button" class="btn btn-success" id="btnInsert">Save <i class="fas fa-check"></i></button>
                </div>
              </div>

            </div>
          </div>
          <!-- ---------------------------------------------------MODAL ADD MSAC -------------------------------------------------------------->




          <!-- ---------------------------------------------------MODAL EDIT MSAC -------------------------------------------------------------->
          
          <div id="modalUpdateProduct" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                  <h4 class="modal-title" style=" margin: 0 auto;">Update Data</h4>
                </div>
                <div class="modal-body">
                  <center>
                    <img class="ml-2" src="../images/attachedagency_dilgcentral.png" style="width: 170px; height: 170px; border-radius: 50%;" id="image_updateMsac"><br>
                    <label class="btn btn-primary btn mt-2" style="width:150px;">
                    <span class="fa fa-picture"></span>&nbsp&nbspBrowse Image<input type="file" style="display: none;" id="file_updateMsac">
                    </label>
                  </center>
                  
                  Name:
                  <input type="text" class="form-control" id="updateName" name="">
                  Quotation:
                  <textarea type="text" class="form-control" id="updateQuotation" name=""></textarea>


                </div><!-- <div class="modal-body"> -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-dismiss="modal">Close <i class="fas fa-times"></i></button>
                  <button type="button" class="btn btn-success" id="btnUpdate">Save <i class="fas fa-check"></i></button>
                </div>
              </div>

            </div>
          </div>
          <!-- ---------------------------------------------------MODAL EDIT MSAC -------------------------------------------------------------->


            </div><!-- container -->
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->

    <!-- using local scripts -->
<?php include 'includes/js_includes.php' ?>
<script type="text/javascript">
//---------------------------------------------------------FETCH DATA-----------------------------------------------------------------------
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
     url:"function php/fetchQuote.php",
     type:"POST",
     cache:false,

    },
    "autoWidth" : false
   });

  }

fetch_users();

//---------------------------------------------------------FETCH DATA-----------------------------------------------------------------------



//--------------------------------------------------INSERT IMAGE TO ADD MSAC-----------------------------------------------------------------------
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
    else if(image_size>10000000) {

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


//--------------------------------------------------INSERT IMAGE TO ADD MSAC-----------------------------------------------------------------------



//-------------------------------------------------------------INSERT MSAC-----------------------------------------------------------------------

$('#btnInsert').click(function(){
  var name = document.getElementById("name").value;
  var quotation = document.getElementById("quotation").value;
  var file = document.getElementById("file_editProfile").value;


  //alert if incomplete start
  if(name=="" || quotation=="") 
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
              var other_data = 'name='+name+'&quotation='+quotation+"&image_name="+new Date().getTime();

              //ajax start
              $.ajax({  
                 url:"function php/insertQuote.php?"+other_data, 
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
                  title: "MSAC Successfully Registered!",
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
//-------------------------------------------------------------INSERT MSAC-----------------------------------------------------------------------


//-------------------------------------------------------------DELETE MSAC-----------------------------------------------------------------------
$(document).on('click', "#td_btn_delete", function(){
 
  var id=$(this).data("id_delete");
  // alert(id);

  //confirmation start
  swal({
  title: "Are you sure?",
  text: "Delete MSAC!",
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
         url:"function php/deleteMsac.php?id="+id, 
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
          title: "MSAC Successfully Deleted!",
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

//-------------------------------------------------------------DELETE MSAC-----------------------------------------------------------------------



//-----------------------------------TRANSFER VALUE TO MODAL AND INITIALIZE NEEDED VARIABLE FOR UPDATING---------------------------------------

var image_status = 'old';
var id = 0;
var oldImagename = '';

$(document).on('click', "#td_btn_edit", function(){
 
  id=$(this).data("id_edit");
  var updateImage=$("#td_image"+id).data("data0")
  var updateName=$("#td_name"+id).data("data1");
  oldImagename = updateImage;
  var updateQuotation=$("#td_quotation"+id).data("data2");

  $('#updateName').val(updateName);
  $('#updateQuotation').val(updateQuotation);
  document.getElementById("image_updateMsac").src=updateImage;
 
});

//-----------------------------------TRANSFER VALUE TO MODAL AND INITIALIZE NEEDED VARIABLE FOR UPDATING---------------------------------------



//-----------------------------------------------------------------UPDATE MSAC IMAGE--------------------------------------------

$(document).on("change", "#file_updateMsac", function() { 
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
                      document.getElementById("image_updateMsac").src=current_image;
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
                        document.getElementById("image_updateMsac").src=current_image;
                        image_status="old";

                  }
                  });
      
    } 

    else if(this.files && this.files[0]) {
      var obj = new FileReader();
      obj.onload = function(data) { document.getElementById("image_updateMsac").src = data.target.result; }
      obj.readAsDataURL(this.files[0]);
      image_status="new";
    }

 }); 


//-----------------------------------------------------------------UPDATE MSAC IMAGE--------------------------------------------



//-----------------------------------------------------------------UPDATE MSAC----------------------------------------------------

$('#btnUpdate').click(function(){
  var updateName = document.getElementById("updateName").value;
  var updateQuotation = document.getElementById("updateQuotation").value;
  var file = document.getElementById("file_updateMsac").value;


  //alert if incomplete start
  if(updateName=="" || updateQuotation=="" ) 
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
      var file_property = document.getElementById("file_updateMsac").files[0];

      //confirmation start
      swal({
      title: "Are you sure?",
      text: "Update Data!",
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
              form_data.append("file_updateMsac",file_property);
              var other_data = 'id='+id+'&updateName='+updateName+'&updateQuotation='+updateQuotation+'&image_status='+image_status+'&oldImagename='+oldImagename+"&image_name="+new Date().getTime();

              //ajax start
              $.ajax({  
                 url:"function php/updateQuotes.php?"+other_data, 
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
                  title: "Data Successfully Updated!",
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

//-----------------------------------------------------------------UPDATE MSAC----------------------------------------------------

</script>
</body>

</html>