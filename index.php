<?php
session_start();

if (isset($_GET['auth'])) {
  $auth = 'Please login first!';
} else {
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
  <link rel="stylesheet" href="includes/banner.css">

  <?php include 'includes/css_includes.php'; ?>
<style>
.bgImage 
{
  background-image: url(images/LGRC_Static.png) !important; 
  background-position: 50% -25px;
  background-size: cover;
  margin: 0;
  text-align: center;
  box-sizing: border-box;
  -webkit-animation: slide 30s linear infinite;
  height: auto !important;

}
p{
  text-align:justify;
  text-indent: 15px;

}
ol > li {
  text-align: left;
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

          <div class="col-lg-12 mb-8 text-white">
            <!-- <header class="py-5 mt-5"> -->
            <header>
              <h2 data-aos="fade-up" data-aos-duration="1500" class="display-6 headingText typing-text" style="padding-top:5%;">Local Governance Regional Resource Center (LGRRC) CALABARZON</h2>
              <h1 data-aos="fade-up" data-aos-duration="1500" ><b>E-LIBRARY SYSTEM</b></h1>
              <p data-aos="fade-up" data-aos-duration="1500" class="lead mb-0 typing-text" style="font-family: 'centuryGothic'; font-size:16px; color:#e8e7e7;">Building learning communities in the whole CALABARZON Region that pursue local governance excellence through knowledge sharing</p>
            </header>

          </div>
          <?php include 'base_panel1.html.php';?>
          <div class="col-lg-12 text-white">
          <p data-aos="fade-up" data-aos-duration="1500">LGRRC IV-A provides avenues for effective coordination and collaboration with all stakeholders through the conduct of conferences, meetings, and forums to discuss relevant issues and concerns that may hinder the delivery of quality service to its clientele.</p>

    <p data-aos="fade-up" data-aos-duration="1500">As a physical facility, LGRRC IV-A maintains libraries and knowledge product corners as repositories of valuable knowledge materials that may be used for research development and references in cognizance of its role as the promoter of a culture of learning and continuous capacity enhancement. In addition, LGRRC IV-A has the capacity to produce newsletters, manuals, modules, brochures, flyers, and other publications.</p>

    <p data-aos="fade-up" data-aos-duration="1500">As a virtual facility, LGRRC IV-A maintains the DILG-LGRRC website, <a href="http://www.calabarzon.dilg.gov.ph">www.calabarzon.dilg.gov.ph</a>, performing the following functions:</p>
    <ol data-aos="fade-up" data-aos-duration="1500">
        <li>publishing tool that promotes all LGRRC activities;</li>
        <li>marketing tool that publicizes its services and products;</li>
        <li>work tool that allows the exchange of information with all stakeholders.</li>
    </ol>
    <p data-aos="fade-up" data-aos-duration="1500">The website displays all activities of the Department as well as the programs, projects, activities, and updates of the LGRRC-MSAC. It also provides e-books and other e-references that may be downloaded by clients and visitors. A variety of knowledge products and materials are compiled in the LGRRC Menu under the e-library corner. The website is maintained and regularly updated by the Social Media Team in the Region and the Provinces.</p>

    <p data-aos="fade-up" data-aos-duration="1500">LGRRC IV-A maximizes the use of computer-mediated tools through its social media accounts on Facebook, Instagram, and Twitter. The use of social media promotes real-time reporting of updates and other relevant information to the public.</p>

    <p data-aos="fade-up" data-aos-duration="1500">To introduce and popularize its products and services, an LGRRC booth/standee shall be set up during major activities within the Region. Links of MSAC members in the DILG LGRRC website will also be instituted. This will showcase various knowledge products and services provided.</p>

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

  <?php include 'social_media.php'; ?>


  <?php include 'includes/footer.php'; ?>



  <?php include 'includes/js_includes.php'; ?>

  <script type="text/javascript">
    $(document).ready(function() {
      jQuery("#fbox1").hover(function() {
          jQuery('#fbox1').css('z-index', 101009);
          jQuery(this).stop(true, false).animate({
            right: 0
          }, 500);
        },
        function() {
          jQuery('#fbox1').css('z-index', 10000);
          jQuery("#fbox1").stop(true, false).animate({
            right: -300
          }, 500);
        });

      jQuery("#ybox1").hover(function() {
          jQuery('#ybox1').css('z-index', 101009);
          jQuery(this).stop(true, false).animate({
            right: 0
          }, 500);
        },
        function() {
          jQuery('#ybox1').css('z-index', 10000);
          jQuery("#ybox1").stop(true, false).animate({
            right: -300
          }, 500);
        });

      jQuery("#kbox1").hover(function() {
          jQuery('#kbox1').css('z-index', 101009);
          jQuery(this).stop(true, false).animate({
            right: 0
          }, 500);
        },
        function() {
          jQuery('#kbox1').css('z-index', 10000);
          jQuery("#kbox1").stop(true, false).animate({
            right: -300
          }, 500);
        });


      jQuery("#tbox1").hover(function() {
          jQuery('#tbox1').css('z-index', 101009);
          jQuery(this).stop(true, false).animate({
            right: 0
          }, 500);
        },
        function() {
          jQuery('#tbox1').css('z-index', 10000);
          jQuery("#tbox1").stop(true, false).animate({
            right: -300
          }, 500);
        });
      $('[data-toggle="tooltip"]').tooltip();
    });

    $('#navHome').addClass('active');

    $('#btnLogin').click(function() {
      var username = $('#username').val();
      var password = $('#password').val();

      username = username.trim();
      password = password.trim();



      if (username == '' || password == '') {
        swal('Incomplete Data!', 'Please fill up required fields', 'error');
      } else {
        var other_data = 'username=' + username + '&password=' + password;
        // alert(other_data);
        $.ajax({
          url: "function php/login.php?" + other_data,
          method: "POST",
          dataType: "text",
          cache: false,
          beforeSend: function() {
            swal({
              position: "top-end",
              type: "info",
              title: "Processing Data...",
              showConfirmButton: false,
            });

          },
          error: function(data) {


          },
          success: function(data) {
            swal.close();
            data = data.trim();
            // alert(data);
            if (data == 'error') {
              swal('Invalid Username or Password!', 'Please check your details', 'error');
            } else if (data == 'admin') {
              // alert('admin');
              window.location = 'admin/';
            } else {
              // alert('user');
              window.location = 'index.php';
            }
          }
        });
      }
    });

    function modalRegister() {
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




    $('#btnUpdateProfile').click(function() {
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

      if (updateLastname == '' || updateFirstname == '' || updateMiddlename == '' || updateAddress == '' || updateMobile == '' || updateBirthday == '' || updateUsername == '' || updateEmail == '') {
        swal('Error', 'Please fill up required fields!', 'error');
      } else if (updatePassword != confirmPassword) {
        swal('Error', 'Password do not match!', 'error');
      } else {
        var other_data = 'updateLastname=' + updateLastname + '&updateFirstname=' + updateFirstname + '&updateMiddlename=' + updateMiddlename + '&updateAddress=' + updateAddress + '&updateMobile=' + updateMobile + '&updateBirthday=' + updateBirthday + '&updateUsername=' + updateUsername + '&updatePassword=' + updatePassword + '&updateEmail=' + updateEmail;
        // alert(other_data);

        $.ajax({
          url: "function php/updateProfile.php?" + other_data,
          method: "POST",
          dataType: "text",
          cache: false,
          beforeSend: function() {
            swal({
              position: "top-end",
              type: "info",
              title: "Processing Data...",
              showConfirmButton: false,
            });

          },
          error: function(data) {


          },
          success: function(data) {
            // alert(data);
            swal.close();
            if (data == 'error') {
              swal('User Already Exist!', 'Error', 'error');
            } else {
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



    $('#btnUpdatePassword').click(function() {

      let passwordUsername = $('#passwordUsername').val();
      let passwordEmail = $('#passwordEmail').val();

      emailValidate = passwordEmail.indexOf("@");



      if (passwordUsername == '' || passwordEmail == '') {
        swal('Error', 'Please Input Required Fields!', 'error');
      } else if (emailValidate < 0) {
        swal('Error', 'Please Input Valid Email!', 'error');
      } else {
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
          if (result.value) {
            //ajax start
            $.ajax({
              url: "function php/updatePasswordToEmail.php?passwordUsername=" + passwordUsername + '&passwordEmail=' + passwordEmail,
              method: "POST",
              //post:data  
              contentType: false,
              cache: false,
              processData: false,

              beforeSend: function() {

                swal({
                  position: "top-end",
                  type: "info",
                  title: "Processing Data...",
                  showConfirmButton: false,
                });

              },

              success: function(data) {
                swal.close();
                // alert(data);
                if (data == 'error') {
                  swal('Error', 'Username and Email do not Match!', 'error');
                } else if (data == 'errorSending') {
                  swal('Error', 'There is a problem updating the password!', 'error');
                } else {
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
                } //else


              } //success

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