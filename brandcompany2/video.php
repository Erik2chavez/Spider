<?php
session_start();
$sesion=$_SESSION['nombre'];
if ($sesion==null || $sesion=''){
   header('location: login.html');
    die();
    
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Brandcompany</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    
    <link href="https://file.myfontastic.com/3E5wdVxcivixeTpiFSJR28/icons.css" rel="stylesheet">
    
</head>
<body>
    
     <header class="main-header">
         <div class="container container--flex">
             <div class="logo-container column column--50">
                 <h1 class="logo">BrandCompany</h1></div>
             
         </div>
     </header>
   
     <nav class="main-nav">
         <div class="container container--flex">
             <span class="icon-menu fixed" id="btnmenu" > </span>
             <ul class="menu" id="menu">
                 <li class="menu__item"><a href="indexlogin.php" class="menu__link ">Inicio</a></li>
                 <li class="menu__item"><a href="nosotros.php" class="menu__link">Nosotros</a></li>
                 <li class="menu__item"><a href="video.php" class="menu__link menu__link--select">Partido</a></li>
                 <li class="menu__item"><a href="logout.php" class="menu__link">Cerrar sesión</a></li>
             </ul>
             
         </div>
         </nav>
         
     
     <section class="banner">
         <img src="img/banner.jpg" alt="" class="banner__img">
         <div class="banner__content">Para acceder a el video da click a el enlace de youtube</div>
     </section>
 <section class="banner2">
         <img src="img/extra/cancha.jpg" alt="" class="banner2__img">
         <div class="banner2__content">Participa en nuestro foro</div>
     </section>
  
  <script type="text/javascript" src="js/menu.js"></script>    
</body>
  
</html>