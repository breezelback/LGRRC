<?php
require "conn.php";



$columns = array("expertName","expertExpertise","requestorName","requestorAddress");
$query = "SELECT * FROM `tbl_request` " ;


if(isset($_POST["search"]["value"])) {
 $query .= '

WHERE (expertName LIKE "%'.$_POST["search"]["value"].'%"
Or expertExpertise LIKE "%'.$_POST["search"]["value"].'%"
Or requestorName LIKE "%'.$_POST["search"]["value"].'%"
Or requestorAddress LIKE "%'.$_POST["search"]["value"].'%")


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
$x=1;
while($row = mysqli_fetch_array($result)) {

$phpdate = strtotime( $row['dateRequested'] );
$mysqldate = date( 'M d, Y', $phpdate );
$updateBirthday = date( 'Y-m-d', $phpdate );



 $sub_array = array();

 $sub_array[] = '<div id="td_address'.$row["id"].'" data-data1="'.$row["id"].'">'.$x.'</div>';

 $sub_array[] = '<div id="td_address'.$row["id"].'" data-data1="'.$row["expertName"].'">'.$row["expertName"].'<br> <span style="font-size:12px;">Expertise: <b>'.$row["expertExpertise"].'</b></span></div>';
 $sub_array[] = '<div id="td_mobile'.$row["id"].'" data-data2="'.$row["requestorName"].'">'.$row["requestorName"].'<br> <span style="font-size:12px;">'.$row["requestorAddress"].'</span></div>';
 $sub_array[] = '<div id="td_birthday'.$row["id"].'" data-data3="'.$updateBirthday.'">'.$mysqldate.'</div>';


 // $sub_array[] .= '<center>
 //    <div class="cell-button-alignment">
 //    <div class="cell-button btn-group">
 //     <button style="width:60px;" type="button" id="td_btn_approve" data-id_approve="'.$row["id"].'" class="btn btn-md btn-danger">
 //     <span class="fa fa-times"></span></button>
 //     </div>
    
 //    </div>
 //    </center>';  
        


 $x++;
 $data[] = $sub_array;
}
function get_all_data($conn) {
require "conn.php";
$query = "SELECT * FROM `tbl_request` " ;
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







