<?php 
include 'conn.php';
$id = $_POST['id'];

$sql = "UPDATE `tbl_user` SET `status` = 'approved' WHERE `id` = '$id' ";
$execute = $conn->query($sql);
echo "Success";
 ?>