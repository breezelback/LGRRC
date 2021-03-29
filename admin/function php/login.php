<?php 
session_start();
include ('conn.php');


$username = $conn -> real_escape_string($_GET['username']);
$password = $conn -> real_escape_string($_GET['password']);


$sqlSelect = ' SELECT `usertype` FROM `tbl_user` WHERE `username` = "'.$username.'" AND `password` = "'.$password.'" ';
$execSelect = $conn->query($sqlSelect);

if ($execSelect->num_rows > 0) 
{
	$result = $execSelect->fetch_assoc();
	if ($result['usertype'] == 'admin') 
	{
		$_SESSION['usertype'] = $result['usertype'];
		echo $_SESSION['usertype'];
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