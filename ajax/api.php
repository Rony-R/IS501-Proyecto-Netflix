<?php

    include("../class/class-Conexion.php");
    include("../class/class-Contenido.php");
    include("../class/class-Pantalla.php");
    include("../class/class-Regis-Tarjeta.php");
    include("../class/class-Usuario.php");

    $conexion = new Conexion();

    switch($_GET["accion"]){

        case "'insertar-usuario'":
            $usuario = new Usuario(2, $_POST["tipo-plan"], $_POST["genero"], $_POST["correo"], $_POST["contra"], $_POST["telefono"]);
            echo $usuario->insertarUsuario($conexion);
        break;

        case "''":
        break;

        case "''":
        break;

        case "''":
        break;

        case "''":
        break;

    }

?>