<?php
    require 'conexion.php';

    if(!isset($_GET['id'])){
        header("Location: http://localhost/proyecto/principal.php?error=Error al eliminar");

        return;
    }

    $id = $_GET['id'];
    $sql = "DELETE FROM tendencia WHERE id =" . $id;

    try{
        mysqli_query($conexion, $sql);

        header("Location: http://localhost/proyecto/principal.php");
    }catch(Exception $e){
        header("Location: http://localhost/proyecto/principal.php?error=" . $e->getMessage());
    }
?>