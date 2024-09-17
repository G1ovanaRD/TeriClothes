<?php
    require 'conexion.php';

    if(!isset($_POST["usuario"]) || !isset($_POST["contraseña"]) || !isset($_POST["correo"]) || !isset($_POST["rol"])) 
        {
            
            header("Location: ./principal.php?error=Datos incompletos");
            return;
        }


    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    $correo = $_POST["correo"];
    $rol = $_POST["rol"];

    
    
    $sql="INSERT INTO `usuarios`(`usuario`, `contraseña`, `rol`, `correo`) VALUES
     ('".$usuario."','". $contraseña ."','". $rol ."','". $correo ."')";
    
    try{
        mysqli_query($conexion, $sql);

        header("Location: http://localhost/proyecto/sesion.php");
    }catch(Exception $e){
        header("Location: http://localhost/proyecto/principal.php?error=" . $e->getMessage());
    }
    
?>