<?php
require "function php/conn.php";


$query = "SELECT `id`, `videoLink`, `videoTitle`, `dateUploaded`, `category`, `videoSeason` FROM `tbl_videos` WHERE `category` = 'linawin natin' ";

$result = mysqli_query($conn, $query);
$videos = [];

while($row = mysqli_fetch_array($result)) {
	$videos[] = [
		'id' => $row['id'],
		'videoLink' => $row["videoLink"],
		'videoTitle' => $row["videoTitle"],
		'dateUploaded' => $row["dateUploaded"],
		'category' => $row["category"],
		'videoSeason' => $row["videoSeason"],
	];
}
