<?php 
include '../../function php/conn.php';

$id = $_GET['id'];
$updateContent = $_GET['updateContent'];

echo $sql = ' UPDATE `test` SET `text` = "'.$updateContent.'" WHERE `id` = "'.$id.'" ';
$exec = $conn->query($sql);

 ?>