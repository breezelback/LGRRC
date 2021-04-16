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
		$db_name="calabarzondilggo_lgrrc";
		$mysql_username="calabarzondilggo_lgrrcuser";
		$mysql_password='^"Ww3/"$';
		$server_name="localhost";
		$conn=mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
		return $conn;
	}
}



 ?>