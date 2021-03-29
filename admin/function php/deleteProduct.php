<?php 
include 'conn.php';
$id = $_GET['id'];

$select = ' SELECT `filename` FROM `tbl_knowledge_products` WHERE `id` = "'.$id.'" ';
$exec = $conn->query($select);
$res = $exec->fetch_assoc();

$filename = $res['filename'];

$select = ' SELECT `id` FROM `tbl_knowledge_products` WHERE `filename` = "'.$filename.'" ';
$exec = $conn->query($select);
if ($exec->num_rows <= 1) 
{
	unlink('../../products/'.$filename);
}
echo "Success";
$sqlDelete = ' DELETE FROM `tbl_knowledge_products` WHERE `id` = "'.$id.'" ';
$exec = $conn->query($sqlDelete);

$sqlDeleteLog = ' DELETE FROM `tbl_downloads` WHERE `bookId` = "'.$id.'" ';
$execLog = $conn->query($sqlDeleteLog);


 ?>