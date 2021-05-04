<?php 
include ('conn.php');

$imageStatus= $_GET["status"];
$image_name= $_GET["image_name"];


if ($imageStatus == 'mainImg') 
{
	$selectImage = " SELECT `imageName` FROM `tbl_program_images` WHERE `status` = 'mainImage' ";
	$exec1 = $conn->query($selectImage);
	while ($res = $exec1->fetch_assoc()) 
	{
		unlink('../../images/program features/'.$res['imageName']);
	}

	$sqlDelete = " DELETE FROM `tbl_program_images` WHERE `status` = 'mainImage' ";
	$conn->query($sqlDelete);




	$sql = ' INSERT INTO `tbl_program_images`(`status`, `dateUploaded`) VALUES ( "mainImage", NOW() ) ';

	if ($conn->query($sql)) 
	{
		echo "Success!";
		$last_id = $conn->insert_id; 

	    if($_FILES["btnMainImg"]["name"] != "")
	    {
		$test=explode(".", $_FILES["btnMainImg"]["name"]);
		$extension=end($test);
		$image = $last_id.'_'.$image_name.'.'.$extension;
		$location = '../../images/program features/'.$image;
		move_uploaded_file($_FILES["btnMainImg"]["tmp_name"], $location);

		$query = "UPDATE tbl_program_images SET imageName='$image' WHERE Id='$last_id'";
		mysqli_query($conn,$query);
		}
	}
}

else if ($imageStatus == 'subImage1') 
{
	$selectImage = " SELECT `imageName` FROM `tbl_program_images` WHERE `status` = 'subImage1' ";
	$exec1 = $conn->query($selectImage);
	while ($res = $exec1->fetch_assoc()) 
	{
		unlink('../../images/program features/'.$res['imageName']);
	}

	$sqlDelete = " DELETE FROM `tbl_program_images` WHERE `status` = 'subImage1' ";
	$conn->query($sqlDelete);




	$sql = ' INSERT INTO `tbl_program_images`(`status`, `dateUploaded`) VALUES ( "subImage1", NOW() ) ';

	if ($conn->query($sql)) 
	{
		echo "Success!";
		$last_id = $conn->insert_id; 

	    if($_FILES["btnSubImage1"]["name"] != "")
	    {
		$test=explode(".", $_FILES["btnSubImage1"]["name"]);
		$extension=end($test);
		$image = $last_id.'_'.$image_name.'.'.$extension;
		$location = '../../images/program features/'.$image;
		move_uploaded_file($_FILES["btnSubImage1"]["tmp_name"], $location);

		$query = "UPDATE tbl_program_images SET imageName='$image' WHERE Id='$last_id'";
		mysqli_query($conn,$query);
		}
	}
}

else if ($imageStatus == 'subImage2') 
{
	$selectImage = " SELECT `imageName` FROM `tbl_program_images` WHERE `status` = 'subImage2' ";
	$exec1 = $conn->query($selectImage);
	while ($res = $exec1->fetch_assoc()) 
	{
		unlink('../../images/program features/'.$res['imageName']);
	}

	$sqlDelete = " DELETE FROM `tbl_program_images` WHERE `status` = 'subImage2' ";
	$conn->query($sqlDelete);




	$sql = ' INSERT INTO `tbl_program_images`(`status`, `dateUploaded`) VALUES ( "subImage2", NOW() ) ';

	if ($conn->query($sql)) 
	{
		echo "Success!";
		$last_id = $conn->insert_id; 

	    if($_FILES["btnSubImage2"]["name"] != "")
	    {
		$test=explode(".", $_FILES["btnSubImage2"]["name"]);
		$extension=end($test);
		$image = $last_id.'_'.$image_name.'.'.$extension;
		$location = '../../images/program features/'.$image;
		move_uploaded_file($_FILES["btnSubImage2"]["tmp_name"], $location);

		$query = "UPDATE tbl_program_images SET imageName='$image' WHERE Id='$last_id'";
		mysqli_query($conn,$query);
		}
	}
}

else if ($imageStatus == 'subImage3') 
{
	$selectImage = " SELECT `imageName` FROM `tbl_program_images` WHERE `status` = 'subImage3' ";
	$exec1 = $conn->query($selectImage);
	while ($res = $exec1->fetch_assoc()) 
	{
		unlink('../../images/program features/'.$res['imageName']);
	}

	$sqlDelete = " DELETE FROM `tbl_program_images` WHERE `status` = 'subImage3' ";
	$conn->query($sqlDelete);




	$sql = ' INSERT INTO `tbl_program_images`(`status`, `dateUploaded`) VALUES ( "subImage3", NOW() ) ';

	if ($conn->query($sql)) 
	{
		echo "Success!";
		$last_id = $conn->insert_id; 

	    if($_FILES["btnSubImage3"]["name"] != "")
	    {
		$test=explode(".", $_FILES["btnSubImage3"]["name"]);
		$extension=end($test);
		$image = $last_id.'_'.$image_name.'.'.$extension;
		$location = '../../images/program features/'.$image;
		move_uploaded_file($_FILES["btnSubImage3"]["tmp_name"], $location);

		$query = "UPDATE tbl_program_images SET imageName='$image' WHERE Id='$last_id'";
		mysqli_query($conn,$query);
		}
	}
}

else if ($imageStatus == 'subImage4') 
{
	$selectImage = " SELECT `imageName` FROM `tbl_program_images` WHERE `status` = 'subImage4' ";
	$exec1 = $conn->query($selectImage);
	while ($res = $exec1->fetch_assoc()) 
	{
		unlink('../../images/program features/'.$res['imageName']);
	}

	$sqlDelete = " DELETE FROM `tbl_program_images` WHERE `status` = 'subImage4' ";
	$conn->query($sqlDelete);




	$sql = ' INSERT INTO `tbl_program_images`(`status`, `dateUploaded`) VALUES ( "subImage4", NOW() ) ';

	if ($conn->query($sql)) 
	{
		echo "Success!";
		$last_id = $conn->insert_id; 

	    if($_FILES["btnSubImage4"]["name"] != "")
	    {
		$test=explode(".", $_FILES["btnSubImage4"]["name"]);
		$extension=end($test);
		$image = $last_id.'_'.$image_name.'.'.$extension;
		$location = '../../images/program features/'.$image;
		move_uploaded_file($_FILES["btnSubImage4"]["tmp_name"], $location);

		$query = "UPDATE tbl_program_images SET imageName='$image' WHERE Id='$last_id'";
		mysqli_query($conn,$query);
		}
	}
}




 ?>