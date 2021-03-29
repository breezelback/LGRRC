<?php 
include ('conn.php');

$title= $_GET["title"];
$description= $_GET["description"];
$author= $_GET["author"];


$description= str_replace("#","(hashtag)",$description);

$description= str_replace('"','\"',$description);


$sql = ' INSERT INTO `tbl_news`(`title`, `description`, `status`, `dateUploaded`, `author`) VALUES ( "'.$title.'", "'.$description.'", "draft", NOW(), "'.$author.'" ) ';

if ($conn->query($sql)) 
{
	$image_name= $_GET["image_name"];
	echo "Success!";
	$last_id = $conn->insert_id; 

    if($_FILES["file_editProfile"]["name"] != "")
    {
	$test=explode(".", $_FILES["file_editProfile"]["name"]);
	$extension=end($test);
	$image = $last_id.'_'.$image_name.'.'.$extension;
	$location = '../../images/news/'.$image;
	move_uploaded_file($_FILES["file_editProfile"]["tmp_name"], $location);

	$query = "UPDATE tbl_news SET imageName='$image' WHERE Id='$last_id'";
	mysqli_query($conn,$query);
	}
}


 ?>