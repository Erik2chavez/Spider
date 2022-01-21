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
   <body background="img/login/admin.jpg" style="background-repeat: no-repeat; background-position: center center;">
    <meta charset="UTF-8">
    <title>welcome</title>
    <link rel="stylesheet" href="css/estilos.css">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
</head>
<body bgcolor="#839192">
<div class="cont">    
 <header class="main-header">
         <div class="container container--flex">
             <div class="logo-container column column--50">
                 
             
         </div>
     </header>
   
     <nav class="main-nav">
         <div class="container container--flex">
             <span class="icon-menu fixed" id="btnmenu" > </span>
             <ul class="menu" id="menu">
               <li class="menu__item"><a href="indexlogin.php" class="menu__link ">BrandCompany</a></li>
                 <li class="menu__item"><a href="#contacto" class="menu__link menu__link--select">Administracion</a></li>
                 <li class="menu__item"><a href="eventos.php" class="menu__link ">Eventos</a></li>
                 <li class="menu__item"><a href="transmision.php" class="menu__link">Trasmición</a></li>
                 <li class="menu__item"><a href="usuarios.php" class="menu__link">Usuarios</a></li>
                 
                 <li class="menu__item"><a href="logout.php" class="menu__link">Salir</a></li>
             </ul>
             
         </div>
         </nav>
         
     
     <section class="banner">
         <img src="img/admin/frogs-1212209_1920.jpg" alt="" class="banner__img">
         <div class="banner__content">Administración del sitio</div>
     </section>
  
  <div class="admin">
    <div class="intro">
      <h1>Bienvenido a la sección administrativa de la pagina</h1>
      <br>
      <h2>¿Que puedes hacer</h2><br>
      <p>En esta sección tu puedes <strong>agregar</strong> <strong>actualizar</strong> y <strong>eliminar</strong>
         datos en las tablas correspontienes ademas de respaldar la base de datos y checar estadisticas del sitio. 
      </p> <br>
      <h3>Para aprender a manipular el sitio administrativo, presta atención a el siguiente video tutorial.</h3>

    </div>
</div>
  </div>
  <script type="text/javascript" src="js/menu.js"></script>   
</body>
  
</html>