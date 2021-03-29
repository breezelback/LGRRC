<?php 
include ('conn.php');

$aboutPosition= $_GET["aboutPosition"];
$image_name= $_GET["image_name"];



$selectPos = ' SELECT `id` FROM `tbl_about` WHERE `position` = "'.$aboutPosition.'" ';
$execPos = $conn->query($selectPos);

if ($execPos->num_rows > 0) 
{
	echo "exist";
}
else
{
	$sql = ' INSERT INTO `tbl_about`(`position`, `dateUploaded`) VALUES ( "'.$aboutPosition.'", NOW() ) ';

	if ($conn->query($sql)) 
	{
		echo "Success!";
		$last_id = $conn->insert_id; 

	    if($_FILES["file_editProfile"]["name"] != "")
	    {
		$test=explode(".", $_FILES["file_editProfile"]["name"]);
		$extension=end($test);
		$image = $last_id.'_'.$image_name.'.'.$extension;
		$location = '../../images/lgrrc about/'.$image;
		move_uploaded_file($_FILES["file_editProfile"]["tmp_name"], $location);

		$query = "UPDATE tbl_about SET imageName='$image' WHERE Id='$last_id'";
		mysqli_query($conn,$query);
		}
	}	
}




 ?>