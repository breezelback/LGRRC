<?php 
include 'conn.php';
$id = $_GET['id'];

$sql = "DELETE FROM `tbl_user` WHERE `id` = '$id' ";
$execute = $conn->query($sql);
echo "Success";
 ?>