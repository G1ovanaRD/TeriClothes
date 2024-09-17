<?php
    require 'conexion.php';

    session_start();

    if (isset($_SESSION["usuario"])){
        //sesión activa
        $usuario =$_SESSION['usuario'];
        $rol = $_SESSION['rol'];

    } /*else {
        //no existe ninguna sesión
        header("Location: http://localhost/proyecto/sesion.php");
    }*/


    if(!isset($_POST["title"]) || !isset($_POST["intro"]) || !isset($_FILES["imagen"]) ||
        !isset($_POST["con1"]) || !isset($_FILES["imagen1"]) ||
        !isset($_POST["con2"]) || !isset($_FILES["imagen2"]) ||
        !isset($_POST["con3"]) || !isset($_FILES["imagen3"]) ||
        !isset($_POST["linkPa"]) ||  ($_FILES["imagen"]["name"] == "" &&  $_FILES["imagen1"]["name"] == "" &&  $_FILES["imagen2"]["name"] == "" && $_FILES["imagen3"]["name"] == "")) 
        {
            
            header("Location: ./tutorial.php?error=Datos incompletos");
            return;
        }


    $title = $_POST["title"];
    $intro = $_POST["intro"];
    $con1 = $_POST["con1"];
    $con2 = $_POST["con2"];
    $con3 = $_POST["con3"];
    $linkPa = $_POST["linkPa"];

    $imagen = $_FILES["imagen"]["name"];
    $tipo= $_FILES["imagen"]["type"];
    $path = $_FILES["imagen"]["tmp_name"];

    $imagen1 = $_FILES["imagen1"]["name"];
    $tipo1= $_FILES["imagen1"]["type"];
    $path1 = $_FILES["imagen1"]["tmp_name"];

    $imagen2 = $_FILES["imagen2"]["name"];
    $tipo2= $_FILES["imagen2"]["type"];
    $path2 = $_FILES["imagen2"]["tmp_name"];

    $imagen3 = $_FILES["imagen3"]["name"];
    $tipo3 = $_FILES["imagen3"]["type"];
    $path3 = $_FILES["imagen3"]["tmp_name"];


    //VALIDAR EXTENSION DE IMAGENES
    if(!strpos($tipo, 'gif') && !strpos($tipo, 'jpeg') && !strpos($tipo, 'png') && !strpos($tipo, 'jpg') && 
        !strpos($tipo1, 'gif') && !strpos($tipo1, 'jpeg') && !strpos($tipo1, 'png') && !strpos($tipo1, 'jpg') &&
        !strpos($tipo2, 'gif') && !strpos($tipo2, 'jpeg') && !strpos($tipo2, 'png') && !strpos($tipo2, 'jpg') &&
        !strpos($tipo3, 'gif') && !strpos($tipo3, 'jpeg') && !strpos($tipo3, 'png') && !strpos($tipo3, 'jpg')){
        header("Location: http://localhost/proyecto/tutorial.php?error=Formato de imagen incorrecto");

        return;
    }

    
    $sql="INSERT INTO `tutorial`( `titulo`, `imagen`, `con1`, `imagen1`, `con2`, `imagen2`, `con3`, `imagen3`, `linkPa`, `intro`, `usuario`) VALUES 
    ('". $title ."','". $imagen ."','". $con1 . "','". $imagen1 ."','". $con2 . "','". $imagen2 ."','". $con3 . "','". $imagen3 ."','". $linkPa ."','". $intro ."','".$usuario."')";
    

    
    try{
        mysqli_query($conexion, $sql);
        move_uploaded_file($path,"../img/" . $imagen);
        move_uploaded_file($path1,"../img/" . $imagen1);
        move_uploaded_file($path2,"../img/" . $imagen2);
        move_uploaded_file($path3,"../img/" . $imagen3);


        header("Location: http://localhost/proyecto/tutorial.php");
    }catch(Exception $e){
        header("Location: http://localhost/proyecto/tutorial.php?error=" . $e->getMessage());
    }
    
?>