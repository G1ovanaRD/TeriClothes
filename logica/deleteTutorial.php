<?php
    require 'conexion.php';

    if(!isset($_GET['id'])){
        header("Location: http://localhost/proyecto/tutorial.php?error=Error al eliminar");

        return;
    }

    $id = $_GET['id'];
    $sql = "DELETE FROM tutorial WHERE id =" . $id;

    try{
        mysqli_query($conexion, $sql);

        header("Location: http://localhost/proyecto/tutorial.php");
    }catch(Exception $e){
        header("Location: http://localhost/proyecto/tutorial.php?error=" . $e->getMessage());
    }
?>