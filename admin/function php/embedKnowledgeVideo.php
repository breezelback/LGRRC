<?php 
include ('conn.php');

$video_link= $_GET["video_link"];
$title= $_GET["title"];
$album= $_GET["album"];

$video_link = str_replace("/view","/preview",$video_link);

$sql = 'INSERT INTO `tbl_kp_videos`(`video_link`, `title`, `album`, `date_created`) VALUES ("'.$video_link.'","'.$title.'","'.$album.'",NOW())';
$conn->query($sql);


 ?>