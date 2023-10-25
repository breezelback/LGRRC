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
  <?php include 'includes/css_includes.php'; ?>
  <style>
     html, body{
   
   font-family: Poppins, Helvetica, "sans-serif";
   -webkit-font-smoothing: antialiased;
}
    .btn .btnBadge {
      background-color: red;
      color: white;
      margin-top: 330px;
      position: absolute;
      margin-left: -34px;
    }
    #kbox1 {
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      border: 5px solid #3c95d9;
      background-color: #fff;
      position: fixed;
    }
    #ybox1 {
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      border: 5px solid #3c95d9;
      background-color: #fff;
      position: fixed;
    }


    #fbox1 {
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      border: 5px solid #3c95d9;
      background-color: #fff;
      position: fixed;
    }
    #ybox2 {
      overflow: hidden;
      text-align: left;
    }
    #kbox2 {
      overflow: hidden;
      text-align: left;
    }
    #fbox2 {
      overflow: hidden;
      text-align: left;
    }
    #ybox1 img {
      position: absolute;
      top: 0px;
      cursor: pointer;
      border: 0;
      z-index: 10000;
    }
    #kbox1 img {
      position: absolute;
      top: 0px;
      cursor: pointer;
      border: 0;
      z-index: 10000;
    }
    #fbox1 img {
      position: absolute;
      top: 0px;
      cursor: pointer;
      border: 0;
      z-index: 10000;
    }
    #ybox1 iframe {
      border: 0px;
      overflow: hidden;
      position: absolute;
      width: 100%;
      height: 100%;
    }
    #kbox1 iframe {
      border: 0px;
      overflow: hidden;
      position: absolute;
      width: 100%;
      height: 100%;
    }
    #fbox1 iframe {
      border: 0px;
      overflow: hidden;
      position: absolute;
      width: 100%;
      height: 100%;
    }

    #sw_twitter_feeds_sidebar {

      position: relative;

    }

    #tbox1 {

      -webkit-border-radius: 5px;

      -moz-border-radius: 5px;

      border-radius: 5px;

      border: 5px solid #1da1f2;

      background-color: #fff;

      position: fixed;

    }

    #tbox2 {

      overflow: hidden;

      text-align: left;

    }

    #tbox1 img {

      position: absolute;

      top: 0px;

      cursor: pointer;

      border: 0;

      z-index: 10000;

    }

    #tbox1 iframe {

      border: 0px;

      overflow: hidden;

      position: absolute;

      width: 100%;

      height: 100%;

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
              <h2 class="display-6 headingText" style="padding-top: 15%;">Local Governance Regional Resource Center (LGRRC) CALABARZON</h2>
              <h1><b>E-LIBRARY SYSTEM</b></h1>
              <p class="lead mb-0" style="font-family: 'centuryGothic'; font-size:17px; color:#e8e7e7;">Building learning communities in the whole CALABARZON Region that pursue local governance excellence through knowledge sharing</p>
              <a href="about.php" class="btn btn-primary btn-lg mt-3 scrollTo" style="background-color: #c30718; border-color:#ad0735;">Who Are We</a>
            </header>
          </div>
          <div class="col-md-5">
            <div class="py-5">

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
  <div id="sw_facebook_likebox_sidebar">
    <div id="fbox1" style="top: 100px; z-index: 10000; right: -300px;">
      <div id="fobx2" style="text-align: left;width:290px;height:350px;">
        <a class="open" id="fblink" href="#"></a><img style="top: 0px;left:-50px;" src="https://calabarzon.dilg.gov.ph/modules/mod_sw_facebook_likebox_sidebar/assets/facebook-icon.png" alt="">
        <div id="fb-root" class=" fb_reset">
          <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
            <div></div>
          </div>
        </div>
        <script>
          (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));
        </script>
        <div class="fb-page fb_iframe_widget" data-href="http://www.facebook.com/dilgr4a" data-width="293" data-height="353" data-hide-cover="false" data-show-facepile="true" data-show-posts="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=290&amp;height=353&amp;hide_cover=false&amp;href=http%3A%2F%2Fwww.facebook.com%2Fdilgr4a&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=true&amp;width=293"><span style="vertical-align: bottom; width: 290px; height: 353px;"><iframe name="f1f35f42931a174" width="293px" height="353px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://web.facebook.com/v3.1/plugins/page.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df38ba659e135e84%26domain%3Dcalabarzon.dilg.gov.ph%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fcalabarzon.dilg.gov.ph%252Ff331744d48f4f84%26relation%3Dparent.parent&amp;container_width=290&amp;height=353&amp;hide_cover=false&amp;href=http%3A%2F%2Fwww.facebook.com%2Fdilgr4a&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=true&amp;width=293" style="border: none; visibility: visible; width: 290px; height: 353px;" class=""></iframe></span></div>
      </div>
    </div>
  </div>
  <div id="sw_twitter_feeds_sidebar">
    <div id="tbox1" style="top: 150px; z-index: 10000; right: -300px;">
      <div id="tobx2" style="text-align: left;width:290px;height:350px;">
        <a class="open" id="fblink" href="#"></a><img style="top: 0px;left:-50px;" src="https://calabarzon.dilg.gov.ph/modules/mod_sw_twitter_feeds_sidebar/assets/twitter-icon.png" alt="">
        <div class="twitter-timeline twitter-timeline-rendered" style="display: flex; width: 290px; max-width: 100%; margin-top: 0px; margin-bottom: 0px;"><iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="" style="position: static; visibility: visible; width: 290px; height: 350px; display: block; flex-grow: 1;" title="Twitter Timeline" src="https://syndication.twitter.com/srv/timeline-profile/screen-name/DILGR4A?dnt=false&amp;embedId=twitter-widget-0&amp;features=eyJ0ZndfdGltZWxpbmVfbGlzdCI6eyJidWNrZXQiOltdLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X2ZvbGxvd2VyX2NvdW50X3N1bnNldCI6eyJidWNrZXQiOnRydWUsInZlcnNpb24iOm51bGx9LCJ0ZndfdHdlZXRfZWRpdF9iYWNrZW5kIjp7ImJ1Y2tldCI6Im9uIiwidmVyc2lvbiI6bnVsbH0sInRmd19yZWZzcmNfc2Vzc2lvbiI6eyJidWNrZXQiOiJvbiIsInZlcnNpb24iOm51bGx9LCJ0ZndfZm9zbnJfc29mdF9pbnRlcnZlbnRpb25zX2VuYWJsZWQiOnsiYnVja2V0Ijoib24iLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X21peGVkX21lZGlhXzE1ODk3Ijp7ImJ1Y2tldCI6InRyZWF0bWVudCIsInZlcnNpb24iOm51bGx9LCJ0ZndfZXhwZXJpbWVudHNfY29va2llX2V4cGlyYXRpb24iOnsiYnVja2V0IjoxMjA5NjAwLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X3Nob3dfYmlyZHdhdGNoX3Bpdm90c19lbmFibGVkIjp7ImJ1Y2tldCI6Im9uIiwidmVyc2lvbiI6bnVsbH0sInRmd19kdXBsaWNhdGVfc2NyaWJlc190b19zZXR0aW5ncyI6eyJidWNrZXQiOiJvbiIsInZlcnNpb24iOm51bGx9LCJ0ZndfdXNlX3Byb2ZpbGVfaW1hZ2Vfc2hhcGVfZW5hYmxlZCI6eyJidWNrZXQiOiJvbiIsInZlcnNpb24iOm51bGx9LCJ0ZndfdmlkZW9faGxzX2R5bmFtaWNfbWFuaWZlc3RzXzE1MDgyIjp7ImJ1Y2tldCI6InRydWVfYml0cmF0ZSIsInZlcnNpb24iOm51bGx9LCJ0ZndfbGVnYWN5X3RpbWVsaW5lX3N1bnNldCI6eyJidWNrZXQiOnRydWUsInZlcnNpb24iOm51bGx9LCJ0ZndfdHdlZXRfZWRpdF9mcm9udGVuZCI6eyJidWNrZXQiOiJvbiIsInZlcnNpb24iOm51bGx9fQ%3D%3D&amp;frame=false&amp;hideBorder=true&amp;hideFooter=true&amp;hideHeader=false&amp;hideScrollBar=true&amp;lang=en&amp;maxHeight=350px&amp;origin=https%3A%2F%2Fcalabarzon.dilg.gov.ph%2F&amp;sessionId=3d932a0c7cd919710409dc78a75e8ff13c4fcf9e&amp;showHeader=true&amp;showReplies=false&amp;theme=light&amp;transparent=false&amp;widgetsVersion=01917f4d1d4cb%3A1696883169554"></iframe></div>

        <script async="" src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
    </div>

  </div>
  <div id="sw_tiktok_likebox_sidebar">
    <div id="kbox1" style="top: 200px; z-index: 10000; right: -300px;">
      <div id="kobx2" style="text-align: left;width:290px;height:350px;">
        <a class="open" id="fblink" href="#"></a><img style="top: 0px;left:-50px;" src="images/side_banner/tiktok-icon.png" alt="">
        <div id="fb-root" class=" fb_reset">
          <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
            <div>
            </div>
          </div>
        </div>
        <iframe src="https://www.tiktok.com/embed/@dilgr4a" frameborder="0"></iframe>

      </div>
    </div>
  </div>
  <div id="sw_youtube_likebox_sidebar">
    <div id="ybox1" style="top: 250px; z-index: 10000; right: -300px;">
      <div id="yobx2" style="text-align: left;width:290px;height:350px;">
        <a class="open" id="fblink" href="#"></a><img style="top: 0px;left:-50px;" src="images/side_banner/youtube-icon.png" alt="">
        <div id="fb-root" class=" fb_reset">
          <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
            <div>
            </div>
          </div>
        </div>
        <iframe src="https://www.youtube.com/embed/5dAXzGk1P-o?si=zEojqbZv5Hmf6-rM" frameborder="0"></iframe>



      </div>
    </div>
  </div>


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