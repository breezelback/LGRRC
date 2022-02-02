<script type="text/javascript">
  $( document ).ready(function() {



    //-----------------------------------------------------FETCH USER-----------------------------------------------------------------------
    let dt = $('#result1').DataTable( {
        'paging'      : true,  
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

    //-----------------------------------------------------APPROVE USER-----------------------------------------------------------------------


    var id = 0;

    //-----------------------------------------------------TRANSFER VALUE TO MODAL-----------------------------------------------------------------------
    $(document).on('click', "#td_btn_edit", function(){

      id=$(this).data("id_edit");
      var updateName=$("#td_name"+id).data("data0");

      updateName = updateName.split(',');
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

                        // fetch_users();
                        $('#modalUpdate').modal('hide');
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

      }
      // else
    });




    // ------------------------------------------------------PERMANENT REMOVE------------------------------------------------------------
    $(document).on('click', "#td_btn_remove", function(){
     
      var id=$(this).data("id_remove");
       // alert(id);

      //confirmation start
      swal({
      title: "Are you sure?",
      text: "Permanently Delete User!",
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
               url:"function php/removeUser.php?id="+id, 
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
                title: "User Successfully Deleted!",
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

    // ------------------------------------------------------PERMANENT REMOVE------------------------------------------------------------




  }); //document ready
</script>
