<?php 
include ('conn.php');

$id= $_GET["id"];
$updateAgencyName= $_GET["updateAgencyName"];
$updateAddress= $_GET["updateAddress"];
$updateContactNumber= $_GET["updateContactNumber"];
$updateEmail= $_GET["updateEmail"];
$image_name= $_GET["image_name"];
$image_status= $_GET["image_status"];
$oldImagename= $_GET["oldImagename"];

$sql = '  UPDATE `tbl_msac` SET  `agencyName`= "'.$updateAgencyName.'", `address`= "'.$updateAddress.'", `contactNumber`= "'.$updateContactNumber.'", `email`= "'.$updateEmail.'"
 WHERE `id`= "'.$id.'" ';
$conn->query($sql);

if ($image_status == 'new') {
	unlink('../'.$oldImagename);
	echo "Success!";

    if($_FILES["file_updateMsac"]["name"] != "")
    {
	$test=explode(".", $_FILES["file_updateMsac"]["name"]);
	$extension=end($test);
	$image = $id.'_'.$image_name.'.'.$extension;
	$location = '../../images/msac/'.$image;
	move_uploaded_file($_FILES["file_updateMsac"]["tmp_name"], $location);

	$query = "UPDATE tbl_msac SET imageName='$image' WHERE id='$id'";
	mysqli_query($conn,$query);
	}

}



 ?>