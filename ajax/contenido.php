<?php
    include("../class/class-con.php");
    include("../class/class-Contenido.php");

 

    $conexion = new Conexion();

  /*  $contenido = new Contenido (null, null, null, null, null, null, null, null, null, null, 2);
    echo $contenido->obtenerContenido($conexion);*/

    switch($_GET["accion"]){

        case "'obtener-contenido'":
            $contenido = new Contenido (null, null, null, null, null, null, null, null, null, null, $_POST["codCat"]);
            echo $contenido->obtenerContenido($conexion);
        break;

        case "'obtener-generos'":
           
            echo $contenido->obtenerContenido2($conexion);
        break;
    }

    
?>