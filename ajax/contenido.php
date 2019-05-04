<?php
    include("../class/class-Conexion.php");
    include("../class/class-Contenido.php");


    $conexion = new Conexion();

    switch($_GET["accion"]){

        case "'obtener-contenido'":
            $contenido = new Contenido ($_POST["codCat"], null);
            echo $contenido->obtenerContenido($conexion);
        break;

        case "'obtener-info-contenido'":
            $u2 = new Usuario ($_POST["codCont"], null, null, null, null, null);
            echo $u2->obtenerInformacion($conexion);
        break;
    }

    
?>