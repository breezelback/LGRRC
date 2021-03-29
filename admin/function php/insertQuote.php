<?php 
include ('conn.php');

$name= $_GET["name"];
$quotation= $_GET["quotation"];
$image_name= $_GET["image_name"];

$sql = ' INSERT INTO `tbl_quotations`(`name`, `quotation`) VALUES ( "'.$name.'", "'.$quotation.'" ) ';

if ($conn->query($sql)) 
{
	echo "Success!";
	$last_id = $conn->insert_id; 

    if($_FILES["file_editProfile"]["name"] != "")
    {
	$test=explode(".", $_FILES["file_editProfile"]["name"]);
	$extension=end($test);
	$image = $last_id.'_'.$image_name.'.'.$extension;
	$location = '../../images/main/'.$image;
	move_uploaded_file($_FILES["file_editProfile"]["tmp_name"], $location);

	$query = "UPDATE tbl_quotations SET imageName='$image' WHERE Id='$last_id'";
	mysqli_query($conn,$query);
	}
}


 ?>