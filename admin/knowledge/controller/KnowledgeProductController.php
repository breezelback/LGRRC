<?php
require "function php/conn.php";

$sql = ' SELECT `id`, `filename`, `title`, `status`, `dateUploaded` FROM `tbl_knowledge_products`';
$result = mysqli_query($conn, $sql);
$products = [];
while($row = mysqli_fetch_array($result)) {
	$products[] = [
		'id' => $row['id'],
		'filename' => $row['filename'],
		'title' => $row["title"],
		'status' => $row["status"],
		'dateuploaded' => $row["dateUploaded"]
	];
}


$sql = ' SELECT `id`, `video_link`, `title`, `album`, `status`, DATE_FORMAT(`date_created`, "%M %d, %Y") AS date_created FROM `tbl_kp_videos` ';
$result = mysqli_query($conn, $sql);
$videos = [];
while($row = mysqli_fetch_array($result)) {
	$videos[] = [
		'id' => $row['id'],
		'video_link' => $row['video_link'],
		'title' => $row["title"],
		'album' => $row["album"],
		'status' => $row["status"],
		'date_created' => $row["date_created"]
	];
}


