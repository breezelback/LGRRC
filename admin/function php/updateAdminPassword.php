<?php 
session_start();
include 'conn.php';
$updatePassword = $_GET['updatePassword'];

$updatePassword = password_hash($updatePassword, PASSWORD_DEFAULT);


$sql = ' UPDATE `tbl_user` SET `password`="'.$updatePassword.'" WHERE `id` = '.$_SESSION['id'].' ';

$execute = $conn->query($sql);
echo "Success";
 ?>