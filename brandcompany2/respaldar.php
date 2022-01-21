<?php
	//include our function
	include 'respaldo.php';
 
	
		//get credentails via post
		$server = "spidercam.proyectosutd.com";
		$username = "proyec23_uspider";
		$password = "1Familia.";
		$dbname = "proyec23_spidercam";
 
		//backup and dl using our function
		backDb($server, $username, $password, $dbname);
 
		exit();
		
	
 
?>