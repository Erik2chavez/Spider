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
     <link rel="stylesheet" href="css/nivo-slider.css">
    <link rel="stylesheet" href="css/mi-slider.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.nivo.slider.js"></script>

    <script type="text/javascript"> 
        $(window).on('load', function() {
            $('#slider').nivoSlider(); 
        }); 
    </script>
    <meta charset="UTF-8">
    <title>Brandcompany</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    
    <link href="https://file.myfontastic.com/3E5wdVxcivixeTpiFSJR28/icons.css" rel="stylesheet">
    
</head>
<body>
    
     <header class="main-header">
         <div class="container container--flex">
             
         </div>
     </header>
   
     <nav class="main-nav">
        <div class="fixed">
         <div class="container container--flex">
             <span class="icon-menu" id="btnmenu" > </span>
            
             <ul class="menu" id="menu">
                <li><a href="indexlogin.php" class="menu__link menu__link--select">Brandcompany</a></li>
                
                 <li><a href="nosotros.html" class="menu__link">Nosotros</a></li>
                 <li><a href="login.html" class="menu__link loginp">Iniciar sesión</a></li>
                  <li><a href="registro.html" class="menu__link loginr">Registrarse</a></li>
                  <li><a href="video.php" class="menu__link online">Online</a></li>
                 <li><a href="#contacto" class="menu__link">Contacto</a></li>

             </ul>
         </div>
     </div> 
         </nav>
         
     
   <div class="slider-wrapper theme-mi-slider">
        <div id="slider" class="nivoSlider">     
            <img src="img/1.1.jpg" alt="" title="#htmlcaption1" />    
            <img src="img/2.jpg" alt="" title="#htmlcaption2" />    
            <img src="img/3.jpg" alt="" title="#htmlcaption3" />     
        </div> 
        <div id="htmlcaption1" class="nivo-html-caption">     
            <h1>Sean Bienvenidos</h1>
            <p>En BrandConnect estamos para servirte</p>
        </div>
        <div id="htmlcaption2" class="nivo-html-caption">     
            <h1>Una empresa diferente</h1>
            <p>Conoce nuestros proyectos con arduino</p>
        </div>
        <div id="htmlcaption3" class="nivo-html-caption">     
            <h1>Sitios web para toda clase de servicios</h1>
            <p>Administra tu empresa desde tu sitio web</p>
        </div>
    </div>    

     <main class="main">
      
    
     
        
         <section class="group main__about__description">
             <div class="container container--flex">
                 <div class="column column--50">
                     <a href="img/persona1.jpg"><img src="img/persona1.jpg" alt=""></a>
                 </div>
                 <div class="column column--50">
                     <h3 class="column__title">Bienvenido: <?php echo $_SESSION['nombre']; ?></h3>
                     <p class="column__txt">Nuestro equipo esta dedicado a brindarte una experiencia profecional y de calidad..
                     </p>
                     <a href="#contacto" class="btn btn--contact">Contacto</a>
                 </div>
             </div>
         </section>
         
         
         
         <section class="group works">
             <h2 class="group__title">Proyectos realizados y planes a futuro.</h2>
             <div class="container container--flex">
                 <div class="column column--50--25">
                     <img src="img/maqueta/esta.jpeg" alt="" class="works__img">
                     <div class="works__title">Maqueta estadio</div>
                     <div class="works__price"><a href="maqueta.html" class="btn btn--contact">Leer</a></div>
                 </div>
                 <div class="column column--50--25">
                     <img src="img/pr2.jpg" alt="" class="works__img">
                     <div class="works__title">Desarrollo Android</div>
                     <div class="works__price"><a href="android.html" class="btn btn--contact">Leer</a></div>
                 </div>
                 <div class="column column--50--25">
                     <img src="img/pr3.jpg" alt="" class="works__img">
                     <div class="works__title">Proyectos Arduino</div>
                     <div class="works__price"><a href="arduino.html" class="btn btn--contact">Leer</a></div>
                 </div>
                 <div class="column column--50--25">
                     <img src="img/pr4.jpg" alt="" class="works__img">
                     <div class="works__title">Transmicion en vivo</div>
                     <div class="works__price"><a href="video.php" class="btn btn--contact">Leer</a></div>
                 </div>
             </div>
         </section>
         
     </main>
     <footer class="main-footer">
             <div class="container container--flex">
                 <div class="column column--33">
                    <a name="contacto"></a>
                     <div class="column__title">¿Por que trabajar con nosotros?</div>
                     <p class="column__txt">Somos una empresa formada por estudiantes universitarios dedicados a la implementacion de 
                     soluciones tecnologicas.</p>
                 </div>
                 <div class="column column--33">
                    <div class="column__title">Contáctanos</div>
                    <p class="column__txt">Brandcompany@gmail.com</p> 
                    <p class="column__txt">+52-618-242-99-46</p> 
                    <p class="column__txt">Universidad Tecnologica de Durango</p> 
                        <p class="column__txt"><a href="AvisoPrivacidad.pdf">Aviso de privacidad</a></p> 
                 </div>
                 <div class="column column--33">
                     <div class="column__title">Buscanos en nuestras redes</div>
                     <p class="column__txt"><a href="facebook.com" class="icon-facebook">Facebook</a></p>
                     <p class="column__txt"><a href="" class="icon-twitter">Twitter</a></p>
                     <p class="column__txt"><a href="" class="icon-youtube">Youtube</a></p>
                 </div>
                 <p class="copy">BrandCompany Derechos reservados</p>-
             </div>
         </footer>

         <script type="text/javascript" src="js/menu.js"></script>
</body>
</html>