<?php
require "conn.php";



$columns = array("agencyName","address","contactNumber","email");
$query = "SELECT * FROM `tbl_msac` " ;


if(isset($_POST["search"]["value"])) {
 $query .= '

WHERE (agencyName LIKE "%'.$_POST["search"]["value"].'%"
Or address LIKE "%'.$_POST["search"]["value"].'%"
Or contactNumber LIKE "%'.$_POST["search"]["value"].'%"
Or email LIKE "%'.$_POST["search"]["value"].'%")


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
                    <img id="td_image'.$row["id"].'" data-data0="../images/msac/'.$row["imageName"].'" src="../images/msac/'.$row["imageName"].'" style="height:50px;width:50px;" class="img-rounded"> 
                    </center>
                    ';
 $sub_array[] = '<div id="td_msacName'.$row["id"].'" data-data1="'.$row["agencyName"].'">'.$row["agencyName"].'</div>';
 $sub_array[] = '<div id="td_msacAddress'.$row["id"].'" data-data2="'.$row["address"].'">'.$row["address"].'</div>';
 $sub_array[] = '<div id="td_msacContactNumber'.$row["id"].'" data-data3="'.$row["contactNumber"].'">'.$row["contactNumber"].'</div>';
 $sub_array[] = '<div id="td_msacEmail'.$row["id"].'" data-data4="'.$row["email"].'">'.$row["email"].'</div>';



 $sub_array[] .= '<center>
        <div class="cell-button-alignment">
        <div class="cell-button btn-group">
         <button type="button" id="td_btn_edit" data-id_edit="'.$row["id"].'" data-toggle= "modal" data-target="#modalUpdateProduct" class="btn btn-md btn-primary">
         <span class="fas fa-edit"></span></button>
         <button type="button" id="td_btn_delete" data-id_delete="'.$row["id"].'" class="btn btn-md btn-danger">
         <span class="fa fa-trash"></span></button>
         </div>
        
        </div>
        </center>';
   
   


 $data[] = $sub_array;
}
function get_all_data($conn) {
require "conn.php";
$query = "SELECT * FROM `tbl_msac` " ;
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







