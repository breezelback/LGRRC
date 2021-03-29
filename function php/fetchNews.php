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
$description = $res['description'];

$description1 = substr($description,0,605);
$description2 = substr($description,606,100000);

$newDate = date("M d-Y | h:i:s A", strtotime($res['dateUploaded']));
 ?>

 <center><h4><b><?php echo $res['title']; ?> </b></h4></center>
 <center><h6><?php echo $res['author']; ?></h6></center>
 <center><p><?php echo $newDate; ?></p></center><br>  
  <div class="row">
    <div class="col-sm-6">

     <div class="card">
        <img class="card-img-top img-fluid" src="images/news/<?php echo $res['imageName']; ?>" alt="Card image cap" style="height: 300px;">
        
      </div>

    </div>

      <div class="col-sm-6">
          <p style="text-align: justify;"><?php echo $description1; ?></p>
      </div>

  </div>

    <div class="row">
      <div class="col-sm-12">
          <p style="text-align: justify;"><?php echo $description2; ?></p>
      </div>  
    </div>



 <!-- <center><h4><b><?php echo $res['title']; ?> </b></h4></center>
  <div class="row">
    <div class="col-sm-6">

     <div class="card">
        <img class="card-img-top img-fluid" src="images/news/<?php echo $res['imageName']; ?>" alt="Card image cap" style="height: 300px;">
        
      </div>

    </div>

      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <p class="card-text"><?php echo $res['description']; ?></p>

          </div>
        </div>
      </div>
  </div> -->