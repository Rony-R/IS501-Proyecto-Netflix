<?php
    include("../class/class-con.php");
    include("../class/class-Contenido.php");

    

    $conexion = new Conexion();

    switch($_GET["accion"]){

        case "'obtener-contenido'":
            $contenido = new Contenido (null, null, null, null, null, null, null, null, null, null, $_POST["codCat"] );
            echo $contenido->obtenerContenido($conexion);
        break;

        case "'obtener-info-contenido'":
            $u2 = new Usuario (null, null, null, null, null, null, null, null, null, null, 1 );
            echo $u2->obtenerInformacion($conexion);
        break;
    }

    
?>