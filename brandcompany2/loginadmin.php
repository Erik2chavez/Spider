<?php
session_start();	

include 'conn.php';	

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			
if (!$conn) {
die("Connection failed:" . mysqli_connect_error());
}
			
			
$curp = $_POST['curp']; 
$ps = $_POST['password'];
			
		
$result = mysqli_query($conn, "SELECT * FROM responsables WHERE curp = '$curp'");
			
$row = mysqli_fetch_assoc($result);
$hash = $row['ps'];
			
			
if (password_verify($ps,$hash)){	
							
$_SESSION['curp']=$row['curp'];
header("location:admin.php");
}else{
echo"error al iniciar sesion";
            }
mysqli_close($conn);
?>