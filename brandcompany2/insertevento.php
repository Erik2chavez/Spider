<?php 

	include 'conn.php';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	$name = $_POST['tipo'];
	$inicio = $_POST['inicio'];
	$fin = $_POST['fin'];
	$fecha = $_POST['fecha'];
$query = "INSERT INTO eventos(id, tipo, hora_inicio, hora_fin, fecha) VALUES (' ','$name','$inicio', '$fin', '$fecha')";	
if (mysqli_query($conn, $query)) {
		header("location:eventos.php");
}
	mysqli_close($conn);
 ?>