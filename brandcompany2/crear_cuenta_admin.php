<?php 

	include 'conn.php';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	
	$name = $_POST['nombre'];
	$ape1 = $_POST['ape1'];
	$ape2 = $_POST['ape2'];
	$curp = $_POST['curp'];
	$dir = $_POST['direccion'];
	$tel = $_POST['telefono'];
	$pass = $_POST['password'];
	
	
	
	$passHash = password_hash($pass, PASSWORD_DEFAULT);
	
	
	$query = "INSERT INTO responsables (nombre, ape1, ape2, curp, col_fracc, telefono, ps) VALUES ('$name','$ape1', '$ape2', '$curp', '$dir', '$tel', '$passHash' )";

	if (mysqli_query($conn, $query)) {
		echo "La cuenta fue dada de alta satisfactoria mente <br>";
           
		} else {
			echo"Por favor intentar de nuevo";
		}	
	
	mysqli_close($conn);
 ?>