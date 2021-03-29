<?php 
include ('conn.php');

$id= $_GET["id"];
$updateName = $_GET['updateName'];
$updateExpertise = $_GET['updateExpertise'];
$updateAddress = $_GET['updateAddress'];
$updateContactNumber = $_GET['updateContactNumber'];
$updateEmail = $_GET['updateEmail'];
$image_status= $_GET["image_status"];
$oldImagename= $_GET["oldImagename"];
$image_name= $_GET["image_name"];

$sql = ' UPDATE `tbl_expert` SET  `name`= "'.$updateName.'", `expertise`= "'.$updateExpertise.'", `contactNumber`= "'.$updateContactNumber.'", `address`= "'.$updateAddress.'", `email`= "'.$updateEmail.'"WHERE `id`= "'.$id.'" ';
$conn->query($sql);

if ($image_status == 'new') {
	unlink('../'.$oldImagename);
	echo "Success!";

    if($_FILES["file_updateExpert"]["name"] != "")
    {
		$test=explode(".", $_FILES["file_updateExpert"]["name"]);
		$extension=end($test);
		$image = $id.'_'.$image_name.'.'.$extension;
		$location = '../../images/expert/'.$image;
		move_uploaded_file($_FILES["file_updateExpert"]["tmp_name"], $location);

		$query = "UPDATE tbl_expert SET imageName='$image' WHERE id='$id'";
		mysqli_query($conn,$query);
	}

}



 ?>