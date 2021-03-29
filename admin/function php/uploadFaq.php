<?php 
include ('conn.php');

$question= $_GET["question"];
$answer= $_GET["answer"];

$sql = ' INSERT INTO `tbl_faq`(`question`, `answer`, `dateUploaded`) VALUES ("'.$question.'", "'.$answer.'", NOW()) ';

$conn->query($sql);


 ?>