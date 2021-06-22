<script type="text/javascript">
$(document).ready(function(){
  //-----------------------------------------------------FETCH USER-----------------------------------------------------------------------
  var dt = $('#result1').DataTable( {
    // 'paging'      : true,  
    'lengthChange': false,
    'searching'   : true,
    'ordering'    : true,
    'info'        : false,
    'autoWidth'   : false,
  });
  //----------------------------------------------------------FETCH USER-----------------------------------------------------------------------


  //--------------------------------------------------------INSERT DATA-----------------------------------------------------------

  $(document).on('click', "#btnUploadVideo", function(){
    var videoLink = $('#videoLink').val();
    var videoTitle = $('#videoTitle').val();
    videoTitle = videoTitle.replace("#", "(hashtag)");
    var videoDate = $('#videoDate').val();
    var videoSeason = $('#videoSeason').val();

    //alert if incomplete start
    if(videoLink=="" || videoTitle=="" || videoDate=="" || videoSeason=="" ) 
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

        //confirmation start
        swal({
        title: "Are you sure?",
        text: "Embed Video!",
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
                
                var other_data = 'videoLink='+videoLink+'&videoTitle='+videoTitle+'&videoDate='+videoDate+'&videoCategory='+'linawin natin'+'&videoSeason='+videoSeason;
                // alert(other_data);

                //ajax start
                $.ajax({  
                   url:"function php/embedVideo.php?"+other_data, 
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
                    // alert(data) 
                    swal.close();

                    swal({
                    title: "Video Successfully Embedded!",
                    // text: data,
                    text: "Looking Good",
                    type: "success",
                    showCancelButton: false,
                    confirmButtonColor: "#5cb85c",
                    confirmButtonText: '<span class="fa fa-check"></span>&nbspProceed',
                    confirmButtonClass: "btn"
                    }).then((result) => {
                      if (result.value) {

                          // $("#modalEmbed").modal("hide");
                          // fetch_users();
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

  //--------------------------------------------------INSERT DATA--------------------------------------------------------------




  //-----------------------------------------------------DELETE USER-----------------------------------------------------------------------
  $(document).on('click', "#td_btn_delete", function(){
   
    var id=$(this).data("id_delete");
     // alert(id);

    //confirmation start
    swal({
    title: "Are you sure?",
    text: "Delete Video!",
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
             url:"function php/deleteVideo.php?id="+id, 
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
              title: "Video Successfully Deleted!",
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



  var id = 0;

  //------------------------------------------------TRANSFER VALUE TO MODAL--------------------------------------------------------
  $(document).on('click', "#td_btn_edit", function(){

    id=$(this).data("id_edit");

    var updateLink=$("#td_link"+id).data("data1");
    var updateTitle=$("#td_title"+id).data("data2");
    var updateSeason=$("#td_season"+id).data("data3");
    var updateDate=$("#td_date"+id).data("data4");


    $('#updateLink').val(updateLink);
    $('#updateTitle').val(updateTitle);
    $('#updateSeason').val(updateSeason);
    $('#updateDate').val(updateDate);

  });

  //------------------------------------------------TRANSFER VALUE TO MODAL--------------------------------------------------------



  $(document).on('click', "#btnUpdateVideo", function(){
    var updateLink = $('#updateLink').val();
    var updateTitle = $('#updateTitle').val();

    updateTitle = updateTitle.replace("#", "(hashtag)");

    var updateSeason = $('#updateSeason').val();
    var updateDate = $('#updateDate').val();

    // alert(updateTitle);

    var other_data = 'id='+id+'&updateLink='+updateLink+'&updateTitle='+updateTitle+'&updateSeason='+updateSeason+'&updateDate='+updateDate+'&status=linawin natin';

    if ( updateLink == '' || updateTitle == '' || updateSeason == '' || updateDate == '' )
    {
      swal('Error','Please input required fields!','error');
    }
    else
    {

      //confirmation start
      swal({
      title: "Are you sure?",
      text: "Update Video!",
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
               url:"function php/updateVideoSagisag.php?"+other_data, 
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
                title: "Video Successfully Updated!",
                text: data,
                type: "success",
                showCancelButton: false,
                confirmButtonColor: "#5cb85c",
                confirmButtonText: '<span class="fa fa-check"></span>&nbspProceed',
                confirmButtonClass: "btn"
                }).then((result) => {
                  if (result.value) {

                      // fetch_users();
                      // $('#modalUpdate').modal('hide');
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




});
</script>