<?php 
session_start();

if (!isset($_SESSION)) 
{
    header('location: admin-login.php');
}
else
{
    if (!isset($_SESSION['usertype'])) 
    {
        header('location: admin-login.php');

        if ($_SESSION['usertype'] != 'admin') 
        {
            header('location: admin-login.php');
        }
    }
    
}

 ?>