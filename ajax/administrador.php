<?php

    include("../class/class-con.php");
   

    $conexion = new Conexion();

    switch($_GET["accion"]){

        case "'agregar-contenido'":
            $contenido = new Contenido(1, $_POST["tipo"], $_POST["estudio"], $_POST["idioma"], $_POST["edad"], $_POST["nombre"], $_POST["urlcontenido"], $_POST["urlimg"], $_POST["descripcion"], $_POST["fechaSubida");
            echo $contenido->insertarContenido($conexion);
        break;

        case "''":
           
        break;

        case "''":
           
        break;

    }

?>