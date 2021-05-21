<?php 
include ('conn.php');

$id= $_GET["id"];

$sql = " SELECT `imageName` FROM `tbl_expert` WHERE `id` = '$id' ";
$exec = $conn->query($sql);
$result = $exec->fetch_assoc();
$filename = $result['imageName'];


unlink('../../images/expert/'.$filename);

$sql = " DELETE FROM `tbl_expert` WHERE `id` = '".$id."' ";
$exec = $conn->query($sql);

// echo 'File '.$filename.' has been deleted';
echo "Success";


 ?>