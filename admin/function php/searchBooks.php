<?php 
include ('conn.php');
$inputValue = $_GET['value'];
$x = 1;

$sql = " SELECT `id`, `bookName`, `bookAuthor`, `bookDesc`, `imageName`, `dateUploaded`, `status` FROM `tbl_books` WHERE `bookName` LIKE '$inputValue%' OR `bookName` LIKE '%$inputValue' OR `bookName` LIKE '%$inputValue%' OR `bookAuthor` LIKE '$inputValue%' OR `bookAuthor` LIKE '%$inputValue' OR `bookAuthor` LIKE '%$inputValue%' ORDER BY `dateUploaded` DESC ";
$exec = $conn->query($sql);
if ($exec->num_rows > 0) 
{
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
        $string .= ' ..... read more';
    }

    exec("convert ../images/pdf1.pdf[0] output.jpeg");
    // exec("convert sample.pdf sample.jpeg")

    echo ' <article class="style'.$x.'">
              <span class="image">
                <img src="../images/'.$imageName.'" alt="" width="100%" height="300px;"/>
              </span>
              <a href="product-details.html">
                <h3>'.$bookName.'</h3>
                
                <p><strong>'.$bookAuthor.'</strong></p>

                <p>'.$string.' </p>
              </a>

            </article>';



    $x++;


    // echo '<div class="col-md-4">
   //          <div class="card mb-4 shadow-sm">
   //            <img width="100%" height="400px" src="../images/'.$imageName.'">
   //            <div class="card-body">
   //              <b>'.$bookName.' - '.$bookAuthor.'</b>
   //              <p class="card-text">'.$bookDesc.'</p>
   //            </div>
   //            <div class="card-footer">
   //              <div class="d-flex justify-content-between align-items-center">
   //                <div class="btn-group">
   //                  <button type="button" class="btn btn-sm btn-outline-primary zoom" onclick="viewBook('.$bookId.');"><i class="fas fa-eye"></i></button>
   //                  <button type="button" class="btn btn-sm btn-outline-success zoom" onclick="editBook('.$bookId.');"><i class="fas fa-edit"></i></button>
   //                  <button type="button" class="btn btn-sm btn-outline-danger zoom" onclick="deleteBook('.$bookId.');"><i class="fas fa-trash"></i></button>
   //                </div>  
   //                <small class="text-muted">9 mins</small>
   //              </div>
   //            </div>
   //          </div>
   //        </div>';
  } 

}//if

else
{
  echo "<center><i>No Data Found!</i></center>";
}









 ?>