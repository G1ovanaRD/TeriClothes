<?php
    require 'conexion.php';

    session_start();

    if (isset($_SESSION["usuario"])){
        //sesión activa
        $usuario =$_SESSION['usuario'];
        $rol = $_SESSION['rol'];

    } else {
        //no existe ninguna sesión
        header("Location: http://localhost/proyecto/sesion.php");
    }


    if(!isset($_POST["title"]) || !isset($_POST["tipo"]) || !isset($_POST["intro"]) || !isset($_FILES["imagen"]) ||
        !isset($_POST["linkTe"]) ||  ($_FILES["imagen"]["name"] == "")) 
        {
            
            header("Location: ./principal.php?error=Datos incompletos");
            return;
        }


    $title = $_POST["title"];
    $intro = $_POST["intro"];
    $tipo = $_POST["tipo"];
    $linkTe = $_POST["linkTe"];

    $imagen = $_FILES["imagen"]["name"];
    $ext= $_FILES["imagen"]["type"];
    $path = $_FILES["imagen"]["tmp_name"];



    //VALIDAR EXTENSION DE IMAGENES
    if(!strpos($ext, 'gif') && !strpos($ext, 'jpeg') && !strpos($ext, 'png') && !strpos($ext, 'jpg')){
        header("Location: http://localhost/proyecto/principal.php?error=Formato de imagen incorrecto");
        return;
    }

    
    
    $sql="INSERT INTO `tendencia`(`titulo`, `imagen`, `tipo`, `intro`, `usuario`, `linkTe`) VALUES
     ('". $title ."','". $imagen ."','". $tipo ."','". $intro ."','".$usuario."','". $linkTe ."')";
    
    try{
        mysqli_query($conexion, $sql);
        move_uploaded_file($path,"../img/" . $imagen);

        header("Location: http://localhost/proyecto/principal.php");
    }catch(Exception $e){
        header("Location: http://localhost/proyecto/principal.php?error=" . $e->getMessage());
    }
    
?>