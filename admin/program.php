<?php include 'function php/conn.php'; ?>
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
    <style type="text/css">
      .imgGallery
        {
          height: 250px;
          width: 250px;
          margin: 3px;
        }



       .example {
        position: relative;
        padding: 0;
        width: 300px;
        display: block;
        cursor: pointer;
        overflow: hidden;
        border: 1px solid gray;
      }   
      .content {
        opacity: 0;
        font-size: 40px;
        position: absolute;
        top: 0;
        left: 0;
        color: #1c87c9;
        background-color: rgba(255, 0, 0, 0.5);
        width: 300px;
        height: 300px;
        -webkit-transition: all 400ms ease-out;
        -moz-transition: all 400ms ease-out;
        -o-transition: all 400ms ease-out;
        -ms-transition: all 400ms ease-out;
        transition: all 400ms ease-out;
        text-align: center;
      }
      .example .content:hover {
        opacity: 1;
      }
      .example .content .text {
        height: 0;
        opacity: 1;
        transition-delay: 0s;
        transition-duration: 0.4s;
      }
      .example .content:hover .text {
        opacity: 1;
        transform: translateY(250px);
        -webkit-transform: translateY(100px);
        color: white;
      }    





      .contentSub {
        opacity: 0;
        font-size: 40px;
        position: absolute;
        top: 0;
        left: 0;
        color: #1c87c9;
        background-color: rgba(255, 0, 0, 0.5);
        width: 200px;
        height: 200px;
        -webkit-transition: all 400ms ease-out;
        -moz-transition: all 400ms ease-out;
        -o-transition: all 400ms ease-out;
        -ms-transition: all 400ms ease-out;
        transition: all 400ms ease-out;
        text-align: center;
      }

      .exampleSub {
        position: relative;
        padding: 0;
        width: 200px;
        display: block;
        cursor: pointer;
        overflow: hidden;
        border: 1px solid gray;
      }
      .exampleSub .contentSub:hover {
        opacity: 1;
      }
      .exampleSub .contentSub .text {
        height: 0;
        opacity: 1;
        transition-delay: 0s;
        transition-duration: 0.4s;
      }
      .exampleSub .contentSub:hover .text {
        opacity: 1;
        transform: translateY(250px);
        -webkit-transform: translateY(70px);
        color: white;
      }



    </style>
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
                    <center><h2>Program Facility Panel</h2></center>

                     <div class="card mb-3">
                      <div class="card-header">
                        <i class="fa fa-table"></i> Menu
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-xl-5">
                            <center>
                               <div class="example">
                                <?php 
                                $exec = $conn->query(' SELECT `id`, `imageName`, `status`, `dateUploaded` FROM `tbl_program_images` WHERE `status` = "mainImage" ');
                                $result = $exec->fetch_assoc();
                                 ?>
                                <img src="../images/program features/<?php echo $result['imageName']; ?>" width="300px" height="300px" alt="tree" id="mainImg">

                                <div class="content">
                                  <div class="text">
                                   
                                    <center>
                                      <label class="btn btn-secondary" style="background-color: transparent;">
                                      <span class="fa fa-picture"></span><i class="fa fa-edit"></i><input type="file" style="display: none;" id="btnMainImg">
                                      </label>
                                    </center>

                                  </div>
                                </div>
                              </div>
                              </center>
                            <!-- <img src="../images/program_facilities2.jpg" alt="Image" class="img-fluid" style="margin-left: 10px;"> -->
                          </div>
                          <div class="col-xl-7">
                            <div class="row">

                              <div class="col-sm-6" style="margin-bottom: 20px !important;">
                                 <div class="exampleSub">

                                  <?php 
                                  $exec = $conn->query(' SELECT `id`, `imageName`, `status`, `dateUploaded` FROM `tbl_program_images` WHERE `status` = "subImage1" ');
                                  $result = $exec->fetch_assoc();
                                   ?>
                                  <img src="../images/program features/<?php echo $result['imageName']; ?>" width="200px" height="200px" alt="tree" id="subImage1">

                                  <div class="contentSub">
                                    <div class="text">
                                     
                                      <center>
                                        <label class="btn btn-secondary" style="background-color: transparent;">
                                        <span class="fa fa-picture"></span><i class="fa fa-edit"></i><input type="file" style="display: none;" id="btnSubImage1">
                                        </label>
                                      </center>

                                    </div>
                                  </div>

                                </div>
                              </div>
                              <!-- <div class="col-sm-6"> -->

                              <div class="col-sm-6">
                                 <div class="exampleSub">

                                  <?php 
                                  $exec = $conn->query(' SELECT `id`, `imageName`, `status`, `dateUploaded` FROM `tbl_program_images` WHERE `status` = "subImage2" ');
                                  $result = $exec->fetch_assoc();
                                   ?>
                                  <img src="../images/program features/<?php echo $result['imageName']; ?>" width="200px" height="200px" alt="tree" id="subImage2">

                                  <div class="contentSub">
                                    <div class="text">
                                     
                                      <center>
                                        <label class="btn btn-secondary" style="background-color: transparent;">
                                        <span class="fa fa-picture"></span><i class="fa fa-edit"></i><input type="file" style="display: none;" id="btnSubImage2">
                                        </label>
                                      </center>

                                    </div>
                                  </div>

                                </div>
                              </div>
                              <!-- <div class="col-sm-6"> -->

                              <div class="col-sm-6">
                                 <div class="exampleSub">

                                  <?php 
                                  $exec = $conn->query(' SELECT `id`, `imageName`, `status`, `dateUploaded` FROM `tbl_program_images` WHERE `status` = "subImage3" ');
                                  $result = $exec->fetch_assoc();
                                   ?>
                                  <img src="../images/program features/<?php echo $result['imageName']; ?>" width="200px" height="200px" alt="tree" id="subImage3">

                                  <div class="contentSub">
                                    <div class="text">
                                     
                                      <center>
                                        <label class="btn btn-secondary" style="background-color: transparent;">
                                        <span class="fa fa-picture"></span><i class="fa fa-edit"></i><input type="file" style="display: none;" id="btnSubImage3">
                                        </label>
                                      </center>

                                    </div>
                                  </div>

                                </div>
                              </div>
                              <!-- <div class="col-sm-6"> -->

                              <div class="col-sm-6">
                                 <div class="exampleSub">

                                  <?php 
                                  $exec = $conn->query(' SELECT `id`, `imageName`, `status`, `dateUploaded` FROM `tbl_program_images` WHERE `status` = "subImage4" ');
                                  $result = $exec->fetch_assoc();
                                   ?>
                                  <img src="../images/program features/<?php echo $result['imageName']; ?>" width="200px" height="200px" alt="tree" id="subImage4">

                                  <div class="contentSub">
                                    <div class="text">
                                     
                                      <center>
                                        <label class="btn btn-secondary" style="background-color: transparent;">
                                        <span class="fa fa-picture"></span><i class="fa fa-edit"></i><input type="file" style="display: none;" id="btnSubImage4">
                                        </label>
                                      </center>

                                    </div>
                                  </div>

                                </div>
                              </div>
                              <!-- <div class="col-sm-6"> -->



                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                      <div class="card-footer small text-muted"></div>
                    </div>


                </div>
            </div>

   

            </div><!-- container -->
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->

    <!-- using local scripts -->
<?php include 'includes/js_includes.php' ?>
<script type="text/javascript">


// ----------------------------------------------------------------------MAIN IMAGE-----------------------------------------------------------------

$(document).on("change", "#btnMainImg", function() { 
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
                      document.getElementById("mainImg").src=current_image;
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
                        document.getElementById("mainImg").src=current_image;
                        image_status="old";

                  }
                  });
      
    } 

    else if(this.files && this.files[0]) {



      var file_property = document.getElementById("btnMainImg").files[0];
      //data with object
      var form_data = new FormData();
      form_data.append("btnMainImg",file_property);
      var other_data = "status=mainImg&image_name="+new Date().getTime();

      //ajax start
      $.ajax({  
         url:"function php/insertImage.php?"+other_data, 
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
         

          }
              
      });  
      //ajax end 



      //test
      var obj = new FileReader();
      obj.onload = function(data) { document.getElementById("mainImg").src = data.target.result; }
      obj.readAsDataURL(this.files[0]);
      image_status="new";
    }

   }); 


// ----------------------------------------------------------------------MAIN IMAGE-----------------------------------------------------------------







// ----------------------------------------------------------------------SUB IMAGE 1-----------------------------------------------------------------

$(document).on("change", "#btnSubImage1", function() { 
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
                      document.getElementById("subImage1").src=current_image;
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
                        document.getElementById("subImage1").src=current_image;
                        image_status="old";

                  }
                  });
      
    } 

    else if(this.files && this.files[0]) {



      var file_property = document.getElementById("btnSubImage1").files[0];
      //data with object
      var form_data = new FormData();
      form_data.append("btnSubImage1",file_property);
      var other_data = "status=subImage1&image_name="+new Date().getTime();

      //ajax start
      $.ajax({  
         url:"function php/insertImage.php?"+other_data, 
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
         

          }
              
      });  
      //ajax end 



      //test
      var obj = new FileReader();
      obj.onload = function(data) { document.getElementById("subImage1").src = data.target.result; }
      obj.readAsDataURL(this.files[0]);
      image_status="new";
    }

   }); 


// ----------------------------------------------------------------------SUB IMAGE 1-----------------------------------------------------------------






// ----------------------------------------------------------------------SUB IMAGE 2-----------------------------------------------------------------

$(document).on("change", "#btnSubImage2", function() { 
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
                      document.getElementById("subImage2").src=current_image;
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
                        document.getElementById("subImage2").src=current_image;
                        image_status="old";

                  }
                  });
      
    } 

    else if(this.files && this.files[0]) {



      var file_property = document.getElementById("btnSubImage2").files[0];
      //data with object
      var form_data = new FormData();
      form_data.append("btnSubImage2",file_property);
      var other_data = "status=subImage2&image_name="+new Date().getTime();

      //ajax start
      $.ajax({  
         url:"function php/insertImage.php?"+other_data, 
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
         

          }
              
      });  
      //ajax end 



      //test
      var obj = new FileReader();
      obj.onload = function(data) { document.getElementById("subImage2").src = data.target.result; }
      obj.readAsDataURL(this.files[0]);
      image_status="new";
    }

   }); 


// ----------------------------------------------------------------------SUB IMAGE 2-----------------------------------------------------------------


// ----------------------------------------------------------------------SUB IMAGE 3-----------------------------------------------------------------

$(document).on("change", "#btnSubImage3", function() { 
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
                      document.getElementById("subImage3").src=current_image;
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
                        document.getElementById("subImage3").src=current_image;
                        image_status="old";

                  }
                  });
      
    } 

    else if(this.files && this.files[0]) {



      var file_property = document.getElementById("btnSubImage3").files[0];
      //data with object
      var form_data = new FormData();
      form_data.append("btnSubImage3",file_property);
      var other_data = "status=subImage3&image_name="+new Date().getTime();

      //ajax start
      $.ajax({  
         url:"function php/insertImage.php?"+other_data, 
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
         

          }
              
      });  
      //ajax end 



      //test
      var obj = new FileReader();
      obj.onload = function(data) { document.getElementById("subImage3").src = data.target.result; }
      obj.readAsDataURL(this.files[0]);
      image_status="new";
    }

   }); 


// ----------------------------------------------------------------------SUB IMAGE 3-----------------------------------------------------------------


// ----------------------------------------------------------------------SUB IMAGE 3-----------------------------------------------------------------

$(document).on("change", "#btnSubImage4", function() { 
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
                      document.getElementById("subImage4").src=current_image;
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
                        document.getElementById("subImage4").src=current_image;
                        image_status="old";

                  }
                  });
      
    } 

    else if(this.files && this.files[0]) {



      var file_property = document.getElementById("btnSubImage4").files[0];
      //data with object
      var form_data = new FormData();
      form_data.append("btnSubImage4",file_property);
      var other_data = "status=subImage4&image_name="+new Date().getTime();

      //ajax start
      $.ajax({  
         url:"function php/insertImage.php?"+other_data, 
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
         

          }
              
      });  
      //ajax end 



      //test
      var obj = new FileReader();
      obj.onload = function(data) { document.getElementById("subImage4").src = data.target.result; }
      obj.readAsDataURL(this.files[0]);
      image_status="new";
    }

   }); 


// ----------------------------------------------------------------------SUB IMAGE 3-----------------------------------------------------------------






</script>
</body>

</html>