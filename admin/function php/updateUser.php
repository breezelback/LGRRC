<?php 
include 'conn.php';
$id = $_GET['id'];
$updateLastname = $_GET['updateLastname'];
$updateFirstname = $_GET['updateFirstname'];
$updateMiddlename = $_GET['updateMiddlename'];
$updateAddress = $_GET['updateAddress'];
$updateMobile = $_GET['updateMobile'];
$updateBirthday = $_GET['updateBirthday'];
$updateStatus = $_GET['updateStatus'];


$sql = ' UPDATE `tbl_user` SET `lastname` = "'.$updateLastname.'", `firstname` = "'.$updateFirstname.'", `middlename` = "'.$updateMiddlename.'", `address` = "'.$updateAddress.'", `mobile` = "'.$updateMobile.'", `birthday` = "'.$updateBirthday.'", `status` = "'.$updateStatus.'" WHERE `id` = "'.$id.'" ';

$execute = $conn->query($sql);
echo "Success";
 ?>