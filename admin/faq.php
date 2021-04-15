
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
                    <button class="btn btn-success float-right" data-toggle="modal" data-target="#modalUpload" id="btnAddNews">Upload Q&A <i class="fa fa-question-circle"></i></button>
                    <center><h2>Frequently Asked Questions</h2></center>
                    <br>
                     <div class="card mb-3">
                      <div class="card-header">
                        <i class="fa fa-table"></i> Data Management
                      </div>
                      <div class="card-body">
                        <div class="table-responsive" style="font-family: ui monospace;">
                          <table class="table table-bordered" id="result1" width="100%" cellspacing="0" style="font-size: 15px;">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Question</th>
                                <th>Answer</th>
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

   

            <!-------------------------------------------- EMBED VIDEO  ------------------------------------------------------>

            <div class="modal fade" id="modalUpload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                  <div class="modal-header bg-success">
                    <h5 class="modal-title text-white" id="exampleModalLabel" style="margin: 0 auto;">Upload Q&A <i class="fa fa-question-circle"></i></h5>
                  </div>
                  <div class="modal-body">
                    Question:
                    <input type="text" class="form-control" id="question">
                  
                    Answer:
                    <textarea id="answer" class="form-control"></textarea>

                  </div>    
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btnUploadQa">Upload <i class="fa fa-check"></i></button>
                  </div>
                </div>
              </div>
            </div>

            <!-------------------------------------------- EMBED VIDEO  ------------------------------------------------------>



            <!-------------------------------------------- UPDATE VIDEO  ------------------------------------------------------>

            <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                  <div class="modal-header bg-success">
                    <h5 class="modal-title text-white" id="exampleModalLabel" style="margin: 0 auto;">Update Q&A <i class="fa fa-question-circle"></i></h5>
                  </div>
                  <div class="modal-body">
                    Number:
                    <input type="number" class="form-control" id="number" style="width: 15%;" disabled="">

                    Question:
                    <input type="text" class="form-control" id="updateQuestion">
                  
                    Answer:
                    <textarea id="updateAnswer" class="form-control"></textarea>

                  </div>    
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btnUpdateFaq">Upload <i class="fa fa-check"></i></button>
                  </div>
                </div>
              </div>
            </div>

            <!-------------------------------------------- UPDATE VIDEO  ------------------------------------------------------>


            </div><!-- container -->
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->

    <!-- using local scripts -->

<?php include 'includes/js_includes.php' ?>
<script type="text/javascript">
    //-----------------------------------------------------FETCH USER-----------------------------------------------------------------------
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
    // console.log(settings.json);
    
   
    },
    "ajax" : {
     url:"function php/fetchFaq.php",
     type:"POST",
     cache:false,

    },
    "autoWidth" : false
   });

  }

fetch_users();

//----------------------------------------------------------FETCH USER-----------------------------------------------------------------------


//--------------------------------------------------------INSERT DATA-----------------------------------------------------------

$('#btnUploadQa').click(function(){

  var question = $('#question').val();
  var answer = $('#answer').val();

  //alert if incomplete start
  if(question=="" || answer=="" ) 
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
      text: "Upload Q&A!",
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
              
              var other_data = 'question='+question+'&answer='+answer;
              // alert(other_data);

              //ajax start
              $.ajax({  
                 url:"function php/uploadFaq.php?"+other_data, 
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
                  title: "Q&A Successfully Uploaded!",
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
  text: "Delete Q&A!",
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
           url:"function php/deleteFaq.php?id="+id, 
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
            title: "Q&A Successfully Deleted!",
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

//-----------------------------------------------------DELETE USER-----------------------------------------------------------------------



var id = 0;

//-----------------------------------------------------TRANSFER VALUE TO MODAL-----------------------------------------------------------------------
$(document).on('click', "#td_btn_edit", function(){

  id=$(this).data("id_edit");

  var number=$("#td_x"+id).data("data0");
  var question=$("#td_question"+id).data("data1");
  var answer=$("#td_answer"+id).data("data2");

  $('#number').val(number);
  $('#updateQuestion').val(question);
  $('#updateAnswer').val(answer);


});

//-----------------------------------------------------TRANSFER VALUE TO MODAL-----------------------------------------------------------------------




$('#btnUpdateFaq').click(function(){
  var updateQuestion = $('#updateQuestion').val();
  var updateAnswer = $('#updateAnswer').val();

  var other_data = 'id='+id+'&updateQuestion='+updateQuestion+'&updateAnswer='+updateAnswer;

  if ( updateQuestion == '' || updateAnswer == '' )
  {
    swal('Error','Please input required fields!','error');
  }
  else
  {

    //confirmation start
    swal({
    title: "Are you sure?",
    text: "Update FAQ!",
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
             url:"function php/updateFaq.php?"+other_data, 
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
              title: "FAQ Successfully Updated!",
              text: data,
              type: "success",
              showCancelButton: false,
              confirmButtonColor: "#5cb85c",
              confirmButtonText: '<span class="fa fa-check"></span>&nbspProceed',
              confirmButtonClass: "btn"
              }).then((result) => {
                if (result.value) {

                    fetch_users();
                    $('#modalUpdate').modal('hide');
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





</script>
</body>

</html>