<?php
require "function php/conn.php";


$query = " SELECT `id`, `name`, `imageName`, `quotation` FROM `tbl_quotations` ";

$result = mysqli_query($conn, $query);
$data = [];

while($row = mysqli_fetch_array($result)) {
	$data[] = [
		'id' => $row['id'],
		'name' => $row["name"],
		'imageName' => $row["imageName"],
		'quotation' => $row["quotation"],
	];
}
