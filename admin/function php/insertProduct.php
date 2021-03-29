<?php 
include ('conn.php');

$title= $_GET["title"];
$status= $_GET["status"];
$file= $_GET["file"];


$select = ' SELECT `id` FROM `tbl_knowledge_products` WHERE `filename` = "'.$file.'" ';
$exec = $conn->query();
if ($exec->num_rows > 0) 
{
	$sql = ' INSERT INTO `tbl_knowledge_products`(`filename`, `title`, `status`, `dateUploaded`) VALUES ( "'.$file.'", "'.$title.'", "'.$status.'", NOW()) ';
	$conn->query($sql);
}

else
{
	$sql = ' INSERT INTO `tbl_knowledge_products`(`title`, `status`, `dateUploaded`) VALUES ( "'.$title.'", "'.$status.'", NOW()) ';

	if ($conn->query($sql)) 
	{
		echo "Success!";
		$last_id = $conn->insert_id; 

	    if($_FILES["file_editProfile"]["name"] != "")
	    {
			$location = '../../products/'.$file;
			move_uploaded_file($_FILES["file_editProfile"]["tmp_name"], $location);

			$query = "UPDATE tbl_knowledge_products SET filename='$file' WHERE Id='$last_id'";
			mysqli_query($conn,$query);
		}
	}
}





 ?>