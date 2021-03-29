<?php 
include ('conn.php');

$x = 1;
$sql = " SELECT `id`, `bookName`, `bookAuthor`, `bookDesc`, `imageName`, `dateUploaded`, `status` FROM `tbl_books` ORDER BY `dateUploaded` DESC ";
$exec = $conn->query($sql);
while ($result = $exec->fetch_assoc())
{
	$bookId = $result['id'];
	$bookName = $result['bookName'];
	$bookAuthor = $result['bookAuthor'];
	$bookDesc = $result['bookDesc'];
	$imageName = $result['imageName'];
	$dateUploaded = $result['dateUploaded'];
  

  $string = strip_tags($bookDesc);
  if (strlen($string) > 100) {

      // truncate string
      $stringCut = substr($string, 0, 100);
      $endPoint = strrpos($stringCut, ' ');

      //if the string doesn't contain any space then it will cut without word basis.
      $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
      $string .= ' ......more';
  }

  exec("convert ../books/".$imageName.".pdf[0] output.jpeg");
  // exec("convert sample.pdf sample.jpeg")

  echo ' <article class="style'.$x.'">
            <span class="image"> 
              <img src="../images/b'.$x.'.jpg" alt="" width="100%" height="300px;"/>
              
            </span>
            <a href="product_details.php?id='.$bookId.'">
              <h3>'.$bookName.' <i class="fas fa-book-open"></i></h3>
              
              <p>by: <strong>'.$bookAuthor.'</strong></p>

              <p>'.$string.' </p>
            </a>

          </article>';



              // <img src="../images/output.jpeg" alt="" width="100%" height="300px;"/>
  $x++;
  if ($x == 6) 
  {
    $x = 1;
  }

	// echo '<div class="col-md-4">
 //          <div class="card mb-4 shadow-sm">
 //            <img width="100%" height="400px" src="../images/'.$imageName.'">
 //            <div class="card-body">
 //              <b>'.$bookName.' - '.$bookAuthor.'</b>
 //              <p class="card-text">'.$string.'</p>
 //            </div>
 //            <div class="card-footer">
 //              <div class="d-flex justify-content-between align-items-center">
 //                <div class="btn-group">
 //                  <button type="button" class="btn btn-sm btn-outline-primary zoom " onclick="viewBook('.$bookId.');"><i class="fas fa-eye"></i></button>
 //                  <button type="button" class="btn btn-sm btn-outline-success zoom" onclick="editBook('.$bookId.');"><i class="fas fa-edit"></i></button>
 //                  <button type="button" class="btn btn-sm btn-outline-danger zoom" onclick="deleteBook('.$bookId.');"><i class="fas fa-trash"></i></button>
 //                </div>  
 //                <small class="text-muted">9 mins</small>
 //              </div>
 //            </div>
 //          </div>
 //        </div>';
}









 ?>