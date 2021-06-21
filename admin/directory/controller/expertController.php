<?php
require "function php/conn.php";


$query = "SELECT `id`, `name`, `expertise`, `contactNumber`, `address`, `email`, `imageName`, `dateUploaded` FROM `tbl_expert` ORDER BY name ASC ";

$result = mysqli_query($conn, $query);
$experts = [];

while($row = mysqli_fetch_array($result)) {
	$experts[] = [
		'id' => $row['id'],
		'imageName' => $row["imageName"],
		'name' => $row["name"],
		'address' => $row["address"],
		'email' => $row["email"],
		'expertise' => $row["expertise"],
		'contactNumber' => $row["contactNumber"],
	];
}
