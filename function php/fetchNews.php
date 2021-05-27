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

 <center><h4><b><?php echo $res['title']; ?> </b></h4></center>
 <center><h6><?php echo $res['author']; ?></h6></center>
 <center><p><?php echo $newDate; ?></p></center><hr><br>  

  <div class="row">
    <div class="col-md-12">
      
      <p style="text-align: justify;"><img class="card-img-top img-fluid" src="images/news/<?php echo $res['imageName']; ?>" alt="Card image cap" style="height: 300px; max-width: 400px; float: left !important; margin: 20px 20px 20px 0px;"><?php echo $description; ?></p>

    </div>
  </div>