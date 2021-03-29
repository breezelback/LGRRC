<?php
require "conn.php";



$columns = array("position");
$query = "SELECT * FROM `tbl_about` " ;


if(isset($_POST["search"]["value"])) {
 $query .= '

WHERE (position LIKE "%'.$_POST["search"]["value"].'%")


 ';
}



if(isset($_POST["order"])) {
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
} else {
 $query .= 'ORDER BY id ASC ';
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

 $sub_array = array();


 $sub_array[] = '<center><div id="td_msacName'.$row["id"].'" data-data1="'.$row["position"].'">'.$row["position"].'</div></center>';
 $sub_array[] = '   <center>
                    <img id="td_image'.$row["id"].'" data-data0="../images/lgrrc about/'.$row["imageName"].'" src="../images/lgrrc about/'.$row["imageName"].'" style="height:150px;width:180px;" class="img-rounded"> 
                    </center>
                    ';


 $sub_array[] = '<center><div id="td_msacName'.$row["id"].'" data-data1="'.$row["dateUploaded"].'">'.$mysqldate.'</div></center>';

 $sub_array[] .= '<center>
        <div class="cell-button-alignment">
        <div class="cell-button btn-group">
         <button type="button" id="td_btn_delete" data-id_delete="'.$row["id"].'" class="btn btn-md btn-danger">
         <span class="fa fa-trash"></span></button>
         </div>
        
        </div>
        </center>';
   
   


 $data[] = $sub_array;
}
function get_all_data($conn) {
require "conn.php";
$query = "SELECT * FROM `tbl_about` " ;
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







