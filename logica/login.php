<?php
    require 'conexion.php';


    if(!isset($_POST["user"])|| !isset($_POST["pass"])){
        header("Location: http://localhost/proyecto/sesion.php?error=Error al iniciar sesion");
        return;
    }

    $user=($_POST["user"]);
    $pass=($_POST["pass"]);

    $sql="SELECT COUNT(*) as login FROM usuarios WHERE usuario='".$user."' AND contraseña='".$pass."'";
    
    $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);

    //validar que el login sea exitoso,si da mas de 1
    session_start();
    if($row['login']>0){
        //login exitoso
        $_SESSION['usuario']=$user; ///guardar el nombre de usuario
        $sql="SELECT rol FROM usuarios WHERE usuario='".$user."' AND contraseña='".$pass."'";
    
        $query=mysqli_query($conexion,$sql);
        $row=mysqli_fetch_array($query);
        $_SESSION['rol']=$row['rol'];
        //redireccionar al 
        header("Location: http://localhost/proyecto/principal.php");


    }else{

        //login incorrecto
        header("Location: http://localhost/proyecto/sesion.php?error=Error al iniciar sesion");

    }
?>