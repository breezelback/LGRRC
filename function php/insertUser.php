<?php 
include ('conn.php');


$lastname = $_GET['lastname'];
$firstname = $_GET['firstname'];
$middlename = $_GET['middlename'];
$address = $_GET['address'];
$mobile = $_GET['mobile'];
$birthday	 = $_GET['birthday'];
$username = $_GET['username'];
$password = $_GET['password'];
$email = $_GET['email'];



$sqlSelect = ' SELECT `username` FROM `tbl_user` WHERE `username` = "'.$username.'" ';
$execSelect = $conn->query($sqlSelect);

$sqlSelectEmail = ' SELECT `username` FROM `tbl_user` WHERE `email` = "'.$email.'" ';
$execSelectEmail = $conn->query($sqlSelectEmail);

if ($execSelect->num_rows > 0) 
{
	echo "error";
}
else if ($execSelectEmail->num_rows > 0) 
{
	echo "errorEmail";
}
else
{
	$sql = ' INSERT INTO `tbl_user`( `lastname`, `firstname`, `middlename`, `address`, `mobile`, `birthday`, `username`, `password`, `status`, `dateUploaded`, `usertype`, `email` ) VALUES ( "'.$lastname.'", "'.$firstname.'", "'.$middlename.'", "'.$address.'", "'.$mobile.'", "'.$birthday.'", "'.$username.'", "'.$password.'", "approved", NOW(), "user", "'.$email.'" ) ';

	$exec = $conn->query($sql);
	echo "Success";
	$last_id = $conn->insert_id;
	$random = rand(100,1000);

	$borrowerId = $last_id.'-'.$random;


	$update = ' UPDATE `tbl_user` SET `borrowerId` = "'.$borrowerId.'" WHERE `id` = "'.$last_id.'" ';
	$execUpdate = $conn->query($update);

	// $selectId = ' SELECT `id` FROM `tbl_user` ORDER BY `id` DESC ';
	// $execId = $

}


 ?>