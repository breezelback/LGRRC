<?php 
include ('conn.php');

$id= $_GET["id"];

$sql = " SELECT `imageName` FROM `tbl_about` WHERE `id` = '$id' ";
$exec = $conn->query($sql);
$result = $exec->fetch_assoc();
$filename = $result['imageName'];



$sql = " DELETE FROM `tbl_about` WHERE `id` = '".$id."' ";
$exec = $conn->query($sql);
$conn->query($sql);

unlink('../../images/lgrrc about/'.$filename);
// echo 'File '.$filename.' has been deleted';
echo "Success";


 ?>