<?php 
include ('conn.php');

$videoLink= $_GET["videoLink"];
$videoTitle= $_GET["videoTitle"];
$videoDate= $_GET["videoDate"];
$videoCategory= $_GET["videoCategory"];
$videoSeason= $_GET["videoSeason"];

$sql = 'INSERT INTO `tbl_videos`(`videoLink`, `videoTitle`, `dateUploaded`,`category`,`videoSeason`) VALUES ("'.$videoLink.'","'.$videoTitle.'","'.$videoDate.'","'.$videoCategory.'","'.$videoSeason.'")';

$conn->query($sql);


 ?>