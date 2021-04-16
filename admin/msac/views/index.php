<?php require_once 'msac/controller/MembersController.php'; ?>
<?php require_once 'function php/conn.php'; ?>
<?php require_once 'validate.php'; ?> 

<main class="page-content pt-2">
    
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-12 mt-2">
          <button class="btn btn-success float-right" data-toggle="modal" data-target="#modalAddProduct"><i class="fas fa-plus"></i> Add MSAC Member</button>
          <center><h2>MSAC Members</h2></center>
        </div>

        <div class="col-md-12 mt-3">
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table"></i> MSAC Management
            </div>
            <div class="card-body">
              <?php include 'table_members.php'; ?>
            </div>
            <div class="card-footer small text-muted"></div>
          </div>
        </div>

      </div>
    </div>
</main>

<?php include 'modal_add_product.php'; ?>
<?php include 'modal_edit_product.php'; ?>

<script type="text/javascript">
  $(document).ready(function(){
    let dt = $('#table_members').DataTable( {
      // 'paging'      : true,  
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false,
    });

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

    $('#btnInsertMsac').click(function(){
      var agencyName = document.getElementById("agencyName").value;
      var address = document.getElementById("address").value;
      var contactNumber = document.getElementById("contactNumber").value;
      var email = document.getElementById("email").value;
      var file = document.getElementById("file_editProfile").value;


      //alert if incomplete start
      if(agencyName=="" || address=="" || contactNumber=="" || email=="" ) 
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
                  var other_data = 'agencyName='+agencyName+'&address='+address+'&contactNumber='+contactNumber+'&email='+email+"&image_name="+new Date().getTime();

                  //ajax start
                  $.ajax({  
                     url:"function php/insertMsac.php?"+other_data, 
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

    var image_status = 'old';
    var id = 0;
    var oldImagename = '';

    $(document).on('click', "#td_btn_edit", function(){

      let id=$(this).data("id_edit");
      let updateImage=$("#td_image"+id).data("data0")
      let updateAgencyName=$("#td_msacName"+id).data("data1");
      oldImagename = updateImage;
      let updateAddress=$("#td_msacAddress"+id).data("data2");
      let updateContactNumber=$("#td_msacContactNumber"+id).data("data3");
      let updateEmail=$("#td_msacEmail"+id).data("data4");

      $('#updateAgencyName').val(updateAgencyName);
      $('#updateAddress').val(updateAddress);
      $('#updateContactNumber').val(updateContactNumber);
      $('#updateEmail').val(updateEmail);
      console.log(updateImage);
      document.getElementById("image_updateMsac").src=updateImage;
    });

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

      $('#btnUpdateMsac').click(function(){
        var updateAgencyName = document.getElementById("updateAgencyName").value;
        var updateAddress = document.getElementById("updateAddress").value;
        var updateContactNumber = document.getElementById("updateContactNumber").value;
        var updateEmail = document.getElementById("updateEmail").value;
        var file = document.getElementById("file_updateMsac").value;


        //alert if incomplete start
        if(updateAgencyName=="" || updateAddress=="" || updateContactNumber=="" || updateEmail=="" ) 
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
            text: "Update MSAC!",
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
                    var other_data = 'id='+id+'&updateAgencyName='+updateAgencyName+'&updateAddress='+updateAddress+'&updateContactNumber='+updateContactNumber+'&updateEmail='+updateEmail+'&image_status='+image_status+'&oldImagename='+oldImagename+"&image_name="+new Date().getTime();

                    //ajax start
                    $.ajax({  
                       url:"function php/updateMsac.php?"+other_data, 
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
                        title: "MSAC Successfully Updated!",
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

  });
</script>


