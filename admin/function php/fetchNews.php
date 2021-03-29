<?php
require "conn.php";



$columns = array("title","description","status","author");
$query = "SELECT * FROM `tbl_news` " ;


if(isset($_POST["search"]["value"])) {
 $query .= '

WHERE (title LIKE "%'.$_POST["search"]["value"].'%"
Or description LIKE "%'.$_POST["search"]["value"].'%"
Or status LIKE "%'.$_POST["search"]["value"].'%"
Or author LIKE "%'.$_POST["search"]["value"].'%")


 ';
}



if(isset($_POST["order"])) {
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
} else {
 $query .= 'ORDER BY id DESC ';
}





$query1 = '';

if($_POST["length"] != -1) {
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($conn, $query));

$result = mysqli_query($conn, $query.$query1);

$data = array();

while($row = mysqli_fetch_array($result)) {


$phpdate = strtotime( $row['dateUploaded'] );
$mysqldate = date( 'M d, Y', $phpdate );

$description = $row['description'];

$status = $row['status'];


$string = strip_tags($description);
if (strlen($string) > 50) 
{

  // truncate string
  $stringCut = substr($string, 0, 100);
  $endPoint = strrpos($stringCut, ' ');

  //if the string doesn't contain any space then it will cut without word basis.
  $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
  // $string .= '<span style="cursor:pointer; color:blue;" onclick="viewNews('.$row['id'].');"> ......more</span>';
  $string .= '<span> ......more</span>';
}

 $sub_array = array();


 $sub_array[] = '<center>
                    <img id="td_image'.$row["id"].'" data-data0="../images/news/'.$row["imageName"].'" src="../images/news/'.$row["imageName"].'" style="height:100px;width:100px;"> 
                    </center>
                    ';
 $sub_array[] = '<div id="td_title'.$row["id"].'" data-data1="'.$row["title"].'"><b>'.$row["title"].'</b></div>';
 $sub_array[] = '<div id="td_author'.$row["id"].'" data-data2="'.$row["author"].'">'.$row["author"].'</div>';
 $sub_array[] = '<div id="td_description'.$row["id"].'" data-data3="'.$row["description"].'">'.$string.'</div>';
 // $sub_array[] = '<div id="td_productSize'.$row["id"].'" data-data3="'.$row["description"].'"><p><a href="http://facebook.com">aaa</a></p><i>bbb </i><b>ccc</b></div>';
 $sub_array[] = '<div id="td_dateUploaded'.$row["id"].'" data-data4="'.$row["dateUploaded"].'">'.$mysqldate.'</div>';
 $sub_array[] = '<div id="td_status'.$row["id"].'" data-data5="'.$row["status"].'">'.$row["status"].'</div>';



// <button type="button" id="td_btn_edit" data-id_edit="'.$row["id"].'" data-toggle= "modal" data-target="#usereditModal" class="btn btn-md btn-primary" data-toggle="modal" data-target="#residentsModal">
//          <span class="fas fa-edit"></span></button>


$sub_array[] .= '<center>
        <div class="cell-button-alignment">
        <div class="cell-button btn-group">
         <button type="button" id="td_btn_edit" data-id_edit="'.$row["id"].'" class="btn btn-md btn-success">
         <span class="fa fa-external-link-alt"></span></button>
         
         <button type="button" id="td_btn_delete" data-id_delete="'.$row["id"].'" class="btn btn-md btn-danger">
         <span class="fa fa-trash"></span></button>
         </div>
        
        </div>
        </center>';
   
   


 $data[] = $sub_array;
}
function get_all_data($conn) {
require "conn.php";
$query = "SELECT * FROM `tbl_news` " ;
 $result = mysqli_query($conn, $query);
 return mysqli_num_rows($result);
}


$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($conn),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);







//=======================================================================================


?>







