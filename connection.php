<?php
	$host = "localhost";
	$user = "root";
	$pass = "higurashi";
	$database = "stats";
	$mysqli = new mysqli($host, $user, $pass, $database);
	
	if($mysqli->error)
	{
		echo "Error Connecting! Message: ".$mysqli->error;
	}
?>

