<script type="text/javascript">

var dt = $('#table_news').DataTable( {
      // 'paging'      : true,  
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false,
    });
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