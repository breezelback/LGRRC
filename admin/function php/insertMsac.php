<?php 
include ('conn.php');

$agencyName= $_GET["agencyName"];
$address= $_GET["address"];
$contactNumber= $_GET["contactNumber"];
$email= $_GET["email"];
$image_name= $_GET["image_name"];

$sql = ' INSERT INTO `tbl_msac`(`agencyName`, `address`, `contactNumber`, `email`, `dateUploaded`) VALUES ( "'.$agencyName.'", "'.$address.'", "'.$contactNumber.'", "'.$email.'", NOW() ) ';

if ($conn->query($sql)) 
{
	echo "Success!";
	$last_id = $conn->insert_id; 

    if($_FILES["file_editProfile"]["name"] != "")
    {
	$test=explode(".", $_FILES["file_editProfile"]["name"]);
	$extension=end($test);
	$image = $last_id.'_'.$image_name.'.'.$extension;
	$location = '../../images/msac/'.$image;
	move_uploaded_file($_FILES["file_editProfile"]["tmp_name"], $location);

	$query = "UPDATE tbl_msac SET imageName='$image' WHERE Id='$last_id'";
	mysqli_query($conn,$query);
	}
}


 ?>