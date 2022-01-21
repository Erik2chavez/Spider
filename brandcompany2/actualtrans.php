<?php
  include 'conn.php';

   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ("no se logro acceder a la base de datos");

         $id2=$_POST['id'];
         $tipo2=$_POST['titulo'];
         $res=$_POST['res'];
         $inicio2=$_POST['inicio1'];
         $fin2=$_POST['fin1'];
         $evento=$_POST['even1'];
       $queryT="update transmisiones set titulo='$tipo2',responsable='$res', hora_inicio='$inicio2', hora_fin='$fin2', evento='$evento' where id = '$id2'";
if (mysqli_query($conn, $queryT)) {
header("location:transmision.php");
  }       
else{
    echo"no se logro insertar nada";
}
   mysqli_close($conn);
 ?>