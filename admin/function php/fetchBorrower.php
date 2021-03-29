<?php
require "conn.php";



$columns = array("borrowerId","borrowerName");
$query = "SELECT * FROM `tbl_downloads` " ;


if(isset($_POST["search"]["value"])) {
 $query .= '

WHERE (borrowerId LIKE "%'.$_POST["search"]["value"].'%"
Or borrowerName LIKE "%'.$_POST["search"]["value"].'%")


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

while($row = mysqli_fetch_array($result)) {

 $sub_array = array();

 $sub_array[] = '<div id="td_title'.$row["id"].'" data-data2="'.$row["borrowerId"].'"><b>'.$row["borrowerId"].'<b></div>';
 $sub_array[] = '<div id="td_title'.$row["id"].'" data-data2="'.$row["borrowerName"].'"><b>'.$row["borrowerName"].'<b></div>';


 // $sub_array[] = '<div id="td_title'.$row["id"].'" data-data2="'.$row["id"].'"><b>'.$row["id"].'<b></div>';
 // $sub_array[] = '<div id="td_title'.$row["id"].'" data-data2="'.$row["bookId"].'"><b>'.$row["bookId"].' '.$row["bookId"].'<b></div>';
 // $sub_array[] = '<div id="td_season'.$row["id"].'" data-data3="'.$row["downloaderId"].'"><b>'.$row["downloaderId"].'<b></div>';




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






  
    


 $data[] = $sub_array;
}
function get_all_data($conn) {
require "conn.php";
$query = "SELECT * FROM `tbl_downloads` " ;
 $result = mysqli_query($conn, $query);
 return mysqli_num_rows($result);
}


$output = array(
 // "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($conn),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data,
 "status"    => 'test'
);

echo json_encode($output);





























//=======================================================================================


?>







