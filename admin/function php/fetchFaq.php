<?php
require "conn.php";



$columns = array("question","answer");
$query = "SELECT * FROM `tbl_faq`" ;


if(isset($_POST["search"]["value"])) {
 $query .= '

WHERE (question LIKE "%'.$_POST["search"]["value"].'%"
Or answer LIKE "%'.$_POST["search"]["value"].'%")


 ';
}



if(isset($_POST["order"])) {
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
} else {
 $query .= 'ORDER BY id DESC ';
}





$query1 = '';

// if($_POST["length"] != -1) {
//  $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
// }

$number_filter_row = mysqli_num_rows(mysqli_query($conn, $query));

$result = mysqli_query($conn, $query.$query1);

$data = array();
$x = 1;
while($row = mysqli_fetch_array($result)) {

$string = strip_tags($row['answer']);
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


 $sub_array[] = '<div id="td_x'.$row["id"].'" data-data0="'.$x.'">'.$x.'</div>';
 $sub_array[] = '<div id="td_question'.$row["id"].'" data-data1="'.$row["question"].'"><b>'.$row["question"].'<b></div>';
 $sub_array[] = '<div id="td_answer'.$row["id"].'" data-data2="'.$row["answer"].'">'.$string.'</div>';


 $sub_array[] .= '<center>
    <div class="cell-button-alignment">
    <div class="cell-button btn-group">
     <button style="width:60px;" type="button" id="td_btn_edit" data-id_edit="'.$row["id"].'" data-toggle= "modal" data-target="#modalUpdate" class="btn btn-sm btn-primary">
     <span class="fa fa-edit"></span></button>
     <button style="width:60px;" type="button" id="td_btn_delete" data-id_delete="'.$row["id"].'" class="btn btn-sm btn-danger">
     <span class="fa fa-trash"></span></button>
     </div>
    
    </div>
    </center>';  


  
    

$x++;
 $data[] = $sub_array;
}
function get_all_data($conn) {
require "conn.php";
$query = "SELECT * FROM `tbl_faq` " ;
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







