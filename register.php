
    <?php include 'includes/css_includes.php'; ?><br><br>
<center>
  <h3 style="font-family: cursive;">Registration</h3><hr>
  <!-- <div class="loginForm"> -->

    <div class="container" style="font-family: monospace;">

      <div class="row">
        <div class="col-md-4">
          Lastname
          <input type="text" class="form-control" name="" id="lastname">
        </div>
        <div class="col-md-4">
          Firstname
          <input type="text" class="form-control" name="" id="firstname">
        </div>
        <div class="col-md-4">
          Middlename
          <input type="text" class="form-control" name="" id="middlename">
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-6">
          Address
          <input type="text" class="form-control" name="" id="address">
        </div>
        <div class="col-md-6">
          Mobile
          <input type="text" class="form-control" name="" id="mobile">
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-6">
          Birthday
          <input type="date" class="form-control" name="" id="birthday">
        </div>
        <div class="col-md-6">
          Email Address
          <input type="email" class="form-control" name="" id="email">
        </div>
      </div>

      <br><hr>
      <div class="row">
        <div class="col-md-4">
          Username
          <input type="text" class="form-control" name="" id="username">
        </div>
        <div class="col-md-4">
          Password
          <input type="Password" class="form-control" name="" id="password">
        </div>
        <div class="col-md-4">
          Confirm Password
          <input type="Password" class="form-control" name="" id="confirmPassword">
        </div>
      </div>

    </div>
    <!-- <div class="container"> -->
<hr>
    <br>
    <button class="btn btn-lg btn-primary" id="btnRegister">Proceed <i class="fa fa-check"></i></button>
  <!-- </div> -->
  <br>
</center>


<?php include 'includes/js_includes.php'; ?>
<script type="text/javascript">

$('#btnRegister').click(function(){
  
  var lastname = $('#lastname').val();
  var firstname = $('#firstname').val();
  var middlename = $('#middlename').val();
  var address = $('#address').val();
  var mobile = $('#mobile').val();
  var birthday = $('#birthday').val();
  var username = $('#username').val();
  var password = $('#password').val();
  var confirmPassword = $('#confirmPassword').val();
  var email = $('#email').val();


  var passwordLength = password.length;

  if ( lastname == '' || firstname == '' || middlename == '' || address == '' || mobile == '' || birthday == '' || username == '' || password == '' || confirmPassword == '' || email == '' ) 
  {
    swal('Incomplete Data!','Please fill up required fields','error');
  }
  else
  {
    if ( password != confirmPassword ) 
    {
      swal('Password do not match!','Please check your password','error');
    }
    else if (passwordLength < 6 )
    {
      swal('Password too short!','Must be more than 6 characters','error');
    }
    else
    {
      var other_data = 'lastname='+lastname+'&firstname='+firstname+'&middlename='+middlename+'&address='+address+'&mobile='+mobile+'&birthday='+birthday+'&username='+username+'&password='+password+'&email='+email;
      // alert(other_data);
      $.ajax({
        url:"function php/insertUser.php?"+other_data,  
        method:"POST",  
        dataType:"text",
        cache:false,     
        beforeSend:function() {

                 
        },  
        error:function(data){

                       
        }, 
        success:function(data)
        {
          // alert(data);
          if (data == 'error') 
          {
            swal('Username Exist!','Please select other username','warning');
            document.getElementById("username").style.borderColor = "red";
          }
          else
          {
            swal({
            title: "Registration Complete!",
            text: data,
            type: "success",
            showCancelButton: false,
            confirmButtonColor: "#5cb85c",
            confirmButtonText: '<span class="fa fa-check"></span>&nbspProceed',
            confirmButtonClass: "btn"
            }).then((result) => {
              if (result.value) {
                // window.location = 'index.php';
                window.location.reload();
              }
            });
          }

        }
      }); 
      //ajax end
    }
  }

});


$('#username').click(function(){
  document.getElementById("username").style.borderColor = "#ced4da";
});







</script>