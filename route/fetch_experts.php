<?php
date_default_timezone_set('Asia/Manila');
$conn = mysqli_connect("localhost", "calabarzondilggo_lgrrcuser", "`(q/*kTRV366'mqD@=eS-", "calabarzondilggo_lgrrc");

$page = $_POST['page'];
$itemsPerPage = $_POST['itemsPerPage'];


fetch($conn, $page, $itemsPerPage);




function fetch($conn)
{

    $queryCondition = '';

    $id = '';
    $nameHolder = '';
    $addressHolder = '';
    $newExpertiseQry = '';


    // if (isset($_GET['id'])) 
    if (isset($_GET['id']) || isset($_GET['nameHolder']) || isset($_GET['addressHolder']) || isset($_GET['identifier'])) {
        $id = $_GET['id'];
        $nameHolder = $_GET['nameHolder'];
        $addressHolder = $_GET['addressHolder'];
        $identifier = $_GET['identifier'];
        $expertiseQry = '(';

        if ($identifier != 'undefined') {
            $identifier = explode(',', $identifier);

            for ($i = 0; $i < count($identifier); $i++) {
                $expertiseQry .= '`expertise` LIKE "%' . $identifier[$i] . '%" AND ';
            }
            $newExpertiseQry = rtrim($expertiseQry, " AND ");
            $newExpertiseQry = $newExpertiseQry . ')';

            if (($id != '') or ($id == 'test')) {
                $queryCondition = ' WHERE ' . $newExpertiseQry . ' ';
                if ($nameHolder != '') {
                    $queryCondition .= ' AND (`name` LIKE "' . $nameHolder . '%" OR `name` LIKE "%' . $nameHolder . '%" OR `name` LIKE "' . $nameHolder . '")    ';
                }
                if ($addressHolder != '') {
                    $queryCondition .= ' AND (`address` LIKE "' . $addressHolder . '%" OR `address` LIKE "%' . $addressHolder . '%" OR `address` LIKE "' . $addressHolder . '")    ';
                }
            }

            if ($nameHolder != '') {
                $queryCondition = ' WHERE (`name` LIKE "' . $nameHolder . '%" OR `name` LIKE "%' . $nameHolder . '%" OR `name` LIKE "' . $nameHolder . '")    ';
                if ($id != '') {
                    $queryCondition .= ' AND (`expertise` LIKE "' . $id . '%" OR `expertise` LIKE "%' . $id . '%" OR `expertise` LIKE "' . $id . '")    ';
                }
                if ($addressHolder != '') {
                    $queryCondition .= ' AND (`address` LIKE "' . $addressHolder . '%" OR `address` LIKE "%' . $addressHolder . '%" OR `address` LIKE "' . $addressHolder . '")    ';
                }
            }

            if ($addressHolder != '') {
                $queryCondition = ' WHERE (`address` LIKE "' . $addressHolder . '%" OR `address` LIKE "%' . $addressHolder . '%" OR `address` LIKE "' . $addressHolder . '")    ';
                if ($id != '') {
                    $queryCondition .= ' AND (`expertise` LIKE "' . $id . '%" OR `expertise` LIKE "%' . $id . '%" OR `expertise` LIKE "' . $id . '")    ';
                }
                if ($nameHolder != '') {
                    $queryCondition .= ' AND (`name` LIKE "' . $nameHolder . '%" OR `name` LIKE "%' . $nameHolder . '%" OR `name` LIKE "' . $nameHolder . '")    ';
                }
            }
        } //second if
        else {
            if (($id != '') or ($id == 'test')) {
                $queryCondition = ' WHERE (`expertise` LIKE "' . $id . '%" OR `expertise` LIKE "%' . $id . '%" OR `expertise` LIKE "' . $id . '")    ';
                if ($nameHolder != '') {
                    $queryCondition .= ' AND (`name` LIKE "' . $nameHolder . '%" OR `name` LIKE "%' . $nameHolder . '%" OR `name` LIKE "' . $nameHolder . '")    ';
                }
                if ($addressHolder != '') {
                    $queryCondition .= ' AND (`address` LIKE "' . $addressHolder . '%" OR `address` LIKE "%' . $addressHolder . '%" OR `address` LIKE "' . $addressHolder . '")    ';
                }
            }

            if ($nameHolder != '') {
                $queryCondition = ' WHERE (`name` LIKE "' . $nameHolder . '%" OR `name` LIKE "%' . $nameHolder . '%" OR `name` LIKE "' . $nameHolder . '")    ';
                if ($id != '') {
                    $queryCondition .= ' AND (`expertise` LIKE "' . $id . '%" OR `expertise` LIKE "%' . $id . '%" OR `expertise` LIKE "' . $id . '")    ';
                }
                if ($addressHolder != '') {
                    $queryCondition .= ' AND (`address` LIKE "' . $addressHolder . '%" OR `address` LIKE "%' . $addressHolder . '%" OR `address` LIKE "' . $addressHolder . '")    ';
                }
            }

            if ($addressHolder != '') {
                $queryCondition = ' WHERE (`address` LIKE "' . $addressHolder . '%" OR `address` LIKE "%' . $addressHolder . '%" OR `address` LIKE "' . $addressHolder . '")    ';
                if ($id != '') {
                    $queryCondition .= ' AND (`expertise` LIKE "' . $id . '%" OR `expertise` LIKE "%' . $id . '%" OR `expertise` LIKE "' . $id . '")    ';
                }
                if ($nameHolder != '') {
                    $queryCondition .= ' AND (`name` LIKE "' . $nameHolder . '%" OR `name` LIKE "%' . $nameHolder . '%" OR `name` LIKE "' . $nameHolder . '")    ';
                }
            }
        }
    } //main if



    // Get the page number and items per page from the AJAX request
    $page = $_POST['page'];
    $itemsPerPage = $_POST['itemsPerPage'];

    // Calculate the offset based on the current page
    $offset = ($page - 1) * $itemsPerPage;

    // SQL query to fetch data
    if ($queryCondition == null) {
        $sql = ' SELECT `id`, `name`, `expertise`, `contactNumber`, `address`, `email`, `imageName`, `dateUploaded` 
        FROM `tbl_expert` WHERE expertise != ""  GROUP BY `name` ORDER BY `name` ASC  LIMIT ' . $page . ', ' . $itemsPerPage . '';
    } else {
        $sql = ' SELECT `id`, `name`, `expertise`, `contactNumber`, `address`, `email`, `imageName`, `dateUploaded` 
        FROM `tbl_expert` ' . $queryCondition . '  GROUP BY `name` ORDER BY `name` ASC  LIMIT ' . $page . ', ' . $itemsPerPage . '';
    }
    $data = [];
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($query)) {

        $data[] = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'expertise' => $row['expertise'],
            'imageName' => $row['imageName'],
            'contactNumber' => $row['contactNumber'],
            'address' => $row['address'],
            

        );
    }
    echo json_encode($data);
}
