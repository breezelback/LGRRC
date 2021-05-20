<?php
require "function php/conn.php";

$sql = ' SELECT `id`, `title`, `description`, `imageName`, `status`, `dateUploaded`, `author` FROM `tbl_news` ORDER BY `dateUploaded` DESC ';

$result = mysqli_query($conn, $sql);
$news = [];

while($row = mysqli_fetch_array($result)) {
	$news[] = [
		'id' => $row['id'],
		'title' => $row['title'],
		'description' => mb_strimwidth($row['description'], 0, 250, '...'),
		'image' => "../images/news/". $row["imageName"],
		'status' => $row["status"],
		'dateuploaded' => $row["dateUploaded"],
		'author' => $row["author"]
	];
}
