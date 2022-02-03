<?php 
session_start();
include ('conn.php');


$username = $conn -> real_escape_string($_GET['username']);
$password = $conn -> real_escape_string($_GET['password']);


$selectUsername = ' SELECT `password` FROM `tbl_user` WHERE `username` = "'.$username.'" ';
$execSelectUsername = $conn->query($selectUsername);

if ($execSelectUsername->num_rows > 0) 
{
	$resultUser = $execSelectUsername->fetch_assoc();
	$hashPassword = $resultUser['password'];

	if (password_verify($password, $hashPassword)) 
	{
	    $sqlSelect = ' SELECT `id`, `lastname`, `firstname`, `middlename`, `address`, `mobile`, `birthday`, `username`, `password`, `status`, `dateUploaded`, `borrowerId`, `usertype` FROM `tbl_user` WHERE `username` = "'.$username.'" AND `status` = "approved"';
		$execSelect = $conn->query($sqlSelect);
		$result = $execSelect->fetch_assoc();

		if ($result['usertype'] == 'admin') 
		{
			$_SESSION['usertype'] = $result['usertype'];
			echo "admin";
		}
		else
		{
			$_SESSION['id'] = $result['id'];
			$_SESSION['lastname'] = $result['lastname'];
			$_SESSION['firstname'] = $result['firstname'];
			$_SESSION['middlename'] = $result['middlename'];
			$_SESSION['username'] = $result['username'];
			$_SESSION['address'] = $result['address'];
			$_SESSION['mobile'] = $result['mobile'];
			$_SESSION['birthday'] = $result['birthday'];
			$_SESSION['password'] = $result['password'];
			$_SESSION['borrowerId'] = $result['borrowerId'];
			// header('location: ../browse_books.php');
			echo "success";
		}


		//insert to log
		$sql = ' INSERT INTO `tbl_log`(`login_id`, `login_date`) VALUES ('.$result['id'].', NOW()) ';
		$conn->query($sql);

	}
	else 
	{
	    echo "error";
	}

}
else
{
	echo "error";

}


 ?>