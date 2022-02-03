<?php 
session_start();

if (isset($_GET['auth'])) 
{
  $auth = 'Please login first!';
}
else
{
  $auth = '';
}

include 'function php/conn.php'; 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="LGRRC Website">
    <meta name="keywords" content="dilg,lgrc calabarzon,lgrrc calabarzon,lgrrc,lgrc, calabarzon, dilg calabarzon">
    <meta name="author" content="Jeck Castillo">
    <link rel="icon" type="image/png" href="images/lgrc_logo.png">
    <?php include 'includes/css_includes.php'; ?>
    <style>
      .btn .btnBadge
      {
        background-color: red;
        color: white;
        margin-top: 330px;
        position: absolute;
        margin-left: -34px;
      }
    </style>
    <title>LGRRC CALABARZON</title>
  </head>
  <body>
  <div class="bgImage">
     <!-- Navbar-->
     <?php include 'includes/header.php'; ?>
    <br><br><br><br>

      <div class="container">

          <div class="pt-5">

            <div class="row align-items-center heading">

              <div class="col-lg-7 mb-4 text-white">
                <!-- <header class="py-5 mt-5"> -->
                <header>
                    <h2 class="display-6 headingText">Local Governance Regional Resource Center (LGRRC) CALABARZON</h2>
                    <h1><b>E-LIBRARY SYSTEM</b></h1>
                    <p class="lead mb-0" style="font-family: 'centuryGothic'; font-size:17px; color:#e8e7e7;">Building learning communities in the whole CALABARZON Region that pursue local governance excellence through knowledge sharing</p>
                    <a href="about.php" class="btn btn-primary btn-lg mt-3 scrollTo" style="background-color: #c30718; border-color:#ad0735;">Who Are We</a>
                </header>
              </div>
              <div class="col-md-5">
                <div class="py-5">
                   <div class="form-box">

                    <?php 
                    if (isset($_SESSION['id'])) 
                    {
                      $selectUser = ' SELECT `id`, `lastname`, `firstname`, `middlename`, `address`, `mobile`, `birthday`, `username`, `password`, `status`, `dateUploaded`, `borrowerId`, `email` FROM `tbl_user` WHERE `id` = "'.$_SESSION['id'].'" ';
                      $execUser = $conn->query($selectUser);
                      $resUser = $execUser->fetch_assoc();

                      ?>
                     <span style="font-family:monospace; font-size:20px;">Welcome</span><br>
                      <img src="images/attachedagency_dilgcentral.png" alt="" width="70">
                      <p>User ID: <b style="color:red;"><?php echo $resUser['borrowerId']; ?></b></p>
                      <h5 class="mt-3"><?php echo $resUser['lastname'].', '.$resUser['firstname'].' '.$resUser['middlename']; ?></h5>
                      <h6 class="mb-3"><?php echo $resUser['address'];?></h6>


                      

                      <?php 
                      $countRequest = ' SELECT COUNT(`id`) as totalRequest FROM `tbl_request` WHERE `requestorId` = "'.$resUser['borrowerId'].'" ';
                      $execRequest = $conn->query($countRequest);
                      $resRequest = $execRequest->fetch_assoc();
                       ?>



                      <button type="button" class="btn m-2 btn-warning text-white" data-toggle="modal" data-target="#modalRequest" data-toggle="tooltip" data-placement="top" title="Expert Requests"><i class="fa fa-paper-plane"></i><span class="badge badge-light btnBadge"><?php echo $resRequest['totalRequest']; ?></span></button>



                      <?php 
                      $countBorrowed = ' SELECT COUNT(`id`) as totalBorrowed FROM `tbl_downloads` WHERE `borrowerId` = "'.$resUser['borrowerId'].'" ';
                      $execBorrowed = $conn->query($countBorrowed);
                      $resBorrowed = $execBorrowed->fetch_assoc();
                       ?>

                      <button type="button" class="btn m-2 btn-success" data-toggle="modal" data-target="#modalLog" data-toggle="tooltip" data-placement="top" title="Borrowed Product Logs"><i class="fa fa-list"></i><span class="badge badge-light btnBadge"><?php echo $resBorrowed['totalBorrowed']; ?></span></button>

                      <button type="button" class="btn m-2 btn-primary" data-toggle="modal" data-target="#modalUpdate" data-toggle="tooltip" data-placement="top" title="Update Profile"><i class="fa fa-user-cog"></i></button>
                      <a href="function php/logout.php" class="btn m-2 btn-danger" data-toggle="tooltip" data-placement="top" title="Logout"><i class="fa fa-sign-out-alt"></i></a>


                      <span id="clock" style="font-family: monospace; font-size:16px;"></span>



                      <!-------------------------------- MODAL UPDATE PROFILE ----------------------------->
                     
                      <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdate" aria-hidden="true">
                        <div class="modal-dialog modal-md" role="document">
                          <div class="modal-content">
                            <div class="modal-header text-white" style="background-color: #007bff;">
                              <h5 class="modal-title" style="margin: 0 auto;" id="exampleModalLabel">Update Profile Information</h5>
                              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button> -->
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-sm-4">
                                  Lastname:
                                  <input type="text" class="form-control" id="updateLastname" value="<?php echo $resUser['lastname']; ?>">
                                </div>
                                <div class="col-sm-4">
                                  Firstname:
                                  <input type="text" class="form-control" id="updateFirstname" value="<?php echo $resUser['firstname']; ?>">
                                </div>
                                <div class="col-sm-4">
                                  Middlename:
                                  <input type="text" class="form-control" id="updateMiddlename" value="<?php echo $resUser['middlename']; ?>">
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-sm-6">
                                  Address:
                                  <input type="text" class="form-control" id="updateAddress" value="<?php echo $resUser['address']; ?>">
                                </div>
                                <div class="col-sm-6">
                                  Contact Number:
                                  <input type="text" class="form-control" id="updateMobile" value="<?php echo $resUser['mobile']; ?>">
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-sm-6">
                                  Birthday:
                                  <?php 
                                  $phpdate = strtotime( $resUser['birthday'] );
                                  $mysqldate = date( 'Y-m-d', $phpdate );
                                   ?>
                                  <input type="date" class="form-control" id="updateBirthday" value="<?php echo $mysqldate; ?>">
                                </div>
                                <div class="col-sm-6">
                                  Email:
                                  <input type="email" class="form-control" id="updateEmail" value="<?php echo $resUser['email']; ?>">
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-sm-4">
                                  Username:
                                  <input type="text" class="form-control" id="updateUsername" value="<?php echo $resUser['username']; ?>">
                                </div>
                                <div class="col-sm-4">
                                  Password:
                                  <input type="password" class="form-control" id="updatePassword">
                                </div>
                                <div class="col-sm-4">
                                  Confirm Password:
                                  <input type="password" class="form-control" id="confirmPassword">
                                </div>
                              </div>
                             
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary" id="btnUpdateProfile">Update</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-------------------------------- MODAL UPDATE PROFILE ----------------------------->



                      <!-------------------------------- MODAL VIEW BORROWED LOGS ----------------------------->
                     
                      <div class="modal fade" id="modalLog" tabindex="-1" role="dialog" aria-labelledby="modalLog" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header text-white" style="background-color: #28a745;">
                              <h5 class="modal-title" style="margin: 0 auto;" id="exampleModalLabel">Borrowed Product Logs</h5>
                              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button> -->
                            </div>
                            <div class="modal-body">
                              <button type="button" class="btn float-right mb-3" data-dismiss="modal">X</button>
                              <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Produt Name</th>
                                    <th>Date Borrowed</th>
                                  </tr>
                                </thead>
                                <?php 
                                $x = 1;
                                $selectLog = ' SELECT `id`, `bookId`, `downloaderId`, `dateDownloaded` FROM `tbl_downloads` WHERE `downloaderId` = "'.$_SESSION['id'].'" ORDER BY `dateDownloaded` DESC ';
                                $execLog = $conn->query($selectLog);
                                while ($resLog = $execLog->fetch_assoc()) 
                                {
                                  $phpdate = strtotime( $resLog['dateDownloaded'] );
                                  $mysqldate = date( 'M d, Y', $phpdate );

                                  $selectBook = ' SELECT `id`, `filename`, `title`, `status`, `dateUploaded` FROM `tbl_knowledge_products` WHERE `id` = "'.$resLog['bookId'].'" ';
                                  $execBook = $conn->query($selectBook);
                                  $resBook = $execBook->fetch_assoc();

                                 ?>
                                 <tbody>
                                   <tr>
                                     <td><?php echo $x; ?></td>
                                     <td><?php echo $resBook['filename']; ?></td>
                                     <td><?php echo $mysqldate; ?></td>
                                   </tr>
                                 </tbody>
                               <?php $x++; } ?>

                              </table>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-------------------------------- MODAL VIEW BORROWED LOGS ----------------------------->



                      <!-------------------------------- MODAL VIEW EXPERT REQUEST ----------------------------->
                     
                      <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalLog" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header text-white" style="background-color: #ffc107;">
                              <h5 class="modal-title" style="margin: 0 auto;" id="exampleModalLabel">Expert Requests</h5>
                              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button> -->
                            </div>
                            <div class="modal-body">
                              <button type="button" class="btn float-right mb-3" data-dismiss="modal">X</button>
                              <table class="table table-hover table-bordered">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Expert</th>
                                    <th>Requested Expertise</th>
                                    <th>Remarks</th>
                                    <th>Date Requested</th>
                                  </tr>
                                </thead>
                                <?php 
                                $x = 1;
                                $selectRequest = ' SELECT `id`, `expertId`, `expertName`, `expertExpertise`, `requestorId`, `requestorName`, `requestorAddress`, `dateRequested`, `reason`, `requested_expertise` FROM `tbl_request` WHERE `requestorId` = "'.$_SESSION['id'].'" ORDER BY `dateRequested` DESC ';
                                $execRequest = $conn->query($selectRequest);
                                while ($resRequest = $execRequest->fetch_assoc()) 
                                {
                                  $phpdate = strtotime( $resRequest['dateRequested'] );
                                  $mysqldate = date( 'M d, Y', $phpdate );

                                 ?>
                                 <tbody>
                                   <tr>
                                     <td><?php echo $x; ?></td>
                                     <td><?php echo $resRequest['expertName'].'<br><span style="font-size:11px;">'.$resRequest['expertExpertise'].'</span>'; ?></td>
                                     <td><?php echo $resRequest['requested_expertise']; ?></td>
                                     <td><?php echo $resRequest['reason']; ?></td>
                                     <td><?php echo $mysqldate; ?></td>
                                   </tr>
                                 </tbody>
                               <?php $x++; } ?>

                              </table>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-------------------------------- MODAL VIEW EXPERT REQUEST ----------------------------->


                    <?php
                    }

                    else
                    {
                     ?>

                      <h3 class="h4 text-black mb-4 text-center">Login Now</h3>
                      <span style="color:red;"><i><?php echo $auth; ?></i></span>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" id="username">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" id="password">
                      </div>
                      <div class="form-group" align="center">
                        <input type="submit" class="btn btn-primary btn-pill" value="Login" id="btnLogin" style="background-color: #c30718; border-color:#ad0735;"><br><br>
                        <button onclick="modalRegister();" style="background-color: transparent; border:0px; color: blue; cursor: pointer;"><i>Register new account</i></button>
                     
                      </div>
                      <hr>
                      <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" style="background-color: transparent; border:0px; color: blue; cursor: pointer;">Forgot Password?</button>
                    <?php } ?>

                    </div>
                </div>
              </div>


            <!-------------------------------- MODAL RESET PASSWORD ----------------------------->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <center>
                      Username:
                      <input type="text" class="form-control" id="passwordUsername" style="width: 70%;">
                      <br>
                      Enter Email:
                      <input type="email" class="form-control" id="passwordEmail" style="width: 70%;">
                    </center>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" id="btnUpdatePassword">Update <i class="fa fa-paper-plane"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-------------------------------- MODAL RESET PASSWORD ----------------------------->

            <div id="modalRegister" data-izimodal-group="group1"></div>

            </div>
            <!-- <div class="row"> -->
          </div>
      </div>

    </div>
      <hr>

    <?php include 'includes/footer.php'; ?>

    

    <?php include 'includes/js_includes.php'; ?>

    <script type="text/javascript">

      
      $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
      });

      $('#navHome').addClass('active');

      $('#btnLogin').click(function(){
        var username = $('#username').val();
        var password = $('#password').val();

        username = username.trim();
        password = password.trim();



        if ( username == '' || password == '' ) 
        {
          swal('Incomplete Data!','Please fill up required fields','error');
        }
        else
        {
          var other_data = 'username='+username+'&password='+password;
            // alert(other_data);
            $.ajax({
              url:"function php/login.php?"+other_data,  
              method:"POST",  
              dataType:"text",
              cache:false,     
              beforeSend:function() {
                swal({
                position: "top-end",
                type: "info",
                title: "Processing Data...",
                showConfirmButton: false,
                });
                       
              },  
              error:function(data){

                             
              }, 
              success:function(data)
              {
                swal.close();
                data = data.trim();
                // alert(data);
                if (data == 'error')
                {
                  swal('Invalid Username or Password!','Please check your details','error');
                }
                else if (data == 'admin') 
                {
                  // alert('admin');
                  window.location = 'admin/';
                }
                else
                {
                  // alert('user');
                  window.location = 'index.php';
                }
              }
            }); 
        }
      });

      function modalRegister()
      {
        $('#modalRegister').iziModal({
        title: 'Fill Up Form',
        headerColor: '#192f72',
        width: 970,
        iframe: true, 
        iframeHeight: 600, 
        iframeURL: 'register.php',
        // openFullscreen: true,
        closeOnEscape: false,
        closeButton: true
        // onClosed: function(){document.getElementById("viewer1").hidden=false;}
        });


        $('#modalRegister').iziModal('open', this); 
      }




      $('#btnUpdateProfile').click(function(){
        var updateLastname = $('#updateLastname').val();
        var updateFirstname = $('#updateFirstname').val();
        var updateMiddlename = $('#updateMiddlename').val();
        var updateAddress = $('#updateAddress').val();
        var updateMobile = $('#updateMobile').val();
        var updateBirthday = $('#updateBirthday').val();
        var updateUsername = $('#updateUsername').val();
        var updatePassword = $('#updatePassword').val();
        var confirmPassword = $('#confirmPassword').val();
        var updateEmail = $('#updateEmail').val();

        if ( updateLastname == '' || updateFirstname == '' || updateMiddlename == '' || updateAddress == '' || updateMobile == '' || updateBirthday == '' || updateUsername == '' || updateEmail == '' ) 
        {
          swal('Error','Please fill up required fields!','error');
        }
        else if ( updatePassword != confirmPassword ) 
        {
          swal('Error','Password do not match!','error');
        }
        else
        {
          var other_data = 'updateLastname='+updateLastname+'&updateFirstname='+updateFirstname+'&updateMiddlename='+updateMiddlename+'&updateAddress='+updateAddress+'&updateMobile='+updateMobile+'&updateBirthday='+updateBirthday+'&updateUsername='+updateUsername+'&updatePassword='+updatePassword+'&updateEmail='+updateEmail;
          // alert(other_data);
          
          $.ajax({
              url:"function php/updateProfile.php?"+other_data,  
              method:"POST",  
              dataType:"text",
              cache:false,     
              beforeSend:function() {
                swal({
                  position: "top-end",
                  type: "info",
                  title: "Processing Data...",
                  showConfirmButton: false,
                  });
                       
              },  
              error:function(data){

                             
              }, 
              success:function(data)
              {
                // alert(data);
                swal.close();
                if (data == 'error') 
                {
                  swal('User Already Exist!', 'Error', 'error');
                }
                else
                {
                  // alert(data); 
                  swal({
                  title: "Profile Successfully Updated!",
                  text: 'Success',
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

                
              }
            }); 
          //ajax end
        }
        // else
      });



      $('#btnUpdatePassword').click(function(){

        let passwordUsername = $('#passwordUsername').val();
        let passwordEmail = $('#passwordEmail').val();

        emailValidate = passwordEmail.indexOf("@");



        if (passwordUsername == '' || passwordEmail == '') 
        {
          swal('Error','Please Input Required Fields!','error');
        }
        else if (emailValidate < 0)
        {
          swal('Error','Please Input Valid Email!','error');
        }
        else
        {
          //confirmation start
          swal({
          title: "Are you sure?",
          text: "Send New Password to Email!",
          type: "question",
          showCancelButton: true,
          confirmButtonColor: "#5cb85c",
          cancelButtonColor: "#d9534f",
          confirmButtonText: '<span class="fa fa-check"></span>&nbspProceed',
          cancelButtonText: '<span class="fa fa-remove"></span>&nbspDecline',
          confirmButtonClass: "btn",
          cancelButtonClass: "btn"
          }).then((result) => {
          if (result.value) 
          {      
              //ajax start
              $.ajax({  
                 url:"function php/updatePasswordToEmail.php?passwordUsername="+passwordUsername+'&passwordEmail='+passwordEmail, 
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
                  if (data == 'error') 
                  {
                    swal('Error','Username and Email do not Match!','error');
                  }
                  else if (data == 'errorSending') 
                  {
                    swal('Error','There is a problem updating the password!','error');
                  }
                  else
                  {
                    swal({
                    title: "Password Successfully Sent to Email!",
                    text: 'Please Check Your Email',
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
                  }//else
   

                  }//success
                        
                });  
                //ajax end 
          }
          });
          //confirmation end
        }



      });


  $('#username').keypress(function(e) {
    var key = e.which;
    if (key == 13) // the enter key code
    {
      $('#btnLogin').click();
      return false;
    }
  });

  $('#password').keypress(function(e) {
    var key = e.which;
    if (key == 13) // the enter key code
    {
      $('#btnLogin').click();
      return false;
    }
  });


    </script>



  </body>
</html>