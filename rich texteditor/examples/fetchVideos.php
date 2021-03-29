<?php
require "../../function php/conn.php";



$columns = array("text");
$query = "SELECT * FROM `test` " ;


if(isset($_POST["search"]["value"])) {
 $query .= '

WHERE (text LIKE "%'.$_POST["search"]["value"].'%")


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



$description = $row['text'];

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


 $sub_array[] = '<div id="td_text'.$row["id"].'" data-data1="'.$row["text"].'">'.$string.'</div>';


$sub_array[] .= '<center>
				<button type="button" id="td_btn_edit" data-id_edit="'.$row["id"].'" class="btn btn-md btn-success" data-toggle="modal" data-target="#modalEdit">
		         Edit</button>
		        </center>';
  
    


 $data[] = $sub_array;
}
function get_all_data($conn) {
require "../../function php/conn.php";
$query = "SELECT * FROM `test` " ;
 $result = mysqli_query($conn, $query);
 return mysqli_num_rows($result);
}


$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($conn),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data,
 "status"    => 'test'
);

echo json_encode($output);





























//=======================================================================================


?>







