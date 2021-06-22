<script type="text/javascript">
$(document).ready(function(){
//---------------------------------------------------------FETCH DATA-----------------------------------------------------------------------
    var dt = $('#result1').DataTable( {
      // 'paging'      : true,  
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false,
    });

//---------------------------------------------------------FETCH DATA-----------------------------------------------------------------------



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
$(document).on('click', "#btnUpdate", function(){

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


});
</script>