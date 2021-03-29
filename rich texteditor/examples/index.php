<?php 
include '../../function php/conn.php';
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>RichText example</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="css/site.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA==" crossorigin="anonymous" />

        <link rel="stylesheet" href="../src/richtext.min.css">

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==" crossorigin="anonymous"></script>

        <script type="text/javascript" src="../src/jquery.richtext.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    </head>
    <body>


        <div class="page-wrapper box-content">

            <textarea class="content" name="example"></textarea>

            <button class="btn btn-primary mt-3" id="btnTest">Insert</button>

        </div>

        <div class="container">
             <div class="row">
                <div class="col-md-12 mt-2">
                     <div class="card mb-3">
                      <div class="card-header">
                        <i class="fa fa-table"></i> Video Management
                      </div>
                      <div class="card-body">
                        <div class="table-responsive" style="font-family: ui monospace;">
                          <table class="table table-bordered" id="result1" width="100%" cellspacing="0" style="font-size: 15px;">
                            <thead>
                              <tr>
                                <th>Video</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                          </table>
                        </div>
                      </div>
                      <div class="card-footer small text-muted"></div>
                    </div>


                </div>
            </div>
        </div>



        <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                 <div class="page-wrapper box-content">
                    <textarea class="updateContent" name="updateExample"></textarea>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btnUpdate">Save changes</button>
              </div>
            </div>
          </div>
        </div>



        <script>
        $(document).ready(function() {
            $('.content').richText();
            $('.updateContent').richText();
        });

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
             url:"fetchVideos.php",
             type:"POST",
             cache:false,

            },
            "autoWidth" : false
           });

          }

        fetch_users();

        $('#btnTest').click(function(){
            var test =  $('.content').val();
            alert(test);



            test = test.replace(/"/g, "'");
            test = test.replace(/&nbsp;/g, ' ');
            test = test.replace(/&lt;/g, '<');
            test = test.replace(/&gt;/g, '>');
            test = test.replace(/&amp;/g, '&');
            test = test.replace(/&quot;/g, '"');
            test = test.replace(/&apos;/g, "'");
            test = test.replace(/&cent;/g, '¢');
            test = test.replace(/&pound;/g, '£');
            test = test.replace(/&yen;/g, '¥');
            test = test.replace(/&euro;/g, '€');
            test = test.replace(/&copy;/g, '©');
            test = test.replace(/&reg;/g, '®"');




            alert(test);
             $.ajax({  
                 url:"insert.php?text="+test, 
                 method:"POST",  
                 //post:data  
                 contentType:false,
                 cache:false,
                 processData:false,

                 beforeSend:function() {

                 }, 

                 success:function(data){ 
                  alert(data);
                  }
                      
              });  
              //ajax end 
        });

        var id=0;

        $(document).on('click', "#td_btn_edit", function(){
 
            id=$(this).data("id_edit");
            var title=$("#td_text"+id).data("data1");

            $('.richText-editor').html(title)

        });


        $('#btnUpdate').click(function(){
            var updateContent = $('.updateContent').val();

            updateContent = updateContent.replace(/"/g, "'");
            updateContent = updateContent.replace(/&nbsp;/g, ' ');
            updateContent = updateContent.replace(/&lt;/g, '<');
            updateContent = updateContent.replace(/&gt;/g, '>');
            updateContent = updateContent.replace(/&amp;/g, '&');
            updateContent = updateContent.replace(/&quot;/g, '"');
            updateContent = updateContent.replace(/&apos;/g, "'");
            updateContent = updateContent.replace(/&cent;/g, '¢');
            updateContent = updateContent.replace(/&pound;/g, '£');
            updateContent = updateContent.replace(/&yen;/g, '¥');
            updateContent = updateContent.replace(/&euro;/g, '€');
            updateContent = updateContent.replace(/&copy;/g, '©');
            updateContent = updateContent.replace(/&reg;/g, '®"');


            // swal(updateContent);

             $.ajax({  
                 url:"updateText.php?id="+id+"&updateContent="+updateContent, 
                 method:"POST",  
                 //post:data  
                 contentType:false,
                 cache:false,
                 processData:false,

                 beforeSend:function() {

                 }, 

                 success:function(data){ 
                  // swal(data);
                  swal('Success','Data Updated!','success');
                  location.reload();
                }
                      
              });  
              //ajax end 



        });



        </script>

    </body>
</html>