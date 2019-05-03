<?php

    include("../class/class-con.php");
    include("../class/class-Contenido.php");
    include("../class/class-pelicula.php");

    $conexion = new Conexion();

    switch($_GET["accion"]){

        case "'agregar-contenido'":
            $contenido = new Contenido(null, $_POST["tipo"], $_POST["estudio"], $_POST["idioma"], $_POST["edad"], $_POST["nombre"], $_POST["urlcontenido"], $_POST["urlimg"], $_POST["descripcion"], $_POST["fechaSubida"]);
            echo $contenido->insertarContenido($conexion);
        break;

        case "'agregar-pelicula'":
            $pelicula = new Pelicula(null, $_POST["duracion"]);
            echo $pelicula->insertarPelicula($conexion);
        break;


    }

?>