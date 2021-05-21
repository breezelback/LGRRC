<?php 
include ('conn.php');

$id= $_GET["id"];

$sql = " SELECT `imageName` FROM `tbl_msac` WHERE `id` = '$id' ";
$exec = $conn->query($sql);
$result = $exec->fetch_assoc();
$filename = $result['imageName'];

unlink('../../images/msac/'.$filename);


$sql = " DELETE FROM `tbl_msac` WHERE `id` = '".$id."' ";
$exec = $conn->query($sql);

// echo 'File '.$filename.' has been deleted';
echo "Success";


 ?>