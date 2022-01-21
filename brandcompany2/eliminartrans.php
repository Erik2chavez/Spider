<?php
include 'conn.php';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ("Error en la conexion");
$id=$_POST['id'];
mysqli_query($conn,"delete from transmisiones where id = $id") or die ("No se pudo eliminar");
mysqli_query($conn,"alter table transmisiones auto_increment=1");
mysqli_close($conn);
header("location:transmision.php");
?>    