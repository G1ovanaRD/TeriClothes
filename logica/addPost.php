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


    if(!isset($_POST["post-title"]) || !isset($_POST["post-content"]) ){
        header("Location: http://localhost/proyecto/foro.php?error=Datos incompletos");

        return;
    }


    $posttitle = $_POST["post-title"];
    $postcontent = $_POST["post-content"];
    $id_resp = $_POST["id_resp"];

    $sql ="INSERT INTO `post`(`contenidoo`, `id_resp`, `usuario`, `titulo`) VALUES ('" . $postcontent. "' , $id_resp , '".$usuario."','" . $posttitle. "')";

    if ($id_resp == "0") {
        $sql ="INSERT INTO `post`(`contenidoo`, `id_resp`, `usuario`, `titulo`) VALUES ('" . $postcontent. "' ,NULL, '".$usuario."','" . $posttitle. "')";
    }
    
    try{
        mysqli_query($conexion, $sql);

        if($id_resp == "0") {
            header("Location: http://localhost/proyecto/foro.php");
        } else {
            header("Location: http://localhost/proyecto/post.php?id=$id_resp");
        }
    }catch(Exception $e){
        header("Location: http://localhost/proyecto/foro.php?error=" . $e->getMessage());
    }
    
?>