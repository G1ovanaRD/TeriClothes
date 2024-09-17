<?php
    require 'conexion.php';

    
    if(!isset($_POST["id"]) || !isset($_POST["title"]) || !isset($_POST["tipo"]) || !isset($_POST["intro"]) || !isset($_FILES["imagen"]) ||
    !isset($_POST["linkTe"]) ||  ($_FILES["imagen"]["name"] == "")) 
    {
        
        header("Location: ./principal.php?error=Datos incompletos");
        return;
    }

    $id=$_POST["id"];
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


    $sql="UPDATE tendencia SET titulo='".$title."',imagen='".$imagen."',tipo='".$tipo."',intro='".$intro."',linkTe='".$linkTe."' WHERE id=".$id;


    try{
        echo $id; 
        mysqli_query($conexion, $sql);
        move_uploaded_file($path,"../img/" . $imagen);

        header("Location: http://localhost/proyecto/principal.php");
    }catch(Exception $e){
        header("Location: http://localhost/proyecto/principal.php?error=" . $e->getMessage());
    }
?>