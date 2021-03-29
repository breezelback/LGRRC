<?php 
include 'conn.php';
$id = $_GET['id'];
$updateLink = $_GET['updateLink'];
$updateTitle = $_GET['updateTitle'];

$updateSeason = $_GET['updateSeason'];
$updateDate = $_GET['updateDate'];
$status = $_GET['status'];





$sql = ' UPDATE `tbl_videos` SET `videoLink`="'.$updateLink.'",`videoTitle`="'.$updateTitle.'",`dateUploaded`="'.$updateDate.'",`videoSeason`="'.$updateSeason.'" WHERE `category` = "'.$status.'" AND `id` = "'.$id.'" ';

$execute = $conn->query($sql);
echo "Success";
 ?>