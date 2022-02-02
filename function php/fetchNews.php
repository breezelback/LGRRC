<?php
include 'conn.php';

$id = $_GET['id'];

if ($id != '') 
{
	$condition = 'AND `id` = "'.$id.'"';
}
else
{
	$condition = 'ORDER BY `dateUploaded` DESC ';
}

$sql = ' SELECT `id`, `title`, `description`, `imageName`, `status`, `dateUploaded`, `author` FROM `tbl_news` WHERE `status` = "published" '.$condition.' ';
$exec = $conn->query($sql);
$res = $exec->fetch_assoc();
// $description = $res['description'];
$description = html_entity_decode($res['description']);
$newDate = date("M d-Y | h:i A", strtotime($res['dateUploaded']));
 ?>

 <center><img class="card-img-top img-fluid" src="images/news/<?php echo $res['imageName']; ?>" alt="Card image cap" style="height: 500px; max-width: 70%;"></center>
 <center><h4 class="mt-2"><b><?php echo $res['author']; ?></b></h4></center>
 <center><h6><?php echo $res['title']; ?> </h6></center>
 <center><p><?php echo $newDate; ?></p></center><hr>

	<p style="text-align: justify;"><?php echo $description; ?></p>
