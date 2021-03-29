<?php 
include 'conn.php';
$id = $_GET['id'];

$sql = " DELETE FROM `tbl_faq` WHERE `id` = '".$id."' ";
$execute = $conn->query($sql);
echo "Success";
 ?>