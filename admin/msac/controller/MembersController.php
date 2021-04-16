<?php
require "function php/conn.php";


$query = "SELECT `id`, `agencyName`, `address`, `contactNumber`, `email`, `imageName`, `dateUploaded` FROM `tbl_msac` ORDER BY id DESC ";

$result = mysqli_query($conn, $query);
$users = [];

while($row = mysqli_fetch_array($result)) {
	$users[] = [
		'id' => $row['id'],
		'image' => "../images/msac/". $row["imageName"],
		'agency_name' => $row["agencyName"],
		'address' => $row["address"],
		'contact_number' => $row["contactNumber"],
		'email' => $row["email"],
	];
}
