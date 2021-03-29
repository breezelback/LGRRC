<?php 
include 'conn.php';
$id = $_GET['id'];
$updateQuestion = $_GET['updateQuestion'];
$updateAnswer = $_GET['updateAnswer'];


$sql = ' UPDATE `tbl_faq` SET `question`="'.$updateQuestion.'",`answer`="'.$updateAnswer.'" WHERE `id` = "'.$id.'" ';

$execute = $conn->query($sql);
echo "Success";
 ?>