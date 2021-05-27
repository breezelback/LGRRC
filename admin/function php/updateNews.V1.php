<?php 
include ('conn.php');

$newsId= $_GET["newsId"];
$title= $_GET["editTitle"];

$description= $_GET["editNoise"];

$author= $_GET["editAuthor"];
$image_status= $_GET["image_status"];
$newsStatus= $_GET["newsStatus"];

$description= str_replace("#","(hashtag)",$description);

$description= str_replace('"','\"',$description);



$sqlUpdate = ' UPDATE `tbl_news` SET `title` = "'.$title.'", `description` = "'.$description.'", `status` = "'.$newsStatus.'", `author` = "'.$author.'"  WHERE `id` = "'.$newsId.'"  ';
// $sql = ' UPDATE `tbl_news` SET `title` = "'.$title.'", `status` = "'.$newsStatus.'", `author` = "'.$author.'"  WHERE `id` = "'.$newsId.'" ';

$conn->query($sqlUpdate);

if ($image_status == 'new') 
{
// 	$conn->query($sql);
// }
// else
// {


	$sqlSelect = ' SELECT `imageName` FROM `tbl_news` WHERE `id` = "'.$newsId.'" ';
	$exec = $conn->query($sqlSelect);
	$res = $exec->fetch_assoc();
	unlink('../../images/news/'.$res['imageName']);


 	$image_name= $_GET["image_name"];
	echo "Success!";
	$last_id = $conn->insert_id; 

    if($_FILES["file_updateProfile"]["name"] != "")
    {
		$test=explode(".", $_FILES["file_updateProfile"]["name"]);
		$extension=end($test);
		$image = $newsId.'_'.$image_name.'.'.$extension;
		$location = '../../images/news/'.$image;
		move_uploaded_file($_FILES["file_updateProfile"]["tmp_name"], $location);

		echo $query = "UPDATE tbl_news SET imageName='$image' WHERE Id='$newsId'";
		mysqli_query($conn,$query);
	}
}


 ?>