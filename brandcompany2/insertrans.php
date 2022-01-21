<?php
    include 'conn.php';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ("no se logro acceder a la base de datos");

	$titulo = $_POST['titulo'];
	$res = $_POST['res'];
	$inicio = $_POST['inicio'];
	$fin = $_POST['fin'];
    $evento = $_POST['even'];
$queryT = "INSERT INTO transmisiones (id, titulo, responsable, hora_inicio, hora_fin, evento) VALUES (' ','$titulo','$res', '$inicio', '$fin','$evento')";	
if (mysqli_query($conn, $queryT)) {
		header("location:transmision.php");
}
else{
    echo"no se logro insertar nada";
}
	mysqli_close($conn);
 ?>