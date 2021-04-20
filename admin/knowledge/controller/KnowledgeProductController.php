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
