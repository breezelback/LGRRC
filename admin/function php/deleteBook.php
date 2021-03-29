<?php 
include ('conn.php');
$id = $_GET['id'];

$sql = " SELECT `imageName` FROM `tbl_books` WHERE `id` = '$id' ";
$exec = $conn->query($sql);
$result = $exec->fetch_assoc();
$filename = $result['imageName'];

$sql = " DELETE FROM `tbl_books` WHERE `id` = '$id' ";
$exec = $conn->query($sql);

unlink('../../images/'.$filename);
echo 'File '.$filename.' has been deleted';






 ?>