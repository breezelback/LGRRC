<?php 
include ('conn.php');

$id= $_GET["id"];
$updateTitle= $_GET["updateTitle"];

$updateStatus= $_GET["updateStatus"];

$image_status= $_GET["image_status"];

$image_name= $_GET["image_name"];


$sqlUpdate = ' UPDATE `tbl_knowledge_products` SET `title`="'.$updateTitle.'",`status`="'.$updateStatus.'" WHERE `id` = "'.$id.'"  ';

$conn->query($sqlUpdate);

if ($image_status == 'new') 
{

	
	$sqlSelect = ' SELECT `filename` FROM `tbl_knowledge_products` WHERE `id` = "'.$id.'" ';
	$exec = $conn->query($sqlSelect);
	$res = $exec->fetch_assoc();


	$sqlSelectImage = ' SELECT COUNT(`id`) as totalImage FROM `tbl_knowledge_products` WHERE `filename` = "'.$res['filename'].'" ';
	$execImage = $conn->query($sqlSelectImage);
	$resImage = $execImage->fetch_assoc();

	// echo $resImage['totalImage'];

	// if ($execImage->num_rows <= 1) 
	if ($resImage['totalImage'] < 2) 
	{
		unlink('../../products/'.$res['filename']);
		
	}





	$last_id = $conn->insert_id; 

	$location = '../../products/'.$image_name;
	move_uploaded_file($_FILES["updateFile"]["tmp_name"], $location);

	$query = "UPDATE tbl_knowledge_products SET filename= '".$image_name."' WHERE id='$id'";
	mysqli_query($conn,$query);
	


}


 ?>