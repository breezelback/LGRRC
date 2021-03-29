<?php 
include 'conn.php';
$id = $_GET['id'];

$sql = " DELETE FROM `tbl_videos` WHERE `id` = '".$id."' ";
$execute = $conn->query($sql);
echo "Success";
 ?>