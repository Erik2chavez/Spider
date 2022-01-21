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
                 <li class="menu__item"><a href="transmision.php" class="menu__link menu__link--select">Trasmición</a></li>
                 <li class="menu__item"><a href="usuarios.php" class="menu__link">Usuarios</a></li>

                  <li class="menu__item"><a href="logout.php" class="menu__link">salir</a></li>
                 
             </ul>
             
         </div>
         </nav>
         
     
     <section class="banner3">    
         <img src="img/admin/frogs-1212209_1920.jpg" alt="" class="banner__img">
         <div class="banner3__content">Transmisiones</div>
     </section>

         <div class="seccion_agregar">
          
    <form action="insertrans.php" method="POST">
    <label for="titulo">Agregar una nueva transmición</label><br>
    <label for="tipo">Titulo</label>
	<input type="text" name="titulo" placeholder="titulo">
	<label for="inicio">responsable</label> 
	<select name="res">
                   <?php
             include 'conn.php';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
   $resultr=mysqli_query($conn,"select * from responsables");
    
         
         
                        while($datos = mysqli_fetch_array($resultr))
                        {
                    ?>
                            <option value="<?php echo $datos['id']?>"> <?php echo $_SESSION['nombre'];?>> </option>
                            
                    <?php
   
        
        
                        }
          
        
                    ?> 
                    </select><br>
	
	
	<label for="inicio">Hora inicio</label>
	<input type="time" name="inicio" placeholder="inicio">
	<label for="fin">Hora fin</label>
	<input type="time" name="fin" placeholder="fín">
	<label for="evento">Evento</label>
	<select name="even">
	   
	
               
               
               
	               <?php
    include 'conn.php';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
   $result=mysqli_query($conn,"select * from eventos");
    
         
                   while($datos = mysqli_fetch_array($result))
                        {
                    ?>
                            <option value="<?php echo $datos['id']?>"> <?php echo $datos['tipo']?> </option>
                            
                    <?php
   
        
        
                        }
          
        
                    ?> 
        
	    
	    
	</select>
	<input type="submit" value="Agregar">     
</form>
         </div>
<div class="datos_eventos">
<table border="1">
    <tr>Transmisiones registradas</tr>
    <tr>
           <td>Id</td>
           <td>Titulo</td>
           <td>Responsable</td>
           <td>Hora inicio</td>
           <td>Hora fin</td>
           <td>evento</td>

       </tr>
       
   <?php
    include 'conn.php';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
    $sql= "select * from transmisiones";
    $result= mysqli_query($conn,$sql);
    while($mostrar=mysqli_fetch_array($result)){
        
    ?>
   
       <tr>
           <td><?php echo $mostrar['id'] ?></td>
           <td><?php echo $mostrar['titulo'] ?></td>
           <td><?php echo $mostrar['responsable'] ?></td>
           <td><?php echo $mostrar['hora_inicio'] ?></td>
           <td><?php echo $mostrar['hora_fin'] ?></td>
           <td><?php echo $mostrar['evento'] ?></td>
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
    
   $result=mysqli_query($conn,"select * from transmisiones");
    
         
         ?>   
            
       <form action="eliminartrans.php" method="POST">
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
     <div class="actualizar_evento">
           <?php
    include 'conn.php';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
   $info=mysqli_query($conn,"select * from transmisiones");
    
         
         ?>   
        
           <form action="actualtrans.php" method="POST">
    <label for="titulo">Actualizar transmición</label><br> 
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
    <label for="tipo">Titulo</label>
	<input type="text" name="titulo" placeholder="titulo">
	<label for="inicio">responsable</label> 
	<select name="res">
                   <?php
             include 'conn.php';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
   $resultr=mysqli_query($conn,"select * from responsables");
    
         
         
                        while($datos = mysqli_fetch_array($resultr))
                        {
                    ?>
                            <option value="<?php echo $datos['id']?>"><?php echo $_SESSION['nombre'];?> </option>
                            
                    <?php
   
        
        
                        }
          
        
                    ?> 
                    </select><br>
	
	
	<label for="inicio1">Hora inicio</label>
	<input type="time" name="inicio1" placeholder="inicio">
	<label for="fin1">Hora fin</label>
	<input type="time" name="fin1" placeholder="fín">
	<label for="evento">Evento</label>
	<select name="even1">
	   
	
               
               
               
	               <?php
    include 'conn.php';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
   $result2=mysqli_query($conn,"select * from eventos");
    
         
                   while($datos = mysqli_fetch_array($result2))
                        {
                    ?>
                            <option value="<?php echo $datos['id']?>"> <?php echo $datos['tipo']?> </option>
                            
                    <?php
   
        
        
                        }
          
        
                    ?> 
        
	    
	    
	</select>
	<input type="submit" value="Actualizar">     
</form>

     </div>
    
  <script type="text/javascript" src="js/menu.js"></script>   

</body>
  
</html>
         	
