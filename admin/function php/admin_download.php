<?php
session_start();
include 'conn.php';
$fileId = $_GET['id'];
$filename = $_GET['fileName'];

$sql = ' INSERT INTO `tbl_downloads`(`bookId`, `downloaderId`, `dateDownloaded`, `borrowerId`, `borrowerName`) VALUES ("'.$fileId.'", "'.$_SESSION['id'].'", NOW(), "'.$_SESSION['borrowerId'].'", "'.$_SESSION['firstname'].' '.$_SESSION['lastname'].'") ';
$exec = $conn->query($sql);

$file_url = '../../products/'.$filename;
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
readfile($file_url); 	

?>