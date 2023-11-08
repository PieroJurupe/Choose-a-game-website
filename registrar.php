<?php
include("conexion.php");
if(isset($_POST['register'])){
if(
strlen($_POST['name'])>=1 &&
strlen($_POST['mail'])>=1 &&
strlen($_POST['pass'])>=1 
){
$name=trim($_POST['name']);
$mail=trim($_POST['mail']);
$pass=trim($_POST['pass']);
$consulta="INSERT INTO usuarios(nom_us,pass_us,cor_us)
VALUES('$name','$pass','$mail')";
$resultado= mysqli_query($conex,$consulta);
if($resultado){
  ?>
<h3 class="success">Registro completado correctamente</h3>
  <?php
}
else{
    ?>
    <h3 class="error">Ocurrio un error</h3>
      <?php 
}
}
else{
    ?>
    <h3 class="error">Llenar todos los campos</h3>
      <?php  
}
}
?>