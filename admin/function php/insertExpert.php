<?php 
include ('conn.php');


$name= $_GET["name"];
$expertise= $_GET["expertise"];
$contactNumber= $_GET["contactNumber"];
$address= $_GET["address"];
$email= $_GET["email"];
$image_name= $_GET["image_name"];

$sql = ' INSERT INTO `tbl_expert`(`name`, `expertise`, `contactNumber`, `address`, `email`, `dateUploaded`) VALUES ( "'.$name.'", "'.$expertise.'", "'.$contactNumber.'", "'.$address.'", "'.$email.'", NOW() ) ';

if ($conn->query($sql)) 
{
	echo "Success!";
	$last_id = $conn->insert_id; 

    if($_FILES["file_editProfile"]["name"] != "")
    {
	$test=explode(".", $_FILES["file_editProfile"]["name"]);
	$extension=end($test);
	$image = $last_id.'_'.$image_name.'.'.$extension;
	$location = '../../images/expert/'.$image;
	move_uploaded_file($_FILES["file_editProfile"]["tmp_name"], $location);

	$query = "UPDATE tbl_expert SET imageName='$image' WHERE Id='$last_id'";
	mysqli_query($conn,$query);
	}
}


 ?>