<?php
session_start();
$sesion=$_SESSION['curp'];
if ($sesion==null || $sesion=''){
   header('location: loginadmin.html');
    die();
    

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <title>welcome</title>
    <link rel="stylesheet" href="css/estilos.css">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
</head>
<body bgcolor="#839192">

   
     <nav class="main-nav">
         <div class="container container--flex">
             <span class="icon-menu fixed" id="btnmenu" > </span>
             <ul class="menu" id="menu">
                 <li class="menu__item"><a href="admin.php" class="menu__link">Administracion</a></li>
                 <li class="menu__item"><a href="eventos.php" class="menu__link menu__link--select">Eventos</a></li>
                 <li class="menu__item"><a href="transmision.php" class="menu__link">Transmición</a></li>
                 <li class="menu__item"><a href="usuarios.php" class="menu__link">Usuarios</a></li>

                  <li class="menu__item"><a href="logout.php" class="menu__link">salir</a></li>
                 
             </ul>
             
         </div>
         </nav>
         
     
     <section class="banner3">
         <img src="img/admin/frogs-1212209_1920.jpg" alt="" class="banner__img">
         <div class="banner3__content">Eventos</div>
     </section>
          <div class="contenedor">
         <div class="seccion_agregar">
         	
    <form action="insertevento.php" method="POST">
    <label for="titulo">Agregar un evento nuevo</label><br>
    <label for="tipo">Tipo</label>
	<input type="text" name="tipo" placeholder="Name" required="">
	<label for="inicio">Hora de inicio</label> 
	<input type="time" name="inicio" placeholder="Enter time" required="">
	<label for="fin">Hora fin</label>
	<input type="time" name="fin" placeholder="Enter time" required="">
	<label for="fecha">fecha</label>
	<input type="date" name="fecha"  required="">
	<input type="submit" value="Iniciar">     
</form>
         </div>
<div class="datos_eventos">
<table border="1">
    <tr>Eventos registrados</tr>
    <tr>
           <td>Id</td>
           <td>Tipo</td>
           <td>Hora de inicio</td>
           <td>Hora del fin</td>
           <td>Fecha</td>

       </tr>
   <?php
    include 'conn.php';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
    $sql= "select * from eventos";
    $result= mysqli_query($conn,$sql);
    while($mostrar=mysqli_fetch_array($result)){
        
    ?>
   
       <tr>
           <td><?php echo $mostrar['id'] ?></td>
           <td><?php echo $mostrar['tipo'] ?></td>
           <td><?php echo $mostrar['hora_inicio'] ?></td>
           <td><?php echo $mostrar['hora_fin'] ?></td>
           <td><?php echo $mostrar['fecha'] ?></td>
       </tr>
<?php
    }
    ?>
   </table>      
       
        


</div>
    <div class="eliminar_eventos">
      
               <?php
    include 'conn.php';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
   $result=mysqli_query($conn,"select * from eventos");
    
         
         ?>   
            
       <form action="eliminar.php" method="POST">
    <label for="titulo">Borrar</label><br>
    <label for="id">id</label> 
	 <select name="id">
                    <?php 
                        while($datos = mysqli_fetch_array($result))
                        {
                    ?>
                            <option value="<?php echo $datos['id']?>"> <?php echo $datos['id']?> </option>
                            
                    <?php
   
        
        
                        }
          
        
                    ?> 
                    </select>
                   
	<input type="submit" value="Borrar">     
</form>  
                </div>
     <div class="actualizar_evento">
           <?php
    include 'conn.php';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
   $info=mysqli_query($conn,"select * from eventos");
    
         
         ?>   
        
     <form action="eventos.php" method="POST">
      <label for="titulo">actualizar un evento nuevo</label><br>
       <label for="titulo">seleccione id</label> 
                   <select name="id">
                    <?php 
        while($datos = mysqli_fetch_array($info))
                        {
                    ?>
        <option value="<?php echo $datos['id']?>"> <?php echo $datos['id']?> </option>   
                    <?php
                        }
                    ?> 
                    </select> <br>
    <label for="tipo">Tipo</label><br>
	<input type="text" name="tipo1"><br>
	<label for="inicio">Hora de inicio</label> <br>
	<input type="time" name="inicio1" placeholder="Enter time"><br>
	<label for="fin">Hora fin</label><br>
	<input type="time" name="fin1" placeholder="Enter time"><br>
	<label for="fecha">fecha</label><br>
	<input type="date" name="fecha1" placeholder="Enter Password"><br>
	<input type="submit" value="Actualizar">     
</form>
      <?php
$id=$_POST['id'];
$tipo1=$_POST['tipo1'];
$inicio1=$_POST['inicio1'];
$fin1=$_POST['fin1'];
$fecha1=$_POST['fecha1'];
mysqli_query($conn,"update eventos set tipo='$tipo1', hora_inicio='$inicio1', hora_fin='$fin1', fecha='$fecha1' where id = '$id'");

mysqli_close($conn);
         
?>
     </div>
     
     
  <script type="text/javascript" src="js/menu.js"></script>   

</body>
  
</html>
 