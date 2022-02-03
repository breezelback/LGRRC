<?php 
session_start();
include ('conn.php');


$id = $_GET['id'];
$reason = $_GET['reason'];
$requested_expertise = $_GET['requested_expertise'];

$selectExpert = ' SELECT `name`, `expertise` FROM `tbl_expert` WHERE `id` = "'.$id.'" ';
$execExpert = $conn->query($selectExpert);
$res = $execExpert->fetch_assoc();

$expertName = $res['name'];
$expertExpertise = $res['expertise'];


$requestorName = $_SESSION['firstname'].' '.$_SESSION['lastname'];



$sql = ' INSERT INTO `tbl_request`(`expertId`, `expertName`, `expertExpertise`, `requestorId`, `requestorName`, `requestorAddress`, `dateRequested`, `reason`, `requested_expertise`) VALUES ( "'.$id.'", "'.$expertName.'", "'.$expertExpertise.'", "'.$_SESSION['id'].'", "'.$requestorName.'", "'.$_SESSION['address'].'", NOW(), "'.$reason.'", "'.$requested_expertise.'" ) ';

$exec = $conn->query($sql);


 ?>