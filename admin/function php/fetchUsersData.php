<?php 
require_once 'Connection.php';
// require "conn.php";
$users = getAllUsers();

function getAllUsers()
{
	$conn = new Connection();
	$data = [];
	$query = "SELECT `id`, `lastname`, `firstname`, `middlename`, `address`, `mobile`, DATE(`birthday`) as birthday, `username`, `password`, `status`, `dateUploaded`, `borrowerId`, `usertype`, `email` FROM `tbl_user` WHERE `usertype` = 'user' ORDER BY id DESC " ;

	$result = mysqli_query($conn->connect(), $query);
	while($row = mysqli_fetch_array($result)) 
	{
		$data[] = $row;
	}

	return $data;
}





