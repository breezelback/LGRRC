<?php

/**
 * 
 */
class Connection 
{
	
	function __construct()
	{
		# code...
	}

	function connect()
	{
		// $db_name="calabarzondilggo_lgrrc";
		// $mysql_username="calabarzondilggo_lgrrcuser";
		// $mysql_password="`(q/*kTRV366'mqD@=eS-";
		// $server_name="localhost";

		$db_name="db_lgrrc";
		$mysql_username="root";
		$mysql_password='';
		$server_name="localhost";

		$conn=mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
		return $conn;
	}
}



 ?>