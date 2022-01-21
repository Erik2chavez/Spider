<?php
include 'conn.php';	
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);			
if (!$conn) {
die("Connection failed:" . mysqli_connect_error());
}			
$correo = $_POST['correo']; 
$password = $_POST['ps'];			
$result = mysqli_query($conn, "SELECT correo, ps, nombre FROM usuarios WHERE correo = '$correo'");			
$row = mysqli_fetch_assoc($result);
$hash = $row['ps'];
if (password_verify($_POST['ps'], $hash)) {	
session_start();
$_SESSION['nombre'] = $row['nombre'];
header("location:indexlogin.php");  
} else {
echo "<div class='alert alert-danger mt-4' role='alert'>Email or Password are incorrects!
<p><a href='login.html'><strong>Please try again!</strong></a></p></div>";			
}	
?>
 