<?php 
include ('conn.php');

$title= $_POST["title"];
$description= $_POST["example"];
$author= $_POST["author"];

$description = htmlentities($description);
$description = str_replace("'", '&quot;', $description);

$sql = " INSERT INTO `tbl_news`(`title`, `description`, `status`, `dateUploaded`, `author`) VALUES ( '".$title."', '".$description."', 'draft', NOW(), '".$author."' ) ";

if ($conn->query($sql)) 
{
	$image_name= basename($_FILES["file_editProfile"]["name"]);
	echo "Success!";
	$last_id = $conn->insert_id; 

    if($_FILES["file_editProfile"]["name"] != "")
    {
	$test=explode(".", $_FILES["file_editProfile"]["name"]);
	$extension=end($test);
	// $image = $last_id.'_'.$image_name.'.'.$extension;
	$image = $last_id.'_'.$image_name;
	$location = '../../images/news/'.$image;
	move_uploaded_file($_FILES["file_editProfile"]["tmp_name"], $location);

	$query = "UPDATE tbl_news SET imageName='$image' WHERE Id='$last_id'";
	mysqli_query($conn,$query);
	}
}


header('location: ../news.php');
 ?>