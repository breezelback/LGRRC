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
                    <button class="btn btn-success float-right" data-toggle="modal" data-target="#modalAddProduct" id="btnAddNews">Add Knowledge Product <i class="fas fa-plus"></i></button>
                    <center><h2>Knowledge Product</h2></center>

                     <div class="card mb-3">
                      <div class="card-header bg-primary text-white">
                        <i class="fa fa-table"></i> Management
                      </div>
                      <div class="card-body">
                        <div class="table-responsive" style="font-family: ui monospace;">
                          <table class="table table-bordered" id="result1" width="100%" cellspacing="0" style="font-size: 15px;">
                            <thead>
                              <tr>
                                <th>Filename</th>
                                <th>Title</th>
                                <th>Status</th> 
                                <th>Date Uploaded</th>
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

   


<!----------------------------------------------------------------------- MODAL ADD------------------------------------------------------------------ -->
            <div id="modalAddProduct" class="modal fade" role="dialog">
              <div class="modal-dialog modal-md">

                <form action="" onsubmit="insertData(); return false;">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                      <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                      <h4 class="modal-title" style=" margin: 0 auto;">Add News</h4>
                    </div>
                    <div class="modal-body">
                       <center>
                          <p id="fileName" style="font-size:20px;"></p>
                          <label class="btn btn-secondary btn mt-2" style="width:150px;">
                          &nbsp;Browse File <span class="fa fa-paperclip"></span><input type="file" style="display: none;" id="file_editProfile">
                          </label>
                        </center>
                        File Title:
                        <input type="text" class="form-control" id="title">
                        Status:
                        <select name="status" id="status" class="form-control">
                          <option value="published">Publish</option>
                          <option value="draf">Draf</option>
                        </select>

                    </div><!-- <div class="modal-body"> -->

                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-dismiss="modal">Close <i class="fas fa-times"></i></button>
                      <button type="button" class="btn btn-success" id="btnInsertProduct">Save <i class="fas fa-check"></i></button>
                      <!-- <input type="submit" value="Check the submitted code" /> -->
                    </div>
                  </div>
                  <!-- <div class="modal-content"> -->
                </form>


              </div>
            </div>
<!----------------------------------------------------------------------- MODAL ADD------------------------------------------------------------------ -->




<!----------------------------------------------------------------------- MODAL UPDATE------------------------------------------------------------------ -->
            <div id="modalUpdateProduct" class="modal fade" role="dialog">
              <div class="modal-dialog modal-md">

                <form action="" onsubmit="insertData(); return false;">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                      <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                      <h4 class="modal-title" style=" margin: 0 auto;">Add News</h4>
                    </div>
                    <div class="modal-body">
                       <center>
                          <p id="updateFilename" style="font-size:20px;"></p>
                          <label class="btn btn-secondary btn mt-2" style="width:150px;">
                          &nbsp;Browse File <span class="fa fa-paperclip"></span><input type="file" style="display: none;" id="updateFile">
                          </label>
                        </center>
                        File Title:
                        <input type="text" class="form-control" id="updateTitle">
                        Status:
                        <select name="status" id="updateStatus" class="form-control">
                          <option value="published">Publish</option>
                          <option value="draft">Draft</option>
                        </select>

                    </div><!-- <div class="modal-body"> -->

                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-dismiss="modal">Close <i class="fas fa-times"></i></button>
                      <button type="button" class="btn btn-success" id="btnUpdateProduct">Save <i class="fas fa-check"></i></button>
                      <!-- <input type="submit" value="Check the submitted code" /> -->
                    </div>
                  </div>
                  <!-- <div class="modal-content"> -->
                </form>


              </div>
            </div>
<!----------------------------------------------------------------------- MODAL UPDATE------------------------------------------------------------------ -->





            </div><!-- container -->
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->

    <!-- using local scripts -->
<?php include 'includes/js_includes.php' ?>
<script type="text/javascript">
  //-----------------------------------------------------FETCH USER-----------------------------------------------------------------------
 function fetchProduct() {
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
     url:"function php/fetchProduct.php",
     type:"POST",
     cache:false,

    },
    "autoWidth" : false
   });

  }

fetchProduct();

//----------------------------------------------------------FETCH USER-----------------------------------------------------------------------




//----------------------------------------------------------FILE PREVIEW-----------------------------------------------------------------------
$(document).on("change", "#file_editProfile", function() { 
  event.preventDefault();

  //get file details
  var property = this.files[0];
  var image_name = property.name;
  var image_extension = image_name.split('.').pop().toLowerCase();
  var image_size = property.size;
  // alert(property);

  if (image_extension != 'pdf') 
  {
    swal('Error','File must be PDF!','error');
    this.value="";
  }
  else if (image_size > 5000000) 
  {
    swal('Error','File too large!','error');
    this.value="";
  }
  else
  {
    // alert(image_name);
    $('#fileName').text(image_name);
  }

}); 


//----------------------------------------------------------FILE PREVIEW-----------------------------------------------------------------------



$('#btnInsertProduct').click(function(){
  var file = document.getElementById("file_editProfile").files[0].name; 
  var title = $('#title').val();
  var status = $('#status').val();




  if ( title == '' ) 
  {
    swal('Error','Please input required fields!','error');
  }
  else if ( file == '' )
  {
    swal('Warning','Please choose file!','warning');
  }
  else
  {
      var file_property = document.getElementById("file_editProfile").files[0];

      //confirmation start
      swal({
      title: "Are you sure?",
      text: "Upload Product!",
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
          var other_data = 'title='+title+'&status='+status+"&file="+file;
          // alert(other_data);

          //ajax start
          $.ajax({  
             url:"function php/insertProduct.php?"+other_data, 
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
              // alert(data);

              swal.close();
              
              swal({
              title: "NEWS Successfully Uploaded!",
              // text: data,
              text: "Looking Good",
              type: "success",
              showCancelButton: false,
              confirmButtonColor: "#5cb85c",
              confirmButtonText: '<span class="fa fa-check"></span>&nbspProceed',
              confirmButtonClass: "btn"
              }).then((result) => {
                if (result.value) {

                    //fetch_data();
                    //close modal
                    $("#add_data_modal").modal("close");
                    location.reload();
                }
              });

              }
                  
          });  
          //ajax end 
        }
      });
      //confirmation end
  }
});



var id = 0;
var image_status = 'old';
var fileName = ''; 

//-----------------------------------------------------TRANSFER VALUE TO MODAL-----------------------------------------------------------------------
$(document).on('click', "#td_btn_edit", function(){

  id=$(this).data("id_edit");
  var filename=$("#td_filename"+id).data("data1");
  var title=$("#td_title"+id).data("data2");
  var status=$("#td_status"+id).data("data3");

  $('#updateTitle').val(title);
  $('#updateFilename').text(filename);
  $('#updateStatus').val(status);
});
//-----------------------------------------------------TRANSFER VALUE TO MODAL-----------------------------------------------------------------------



$(document).on('click', "#btnUpdateProduct", function(){

  var file = document.getElementById("updateFile").value;
  var updateTitle = $('#updateTitle').val();
  var updateStatus = $('#updateStatus').val();

  // alert(fileName);

  if(updateTitle=="" || updateStatus=="" ) 
    {
      swal({
        title: "Incomplete Data!",
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
        var file_property = document.getElementById("updateFile").files[0];

        //confirmation start
        swal({
        title: "Are you sure?",
        text: "Update Product!",
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
                

                // alert(editNoise);

                //data with object
                var form_data = new FormData();
                form_data.append("updateFile",file_property);
                // var other_data = 'title='+title+'&description='+description+"&image_name="+new Date().getTime();
                var other_data = 'updateTitle='+updateTitle+'&id='+id+'&updateStatus='+updateStatus+'&image_status='+image_status+"&image_name="+fileName;
                // alert(other_data);

                //ajax start
                $.ajax({  
                   url:"function php/updateProduct.php?"+other_data, 
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
                    // alert(data);
                    
                    swal({
                    title: "Product Successfully Updated!",
                    // text: data,
                    text: "Looking Good",
                    type: "success",
                    showCancelButton: false,
                    confirmButtonColor: "#5cb85c",
                    confirmButtonText: '<span class="fa fa-check"></span>&nbspProceed',
                    confirmButtonClass: "btn"
                    }).then((result) => {
                      if (result.value) {

                          //fetch_data();
                          //close modal
                          // $("#add_data_modal").modal("close");
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





//----------------------------------------------------------UPDATE FILE PREVIEW----------------------------------------------------------------------
$(document).on("change", "#updateFile", function() { 
  event.preventDefault();

  //get file details
  var property = this.files[0];
  var image_name = property.name;
  var image_extension = image_name.split('.').pop().toLowerCase();
  var image_size = property.size;
  // alert(property);

  if (image_extension != 'pdf') 
  {
    swal('Error','File must be PDF!','error');
    // this.value="";
    image_status = 'old';
  }
  else if (image_size > 5000000) 
  {
    swal('Error','File too large!','error');
    // this.value="";
    image_status = 'old';
  }
  else
  {
    // alert(image_name);
    image_status = 'new';
    $('#updateFilename').text(image_name);
    fileName = image_name; 
  }

}); 


//----------------------------------------------------------UPDATE FILE PREVIEW----------------------------------------------------------------------








//-----------------------------------------------------DELETE FILE-----------------------------------------------------------------------
$(document).on('click', "#td_btn_delete", function(){
 
  var id=$(this).data("id_delete");
   // alert(id);

  //confirmation start
  swal({
  title: "Are you sure?",
  text: "Delete Knowledge Product!",
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
           url:"function php/deleteProduct.php?id="+id, 
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
            title: "Product Successfully Deleted!",
            text: data,
            type: "success",
            showCancelButton: false,
            confirmButtonColor: "#5cb85c",
            confirmButtonText: '<span class="fa fa-check"></span>&nbspProceed',
            confirmButtonClass: "btn"
            }).then((result) => {
              if (result.value) {

                  fetchProduct();
              }
            });

            }
                
        });  
        //ajax end 
  }
  });
  //confirmation end


});

//-----------------------------------------------------DELETE FILE-----------------------------------------------------------------------










</script>
</body>

</html>