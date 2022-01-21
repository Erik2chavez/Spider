<!DOCTYPE html>
<html>
  <head>
   
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">

  </head>
  <body>

    <div class="registro">

     <a href="index.html"> <img src="img/robot.png" class="avatar" alt="Avatar Image"></a>
      <h1>Iniciar</h1>
      <form action="crear_cuenta_admin.php" method="POST">
        <!-- Usuario -->
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" placeholder="Name">
        <label for="ape1">Apellido</label>
        <input type="text" name="ape1" placeholder="last Name">
        <label for="ape2">Segundo apellido</label>
        <input type="text" name="ape2" placeholder="last Name">
        <label for="curp">Curp</label>
        <input type="text" name="curp" placeholder="Enter curp">
        <label for="mail">Colonia</label>
        <input type="text" name="direccion" placeholder="Enter curp">
        <!-- PASSWORD -->
        <label for="password">Telefono</label>
        <input type="text" name="telefono" placeholder="Enter">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" value="Iniciar">
        
       
         
      </form>
    </div>
  </body>
</html>
