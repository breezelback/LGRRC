<?php
require "conn.php";



$columns = array("name","quotation");
$query = "SELECT * FROM `tbl_quotations` " ;


if(isset($_POST["search"]["value"])) {
 $query .= '

WHERE (name LIKE "%'.$_POST["search"]["value"].'%"
Or quotation LIKE "%'.$_POST["search"]["value"].'%")


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



 $sub_array = array();


 $sub_array[] = '   <center>
                    <img id="td_image'.$row["id"].'" data-data0="../images/main/'.$row["imageName"].'" src="../images/main/'.$row["imageName"].'" style="height:100px;width:100px;" class="img-rounded"> 
                    </center>
                    ';
 $sub_array[] = '<div id="td_name'.$row["id"].'" data-data1="'.$row["name"].'">'.$row["name"].'</div>';
 $sub_array[] = '<div id="td_quotation'.$row["id"].'" data-data2="'.$row["quotation"].'">'.$row["quotation"].'</div>';



 $sub_array[] .= '<center>
        <div class="cell-button-alignment">
        <div class="cell-button btn-group">
         <button type="button" id="td_btn_edit" data-id_edit="'.$row["id"].'" data-toggle= "modal" data-target="#modalUpdateProduct" class="btn btn-md btn-primary">
         <span class="fas fa-edit"></span></button>
         </div>
        
        </div>
        </center>';
   
   
// $sub_array[] .= '<center>
//         <div class="cell-button-alignment">
//         <div class="cell-button btn-group">
//          <button type="button" id="td_btn_edit" data-id_edit="'.$row["id"].'" data-toggle= "modal" data-target="#modalUpdateProduct" class="btn btn-md btn-primary">
//          <span class="fas fa-edit"></span></button>
//          <button type="button" id="td_btn_delete" data-id_delete="'.$row["id"].'" class="btn btn-md btn-danger">
//          <span class="fa fa-trash"></span></button>
//          </div>
        
//         </div>
//         </center>';

 $data[] = $sub_array;
}
function get_all_data($conn) {
require "conn.php";
$query = "SELECT * FROM `tbl_quotations` " ;
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







