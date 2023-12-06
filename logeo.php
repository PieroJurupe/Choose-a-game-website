<?php
include("conexion.php");
session_start(); 

if(isset($_POST['login'])){
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['pass']) >= 1 
    ){
        $name = trim($_POST['name']);
        $pass = trim($_POST['pass']);
        $consulta = "SELECT * FROM usuarios WHERE nom_us = '$name' AND pass_us = '$pass'";
        $resultado = mysqli_query($conex, $consulta);

        if(mysqli_num_rows($resultado) > 0){
            ?>
            <h3 class="success">Inicio de sesión exitoso</h3>
            <?php
            $usuario = mysqli_fetch_assoc($resultado);
            $_SESSION['nombre_usuario'] = $usuario['nom_us']; 
            header("Location: index.php");
            exit();
        } else {

            ?>
            <h3 class="error">Credenciales incorrectas</h3>
            <?php
        }
    } else {
        ?>
        <h3 class="error">Llenar todos los campos</h3>
        <?php  
    }
}
?>