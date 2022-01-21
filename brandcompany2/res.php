<?php
	//include our function
	include 'respaldo.php';
		$server = "localhost";
		$username = "root";
		$password = "";
		$dbname = "integradora";
 
		//backup and dl using our function
		backDb($server, $username, $password, $dbname);
 
		exit();
 
?>