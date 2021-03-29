<?php
session_start();




?>
<!DOCTYPE html>
<html lang="en">
<head>


	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
    <title>LGRRC</title>

	
    <?php include 'includes/css_includes.php'; ?>
	<link rel="stylesheet" type="text/css" href="styles/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form validate-form">
					<center>
					<img  src="../images/attachedagency_dilgcentral.png" style="border-radius: 50%;height: 180px; width: 180px; margin-bottom:10px;	" >
					<img  src="../images/lgrc_logo.png" style="border-radius: 50%;height: 180px; width: 180px; margin-bottom:10px;	" >
				</center>
					<span class="login100-form-title p-b-26 mb-5">
						LGRRC ADMINISTRATOR LOGIN
					</span>
						

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" id="username" placeholder="Username">
						<!-- <span class="focus-input100" data-placeholder="Username"></span> -->
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass" id="btnShowPass">
							<i class="fa fa-eye" id="spanEye"></i>
						</span>

						<!-- <span class="btn-show-pass" id="btnShowPass">
							<i class="fa fa-eye-slash"></i>
						</span> -->

						<input class="input100" type="password" name="pass" id="password" placeholder="Password">

						<!-- <span class="focus-input100" data-placeholder="Password"></span> -->
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn" ></div>
							<button class="login100-form-btn " id="btn_login">
								Login
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<!-- Button trigger modal -->

	

<?php include 'includes/js_includes.php' ?>
<script type="text/javascript">
var clockElement = document.getElementById('clock');




//----------------------------------------------LOGIN---------------------------------------------------


$('#btn_login').click(function(){
	var username = $('#username').val();
	var password = $('#password').val();
	if (username =='' || password == '') 
	{
		swal('Please Input Required Fields','Error','error');
	}
	else
	{
		var other_data = 'username='+username+'&password='+password;
      	$.ajax({
        url:"function php/login.php?"+other_data,  
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
            swal('Invalid Username or Password!','Please check your details','error');
          }
          else
          {
            window.location = 'index.php';
          }
        }
      }); 
	}
});




$('#btnShowPass').click(function(){

	var className = $('#spanEye').attr('class');
	// alert(className);
	if (className == 'fa fa-eye') 
	{
		$('#spanEye').removeClass('fa-eye');
		$('#spanEye').addClass('fa-eye-slash');
		document.getElementById('password').type = 'text';
	}
	else
	{
		$('#spanEye').removeClass('fa-eye-slash');
		$('#spanEye').addClass('fa-eye');
		document.getElementById('password').type = 'password';
	}


});





</script>
</body>
</html>
