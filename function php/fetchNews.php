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
<!-- <img class="card-img-top img-fluid" src="images/news/<?php echo $res['imageName']; ?>" alt="Card image cap" style="height: 300px; max-width: 400px; float: left !important; margin: 20px 20px 20px 0px;"> -->

<img class="card-img-top img-fluid" src="images/news/<?php echo $res['imageName']; ?>" alt="Card image cap" style="height: 500px; max-width: 100%;">
 <center><h4 class="mt-2"><b><?php echo $res['author']; ?></b></h4></center>
 <center><h6><?php echo $res['title']; ?> </h6></center>
 <center><p><?php echo $newDate; ?></p></center><hr>

  <!-- <div class="row">
    <div class="col-md-12">
       -->
      <p style="text-align: justify;"><?php echo $description; ?></p>

   <!--  </div>
  </div> -->