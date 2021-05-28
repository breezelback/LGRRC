<?php 
session_start();

if (!isset($_SESSION)) 
{
    header('location: ../index.php');
}
else
{
    if (!isset($_SESSION['usertype'])) 
    {
        header('location: ../index.php');

        if ($_SESSION['usertype'] != 'admin') 
        {
            header('location: ../index.php');
        }
    }
    
}

 ?>