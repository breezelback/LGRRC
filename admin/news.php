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

    <link rel="stylesheet" href="../rich texteditor/examples/css/site.css">
    <link rel="stylesheet" href="../rich texteditor/src/richtext.min.css">


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
                    <button class="btn btn-success float-right" data-toggle="modal" data-target="#modalAddProduct" id="btnAddNews">Add News <i class="fas fa-plus"></i></button>
                    <center><h2>News</h2></center>
                    <br>
                     <div class="card mb-3">
                      <div class="card-header bg-primary text-white">
                        <i class="fa fa-table"></i> News Management
                      </div>
                      <div class="card-body">
                        <div class="table-responsive" style="font-family: ui monospace;">
                          <table class="table table-bordered" id="result1" width="100%" cellspacing="0" style="font-size: 15px;">
                            <thead>
                              <tr>
                                <th>IMAGE</th>
                                <th>TITLE</th>
                                <th>AUTHOR</th>
                                <th>DESCRIPTION</th>
                                <th>DATE</th>
                                <th>STATUS</th>
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

   


<!-- 
<div id="sample">
  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>
  <textarea name="area3" style="width: 300px; height: 100px;" id="txtDescription">
       HTML content default in textarea
</textarea>
<button id="btnTest">test</button>
</div> -->

<!----------------------------------------------------------------------- MODAL ADD------------------------------------------------------------------ -->
          <div id="modalAddProduct" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

              <form action="" onsubmit="insertData(); return false;">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header bg-primary text-white">
                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                    <h4 class="modal-title" style=" margin: 0 auto;">Add News</h4>
                  </div>
                  <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                     <center>
                        <img class="ml-2" src="../images/news.png" style="width: 170px; height: 170px; border-radius: 50%;" id="image_editProfile"><br>
                        <label class="btn btn-primary btn mt-2" style="width:150px;">
                        <span class="fa fa-picture"></span>&nbsp&nbspBrowse Image<input type="file" style="display: none;" id="file_editProfile">
                        </label>
                      </center>
                      Author:
                      <input type="text" class="form-control" id="author">
                      Title:
                      <input type="text" class="form-control" id="title" name="">
                    </div>
                    <div class="col-md-6">
                      Description:

                      <!-- <textarea id="noise" name="noise" class="widgEditor nothing"></textarea> -->
                      <!-- <textarea id="summernote"></textarea> -->

                      <div class="page-wrapper1 box-content">

                          <textarea class="content1" name="example"></textarea>

                      </div>



                    </div>
                  </div>


                  </div><!-- <div class="modal-body"> -->

                  <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close <i class="fas fa-times"></i></button>
                    <button type="submit" class="btn btn-success" id="btnInserNews">Save <i class="fas fa-check"></i></button>
                    <!-- <input type="submit" value="Check the submitted code" /> -->
                  </div>
                </div>
                <!-- <div class="modal-content"> -->
              </form>


            </div>
          </div>
<!----------------------------------------------------------------------- MODAL ADD------------------------------------------------------------------ -->



<!----------------------------------------------------------------------- MODAL EDIT------------------------------------------------------------------ -->
       <div id="modalEditProduct" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">

          <!-- <form action="" onsubmit="updateData(); return false;"> -->
            <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                  <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                  <h4 class="modal-title" style=" margin: 0 auto;">Update News</h4>
                </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-6">
                         <center>
                            <img class="ml-2" src="../images/news.png" style="width: 170px; height: 170px;" id="image_updateProfile"><br>
                            <label class="btn btn-primary btn mt-2" style="width:150px;">
                            <span class="fa fa-picture"></span>&nbsp&nbspBrowse Image<input type="file" style="display: none;" id="file_updateProfile">
                            </label>
                          </center>
                          Author:
                          <input type="text" class="form-control" id="editAuthor">
                          Title:
                          <input type="text" class="form-control" id="editTitle" name="">
                      </div>
                      <div class="col-sm-6">
                          Description:

                          <!-- <textarea id="editNoise" name="noise" class="widgEditor nothing"></textarea> -->
                          <!-- <textarea id="editSummernote"></textarea> -->
                           <div class="page-wrapper1 box-content">

                              <textarea class="content2" name="example"></textarea>

                          </div>

                          <br>
                          Publish:
                          <select class="form-control mt-3" name="newsStatus" id="newsStatus" style="width:60% !important;">
                            <option value="published" style="background-color: seagreen !important; color:white;">Publish <i class="fa fa-check"></i></option>
                            <option value="draft" style="background-color: red !important; color:white;">Draft <i class="fa fa-times"></i></option>
                          </select>
                      </div>
                    </div>


                  </div><!-- <div class="modal-body"> -->


                <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-dismiss="modal">Close <i class="fas fa-times"></i></button>
                  <button type="button" class="btn btn-success" id="btnUpdateNews">Update <i class="fas fa-sync-alt"></i></button>
                  <!-- <input type="submit" value="Check the submitted code" /> -->
                </div>
              </div>

            <!-- </form> -->

          </div>
        </div>



<!----------------------------------------------------------------------- MODAL EDIT------------------------------------------------------------------ -->




            </div><!-- container -->
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->



    <!-- using local scripts -->
<?php include 'includes/js_includes.php' ?>



<!-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script> -->

<script type="text/javascript" src="../rich texteditor/src/jquery.richtext.js"></script>

<script type="text/javascript">


 // $('#summernote').summernote({
 //    placeholder: 'News Description',
 //    tabsize: 2,
 //    height: 175,
 //    toolbar: [
 //      ['style', ['style']],
 //      ['font', ['bold', 'underline', 'clear']],
 //      ['color', ['color']],
 //      ['para', ['ul', 'ol', 'paragraph']],
 //      ['table', ['table']],
 //      ['insert', ['link', 'picture', 'video']],
 //      ['view', ['fullscreen', 'codeview', 'help']]
 //    ]
 //  });

 $('.content1').richText();
 $('.content2').richText();


    //-----------------------------------------------------fetch data-----------------------------------------------------------------------
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
     url:"function php/fetchNews.php",
     type:"POST",
     cache:false,

    },
    "autoWidth" : false
   });

  }

fetch_users();

var image_status = 'old'
var newsId = 0;
//-----------------------------------------------------fetch data-----------------------------------------------------------------------


//image insert start =========================>>>>>>
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


//image insert end =========================>>>>>>




//----------------------------------------------------------------------------INSERT DATA-----------------------------------------------------------

function insertData()
{
  // alert(document.getElementById('noise').value);
  var title = document.getElementById("title").value;
  // var description = document.getElementById("summernote").value;

  var description =  $('.content1').val();

  var file = document.getElementById("file_editProfile").value;
  var author = document.getElementById("author").value;

  //alert if incomplete start
  if(title=="" || description=="" || file=="" || author=="" ) 
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

  else if(file =="") 
  {

        swal({
            title: "Incomplete Data!",
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
      text: "Upload News!",
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
        
              // alert(description);
              
              description = description.replace(/"/g, "'");
              description = description.replace(/&nbsp;/g, ' ');
              description = description.replace(/&lt;/g, '<');
              description = description.replace(/&gt;/g, '>');
              description = description.replace(/&amp;/g, '&');
              description = description.replace(/&quot;/g, '"');
              description = description.replace(/&apos;/g, "'");
              description = description.replace(/&cent;/g, '¢');
              description = description.replace(/&pound;/g, '£');
              description = description.replace(/&yen;/g, '¥');
              description = description.replace(/&euro;/g, '€');
              description = description.replace(/&copy;/g, '©');
              description = description.replace(/&reg;/g, '®"');


              //data with object
              var form_data = new FormData();
              form_data.append("file_editProfile",file_property);
              // var other_data = 'title='+title+'&description='+description+"&image_name="+new Date().getTime();
              var other_data = 'title='+title+'&description='+description+'&author='+author+"&image_name="+new Date().getTime();
              // alert(other_data);

              //ajax start
              $.ajax({  
                 url:"function php/insertNews.php?"+other_data, 
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
                  alert(data);
                  
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

  } // else end



}






//----------------------------------------------------------------------------INSERT DATA--------------------------------------------------------------

$(document).on('click', "#td_btn_delete", function(){
 
  var id=$(this).data("id_delete");
  // alert(id);

  //confirmation start
  swal({
  title: "Are you sure?",
  text: "Delete NEWS!",
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
           url:"function php/deleteNews.php?id="+id, 
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
            title: "NEWS Successfully Deleted!",
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







//--------------------------------------------------------------------IMAGE UPDATE DATA---------------------------------------------------
$(document).on("change", "#file_updateProfile", function() { 
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
                      document.getElementById("image_updateProfile").src=current_image;
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
                        document.getElementById("image_updateProfile").src=current_image;
                        image_status="old";

                  }
                  });
      
    } 

    else if(this.files && this.files[0]) {
      var obj = new FileReader();
      obj.onload = function(data) { document.getElementById("image_updateProfile").src = data.target.result; }
      obj.readAsDataURL(this.files[0]);
      image_status="new";
    }

   }); 


//--------------------------------------------------------------------IMAGE UPDATE DATA---------------------------------------------------



//----------------------------------------------------------------------------UPDATE DATA-----------------------------------------------------------

$('#btnUpdateNews').click(function(){

  // alert(document.getElementById('noise').value);
  var editTitle = document.getElementById("editTitle").value;


  var editNoise =  $('.content2').val();
  // var editNoise = document.getElementById("editSummernote").value;
  

  var file = document.getElementById("file_updateProfile").value;
  var editAuthor = document.getElementById("editAuthor").value;
  var newsStatus = document.getElementById("newsStatus").value;

  // alert(editNoise);

  //alert if incomplete start
  if(editTitle=="" || editNoise=="" || editAuthor=="" ) 
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
      var file_property = document.getElementById("file_updateProfile").files[0];

      //confirmation start
      swal({
      title: "Are you sure?",
      text: "Update News!",
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
              editNoise = editNoise.replace(/"/g, "'");
              editNoise = editNoise.replace(/&nbsp;/g, ' ');
              editNoise = editNoise.replace(/&lt;/g, '<');
              editNoise = editNoise.replace(/&gt;/g, '>');
              editNoise = editNoise.replace(/&amp;/g, '&');
              editNoise = editNoise.replace(/&quot;/g, '"');
              editNoise = editNoise.replace(/&apos;/g, "'");
              editNoise = editNoise.replace(/&cent;/g, '¢');
              editNoise = editNoise.replace(/&pound;/g, '£');
              editNoise = editNoise.replace(/&yen;/g, '¥');
              editNoise = editNoise.replace(/&euro;/g, '€');
              editNoise = editNoise.replace(/&copy;/g, '©');
              editNoise = editNoise.replace(/&reg;/g, '®"');

              // alert(editNoise);

              //data with object
              var form_data = new FormData();
              form_data.append("file_updateProfile",file_property);
              // var other_data = 'title='+title+'&description='+description+"&image_name="+new Date().getTime();
              var other_data = 'editTitle='+editTitle+'&editNoise='+editNoise+'&newsId='+newsId+'&editAuthor='+editAuthor+'&image_status='+image_status+'&newsStatus='+newsStatus+"&image_name="+new Date().getTime();
              // alert(editNoise);

              //ajax start
              $.ajax({  
                 url:"function php/updateNews.php?"+other_data, 
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
                  title: "NEWS Successfully Updated!",
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

  } // else end



});






//----------------------------------------------------------------------------UPDATE DATA--------------------------------------------------------------


// $('#editSummernote').summernote({
//   placeholder: 'News Description',
//   tabsize: 2,
//   height: 175,
//   toolbar: [
//     ['style', ['style']],
//     ['font', ['bold', 'underline', 'clear']],
//     ['color', ['color']],
//     ['para', ['ul', 'ol', 'paragraph']],
//     ['table', ['table']],
//     ['insert', ['link', 'picture', 'video']],
//     ['view', ['fullscreen', 'codeview', 'help']]
//   ]
// });



$(document).on('click', "#btnAddNews", function(){

  $('#noiseWidgToolbarSelectBlock').addClass('form-control');
  $('#noiseWidgToolbarSelectBlock').css("height", "30px");

});



$(document).on('click', "#td_btn_edit", function(){

  var id=$(this).data("id_edit");

  var imageName=$('#td_image'+id).data("data0");

  var title=$("#td_title"+id).data("data1");
  var author=$("#td_author"+id).data("data2");
  var description=$("#td_description"+id).data("data3");
  var status=$("#td_status"+id).data("data5");

  // alert(description);

  // $("#editSummernote").summernote("code", description);
  $('.richText-editor').html(description)
  // $('.content2').val(description);


  $('#editTitle').val(title);
  $('#editAuthor').val(author);
  // $('#editNoise').val(description);
  document.getElementById("image_updateProfile").src=imageName;
  // document.getElementById("editNoise").value = description;
  newsId = id;


  $('#modalEditProduct').modal('show');

  $('#editNoiseWidgToolbarSelectBlock').addClass('form-control');
  $('#editNoiseWidgToolbarSelectBlock').css("height", "30px");

  // $('editNoise').val('background-color');
});












</script>
</body>

</html>