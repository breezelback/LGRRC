<script type="text/javascript">
  $(document).ready(function(){


    var dt = $('#result1').DataTable( {
      // 'paging'      : true,  
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false,
    });


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
if(name=="" || expertise=="" || address=="" || email=="" ) 
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
if(updateName=="" || updateExpertise=="" || updateAddress=="" || updateEmail=="" ) 
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

                      // fetch_users();
                      //close modal
                      // $("#modalUpdateExpert").modal("hide");
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



});
</script>