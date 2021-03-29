<?php 
include ('conn.php');

$txtBookName= $_GET["txtBookName"];
$txtBookAuthor= $_GET["txtBookAuthor"];
$txtBookDesc= $_GET["txtBookDesc"];
$image_name= $_GET["image_name"];

echo $sql = 'INSERT INTO `tbl_books`(`bookName`, `bookAuthor`, `bookDesc`, `dateUploaded`) VALUES ("'.$txtBookName.'","'.$txtBookAuthor.'","'.$txtBookDesc.'",NOW())';

if ($conn->query($sql)) 
{
	// echo "Success!";	
	$last_id = $conn->insert_id; 

    if($_FILES["btnUploadBookImage"]["name"] != "")
    {
	$test=explode(".", $_FILES["btnUploadBookImage"]["name"]);
	$extension=end($test);
	$image = $last_id.'_'.$image_name.'.'.$extension;
	$location = '../../books/'.$image;
	move_uploaded_file($_FILES["btnUploadBookImage"]["tmp_name"], $location);

	$query = "UPDATE tbl_books SET imageName='$image' WHERE id='$last_id'";
	mysqli_query($conn,$query);
	}
}


 ?>