<?php 
session_start();
include 'conn.php';

$updateLastname = $_GET['updateLastname'];
$updateFirstname = $_GET['updateFirstname'];
$updateMiddlename = $_GET['updateMiddlename'];
$updateAddress = $_GET['updateAddress'];
$updateMobile = $_GET['updateMobile'];
$updateBirthday = $_GET['updateBirthday'];
$updateUsername = $_GET['updateUsername'];
$updatePassword = $_GET['updatePassword'];


$sqlSelect = ' SELECT `username` FROM `tbl_user` WHERE `username` = "'.$updateUsername.'" AND `id` != "'.$_SESSION['id'].'" ';
$execSelect = $conn->query($sqlSelect);

if ($execSelect->num_rows > 0) 
{
	echo "error";
}
else
{
	$sql = ' UPDATE `tbl_user` SET `lastname`= "'.$updateLastname.'", `firstname`= "'.$updateFirstname.'", `middlename`= "'.$updateMiddlename.'", `address`= "'.$updateAddress.'", `mobile`= "'.$updateMobile.'", `birthday`= "'.$updateBirthday.'", `username`= "'.$updateUsername.'", `password`= "'.$updatePassword.'"  WHERE `id` = "'.$_SESSION['id'].'" ';
	$exec = $conn->query($sql);

	echo "success";

}





 ?>