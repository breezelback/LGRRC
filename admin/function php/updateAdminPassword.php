<?php 
include 'conn.php';
$updatePassword = $_GET['updatePassword'];

$sql = ' UPDATE `tbl_user` SET `password`="'.$updatePassword.'" WHERE `usertype` = "admin" ';

$execute = $conn->query($sql);
echo "Success";
 ?>