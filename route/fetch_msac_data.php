<?php
date_default_timezone_set('Asia/Manila');
$conn = mysqli_connect("localhost", "calabarzondilggo_lgrrcuser", "`(q/*kTRV366'mqD@=eS-", "calabarzondilggo_lgrrc");

$page = $_POST['page'];
$itemsPerPage = $_POST['itemsPerPage'];

fetch($conn,$page, $itemsPerPage);

function fetch($conn,$page, $itemsPerPage)
{

        // Get the page number and items per page from the AJAX request
        $page = $_POST['page'];
        $itemsPerPage = $_POST['itemsPerPage'];

        // Calculate the offset based on the current page
        $offset = ($page - 1) * $itemsPerPage;

        // SQL query to fetch data
        $sql = "SELECT * from tbl_msac LIMIT $page, $itemsPerPage";



        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($query)) {
            
            $data[] = array(
                'id' => $row['id'],
                'agencyName' => $row['agencyName'],
                'address' => $row['address'],
                'email' => $row['email'],
                'contactNumber' => $row['contactNumber'],
                'imageName' => $row['imageName'],
            );
        }
    echo json_encode($data);
}
