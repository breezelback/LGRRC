<?php
require "conn.php";



$columns = array("lastname","firstname","middlename","address","mobile","birthday","status","dateUploaded");
$query = "SELECT * FROM `tbl_user` WHERE `usertype` = 'user' " ;


if(isset($_POST["search"]["value"])) {
 $query .= '
AND (lastname LIKE "%'.$_POST["search"]["value"].'%"
Or firstname LIKE "%'.$_POST["search"]["value"].'%"
Or middlename LIKE "%'.$_POST["search"]["value"].'%"
Or address LIKE "%'.$_POST["search"]["value"].'%"
Or mobile LIKE "%'.$_POST["search"]["value"].'%"
Or birthday LIKE "%'.$_POST["search"]["value"].'%"
Or status LIKE "%'.$_POST["search"]["value"].'%"
Or dateUploaded LIKE "%'.$_POST["search"]["value"].'%")


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

$phpdate = strtotime( $row['birthday'] );
$mysqldate = date( 'M d, Y', $phpdate );
$updateBirthday = date( 'Y-m-d', $phpdate );



$dateRegistered = strtotime( $row['dateUploaded'] );
$dateRegistered = date( 'M d, Y', $dateRegistered );


$status = $row['status'];


 $sub_array = array();

// if ($status == 'pending') 
// {
//     $sub_array[] = '<style>#td_status{background-color: red;} </style>';
// }


 $sub_array[] = '<div id="td_name'.$row["id"].'" data-data0="'.$row["lastname"].','.$row["firstname"].','.$row["middlename"].'">'.$row["lastname"].', '.$row["firstname"].' '.$row["middlename"].'</div>';

 $sub_array[] = '<div id="td_address'.$row["id"].'" data-data1="'.$row["address"].'">'.$row["address"].'</div>';
 $sub_array[] = '<div id="td_mobile'.$row["id"].'" data-data2="'.$row["mobile"].'">'.$row["mobile"].'</div>';
 $sub_array[] = '<div id="td_birthday'.$row["id"].'" data-data3="'.$updateBirthday.'" style="backgroud-color:red;">'.$mysqldate.'</div>';
 $sub_array[] = '<div id="td_status'.$row["id"].'" data-data4="'.$row["status"].'">'.$row["status"].'</div>';
 $sub_array[] = '<div id="td_dateUploaded'.$row["id"].'" data-data5="'.$row["dateUploaded"].'">'.$dateRegistered.'</div>';

if ($status == 'approved') 
{
     $sub_array[] .= '<center>
        <div class="cell-button-alignment">
        <div class="cell-button btn-group">
         <button style="width:60px;" type="button" id="td_btn_edit" data-id_edit="'.$row["id"].'" data-toggle= "modal" data-target="#modalUpdate" class="btn btn-md btn-primary">
         <span class="fa fa-edit"></span></button>
         <button style="width:60px;" type="button" id="td_btn_delete" data-id_delete="'.$row["id"].'" class="btn btn-md btn-danger" data-toggle="modal" data-target="#residentsModal">
         <span class="fa fa-times-circle"></span></button>
         </div>
        
        </div>
        </center>';  
}
else
{
     $sub_array[] .= '<center>
        <div class="cell-button-alignment">
        <div class="cell-button btn-group">
         <button style="width:60px;" type="button" id="td_btn_approve" data-id_approve="'.$row["id"].'" data-toggle= "modal" data-target="#modalEditExam" class="btn btn-md btn-success">
         <span class="fa fa-check"></span></button>
         <button style="width:60px;" type="button" id="td_btn_edit" data-id_edit="'.$row["id"].'" data-toggle= "modal" data-target="#modalUpdate" class="btn btn-md btn-primary">
         <span class="fa fa-edit"></span></button>
         </div>
        
        </div>
        </center>';  
        
}
//globo

  
    


 $data[] = $sub_array;
}
function get_all_data($conn) {
require "conn.php";
$query = "SELECT * FROM `tbl_user` " ;
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







