// <script type="text/javascript">

  var dt = $('#table_news').DataTable( {
      // 'paging'      : true,  
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false,
    });

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
var description = '';
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




//-----------------------------------------------------------------INSERT DATA-----------------------------------------------------------

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






//----------------------------------------------------------------INSERT DATA--------------------------------------------------------------

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

                  // fetch_users();
                  //close modal
                  location.reload();
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



//------------------------------------------------------------------UPDATE DATA-----------------------------------------------------------

$('#btnUpdateNews').click(function(){

  // alert(document.getElementById('noise').value);
  var editTitle = document.getElementById("editTitle").value;


  var editNoise =  $('.content2').val();
 
  if (editNoise == '<div><br></div>') 
  {
    editNoise = description;
  }


  var file = document.getElementById("file_updateProfile").value;
  var editAuthor = document.getElementById("editAuthor").value;
  var newsStatus = document.getElementById("newsStatus").value;



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






//--------------------------------------------------------------UPDATE DATA--------------------------------------------------------------


$(document).on('click', "#btnAddNews", function(){

  $('#noiseWidgToolbarSelectBlock').addClass('form-control');
  $('#noiseWidgToolbarSelectBlock').css("height", "30px");

});


$(document).on('click', "#td_btn_edit", function(){

  $('#modalEditProduct').modal({backdrop: 'static', keyboard: false});

  var id=$(this).data("id_edit");

  var imageName=$('#td_image'+id).data("data0");

  var title=$("#td_title"+id).data("data1");
  var author=$("#td_author"+id).data("data2");
  description=$("#td_description"+id).data("data3");
  var status=$("#td_status"+id).data("data5");

  $('.richText-editor').html(description)


  $('#editTitle').val(title);
  $('#editAuthor').val(author);

  document.getElementById("image_updateProfile").src=imageName;
  
  newsId = id;


  $('#modalEditProduct').modal('show');

  $('#editNoiseWidgToolbarSelectBlock').addClass('form-control');
  $('#editNoiseWidgToolbarSelectBlock').css("height", "30px");

});












// </script>