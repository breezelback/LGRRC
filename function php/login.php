<?php 
session_start();
include ('conn.php');


$username = $conn -> real_escape_string($_GET['username']);
$password = $conn -> real_escape_string($_GET['password']);

$sqlSelect = ' SELECT `id`, `lastname`, `firstname`, `middlename`, `address`, `mobile`, `birthday`, `username`, `password`, `status`, `dateUploaded`, `borrowerId` FROM `tbl_user` WHERE `username` = "'.$username.'" AND `password` = "'.$password.'" AND `status` = "approved" AND `usertype` != "admin" ';
$execSelect = $conn->query($sqlSelect);

if ($execSelect->num_rows > 0) 
{
	$result = $execSelect->fetch_assoc();
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
else
{
	echo "error";

}


 ?>