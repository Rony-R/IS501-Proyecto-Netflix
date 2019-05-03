<?php

    include("../class/class-con.php");
   

    $conexion = new Conexion();

    switch($_GET["accion"]){

        case "'agregar-pelicula'":
            $usuario = new Usuario(9, $_POST["tipo-plan"], $_POST["genero"], $_POST["correo"], $_POST["contra"], $_POST["telefono"]);
            echo $usuario->insertarUsuario($conexion);
        break;

        case "'insertar-registro-tarjeta'":
            $r1 = new Regis_Tarjeta(1, $_POST["***codigo del usuario***"], $_POST["tipo-tarj"], $_POST["nombre-tarj"], $_POST["apellido-tarj"], $_POST["num-tarj"], $_POST["codigo-cvv"], $_POST["fecha-venc-tarj"]);
            echo $r1->insertarTarjeta($conexion);
        break;

        case "'verificar-usuario'":
            $u1 = new Usuario(null, null, null, $_POST["correo"], $_POST["contra"], null);
            echo $u1->verificarUsuario($conexion);
        break;

    }

?>