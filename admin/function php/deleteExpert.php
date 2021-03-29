<?php 
include ('conn.php');

$id= $_GET["id"];

$sql = " SELECT `imageName` FROM `tbl_expert` WHERE `id` = '$id' ";
$exec = $conn->query($sql);
$result = $exec->fetch_assoc();
$filename = $result['imageName'];



$sql = " DELETE FROM `tbl_expert` WHERE `id` = '".$id."' ";
$exec = $conn->query($sql);
$conn->query($sql);

unlink('../../images/expert/'.$filename);
// echo 'File '.$filename.' has been deleted';
echo "Success";


 ?>