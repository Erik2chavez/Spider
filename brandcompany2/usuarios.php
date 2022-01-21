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
                 <li class="menu__item"><a href="eventos.php" class="menu__link ">Eventos</a></li>
                 <li class="menu__item"><a href="transmision.php" class="menu__link ">Trasmición</a></li>
                 <li class="menu__item"><a href="usuarios.php" class="menu__link menu__link--select">Usuarios</a></li>
                 
                  <li class="menu__item"><a href="logout.php" class="menu__link">salir</a></li>
                 
             </ul>
             
         </div>
         </nav>
         
     
     <section class="banner3">
         <img src="img/admin/frogs-1212209_1920.jpg" alt="" class="banner__img">
         <div class="banner3__content">Usuarios</div>
     </section>
          
<div class="datos_eventos2">
<table border="1">
    <tr>Usuarios registrados</tr>
    <tr>
           <td>Id</td>
           <td>Nombre</td>
           <td>Primer apellido</td>
           <td>Segundo apellido</td>
           <td>Correo</td>
           

       </tr>
   <?php
    include 'conn.php';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
    $sql= "select * from usuarios";
    $result= mysqli_query($conn,$sql);
    while($mostrar=mysqli_fetch_array($result)){
        
    ?>
   
       <tr>
           <td><?php echo $mostrar['id'] ?></td>
           <td><?php echo $mostrar['nombre'] ?></td>
           <td><?php echo $mostrar['ape1'] ?></td>
           <td><?php echo $mostrar['ape2'] ?></td>
           <td><?php echo $mostrar['correo'] ?></td>
           
       </tr>
<?php
    }
    ?>
   </table>      
       
        


</div>
    <div class="eliminar_eventos2">
      
               <?php
    include 'conn.php';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
   $result=mysqli_query($conn,"select * from usuarios");
    
         
         ?>   
            
       <form action="eliminarusuario.php" method="POST">
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
          mysqli_query($conn,"alter table eventos auto_increment=1");
         mysqli_close($conn);

        
                    ?> 
                    </select>
                   
	<input type="submit" value="Borrar">     
</form>  
              
            
               
                </div>
      
  <script type="text/javascript" src="js/menu.js"></script>   

</body>
  
</html>
 