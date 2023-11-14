<?php 
date_default_timezone_set('Asia/Manila');
session_start();
include ('conn.php');
$login_ip = $_SERVER['REMOTE_ADDR'];



$username = $_GET['username'];
$password = $_GET['password'];


$selectUsername = ' SELECT `password` FROM `tbl_user` WHERE `username` = "'.$username.'" ';

$execSelectUsername = $conn->query($selectUsername);

if ($execSelectUsername->num_rows > 0) 
{
	$resultUser = $execSelectUsername->fetch_assoc();
	$hashPassword = $resultUser['password'];
	if (isset($password))
	{
	    $sqlSelect = ' SELECT `id`, `lastname`, `firstname`, `middlename`, `address`, `mobile`, `birthday`, `username`, `password`, `status`, `dateUploaded`, `borrowerId`, `usertype` FROM `tbl_user` WHERE `username` = "'.$username.'" AND `status` = "approved"';
		
		$execSelect = $conn->query($sqlSelect);
		$result = $execSelect->fetch_assoc();

		if ($result['usertype'] == 'admin') 
		{
			$_SESSION['id'] = $result['id'];
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
		$sql = ' INSERT INTO `tbl_log`(`login_id`, `login_ip`, `login_date`) VALUES ('.$result['id'].', "'.$login_ip.'", NOW()) ';
		$conn->query($sql);

	}
	else 
	{
	    echo "gerror";
	}

}
else
{
	echo "errofffr";

}


 ?>