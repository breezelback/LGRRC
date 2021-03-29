<?php
require "conn.php";

$borrowerId = $_GET['borrowerId'];

$sql = ' SELECT `id`, `bookId`, `downloaderId`, `dateDownloaded`, `borrowerId`, `borrowerName` FROM `tbl_downloads` WHERE `borrowerId` = "'.$borrowerId.'" ';
$exec = $conn->query($sql);
while ($res = $exec->fetch_assoc()) {

$phpdate = strtotime( $res['dateDownloaded'] );
$mysqldate = date( 'M d, Y', $phpdate );


$selectBook = ' SELECT `filename`, `title` FROM `tbl_knowledge_products` WHERE `id` = "'.$res['bookId'].'" ';
$execBook = $conn->query($selectBook);
$resBook = $execBook->fetch_assoc();

?>

<tr>
	<td><?php echo $resBook['title']; ?></td>
	<td><?php echo $mysqldate; ?></td>
</tr>



<?php } ?>



