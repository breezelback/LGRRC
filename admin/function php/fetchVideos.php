<?php
require "conn.php";



$columns = array("videoLink","videoTitle","dateUploaded","videoSeason");
$query = "SELECT * FROM `tbl_videos` WHERE `category` = 'sagisag ng pagasa' " ;


if(isset($_POST["search"]["value"])) {
 $query .= '

AND (videoLink LIKE "%'.$_POST["search"]["value"].'%"
Or videoTitle LIKE "%'.$_POST["search"]["value"].'%"
Or dateUploaded LIKE "%'.$_POST["search"]["value"].'%"
Or videoSeason LIKE "%'.$_POST["search"]["value"].'%")


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
$updateVideo = date( 'Y-m-d', $phpdate );


$updateTitle= str_replace("(hashtag)","#",$row["videoTitle"]);

 $sub_array = array();


 $sub_array[] = '<div id="td_video'.$row["id"].'" data-data0="'.$row["videoLink"].'"><div class="fb-video card-img-top" data-href="'.$row["videoLink"].'" data-width="220" data-show-text="false"><blockquote cite="'.$row["videoLink"].'" class="fb-xfbml-parse-ignore"><a href="'.$row["videoLink"].'">'.$row["videoTitle"].'</a><p></blockquote></div></div>';


 $sub_array[] = '<div id="td_link'.$row["id"].'" data-data1="'.$row["videoLink"].'"><i><a href="'.$row["videoLink"].'" target="_blank">'.$row["videoLink"].'</a></i></div>';

 $sub_array[] = '<div id="td_title'.$row["id"].'" data-data2="'.$updateTitle.'"><b>'.$updateTitle.'<b></div>';
 $sub_array[] = '<div id="td_season'.$row["id"].'" data-data3="'.$row["videoSeason"].'"><b>'.$row["videoSeason"].'<b></div>';
 $sub_array[] = '<div id="td_date'.$row["id"].'" data-data4="'.$updateVideo.'">'.$mysqldate.'</div>';


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
$query = "SELECT * FROM `tbl_videos` " ;
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







