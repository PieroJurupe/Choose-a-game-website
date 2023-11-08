<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="registro.css">
  </head>
  <body>
    <form method="post">

      <h2>Login</h2>
      <p></p>
      <div class="input-wrapper">
        <input type="text" name="name" placeholder="Nombre" />
        <img class="input-icon" src="img/name.svg" alt="" />
      </div>
      <div class="input-wrapper">
        <input type="password" name="pass" placeholder="Contraseña" />
        <img class="input-icon" src="img/password.svg" alt="" />
      </div>
      <input
        class="button"
        type="submit"
        name="login"
        value="Ingresar"
      />
      <p><a href="registro.php">¿No tienes Cuenta?</a></p>  
    </form>
<?php
include("logeo.php");

?>
  </body>
</html>
