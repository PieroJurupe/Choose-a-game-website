<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="registro.css" />
    <title>Registro</title>
  </head>
  <body>
    <form method="post">

      <h2>Inicia el registro</h2>
      <p></p>
      <div class="input-wrapper">
        <input type="text" name="name" placeholder="Nombre" />
        <img class="input-icon" src="img/name.svg" alt="" />
      </div>
      <div class="input-wrapper">
        <input type="mail" name="mail" placeholder="Correo electrónico" />
        <img class="input-icon" src="img/email.svg" alt="" />
      </div>
      <div class="input-wrapper">
        <input type="password" name="pass" placeholder="Contraseña" />
        <img class="input-icon" src="img/password.svg" alt="" />
      </div>
      <input
        class="button"
        type="submit"
        name="register"
        value="Registrarse"
      />
      <p><a href="login.php">¿Ya tengo Cuenta?</a></p>  
    </form>
<?php
include("registrar.php");

?>

  </body>
</html>
