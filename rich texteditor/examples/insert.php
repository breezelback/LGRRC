<?php 
include '../../function php/conn.php';

$text = $_GET['text'];

echo $sql = ' INSERT INTO `test`(`text`) VALUES ("'.$text.'") ';
$exec = $conn->query($sql);

 ?>