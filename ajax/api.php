<?php

    include("../class/class-Conexion.php");
    include("../class/class-Contenido.php");
    include("../class/class-Pantalla.php");
    include("../class/class-Regis-Tarjeta.php");
    include("../class/class-Usuario.php");

    $conexion = new Conexion();

    switch($_GET["accion"]){

        case "'insertar-usuario'":
            $usuario = new Usuario(null, $_POST["tipo-plan"], $_POST["genero"], $_POST["correo"], $_POST["contra"], $_POST["telefono"]);
            echo $usuario->insertarUsuario($conexion);
        break;

        case "'insertar-registro-tarjeta'":
            $r1 = new Regis_Tarjeta(null, null, $_POST["tipo-tarj"], $_POST["nombre-tarj"], $_POST["apellido-tarj"], $_POST["num-tarj"], $_POST["codigo-cvv"], $_POST["fecha-venc-tarj"]);
            echo $r1->insertarTarjeta($conexion);
        break;

        case "'verificar-usuario'":
            $u1 = new Usuario(null, null, null, $_POST["correo"], $_POST["contra"], null);
            echo $u1->verificarUsuario($conexion);
        break;

        case "'crearLogin'":
            session_start(); 

            $_SESSION["Usuario"] = $_POST["correo"];
            $_SESSION["Contrasenia"] = $_POST["contra"];

            if($_SESSION["Usuario"] != "" && $_SESSION["Contrasenia"] != "")
                echo ("1");
            else
                echo ("0");

        break;

        case "'sesion-id'":
            session_start();

            $_SESSION["CodUsuario"] = $_POST["codusuario"];

            if($_SESSION["CodUsuario"] != "")
                echo "1";
            else
                echo "0";

        break;

        case "'obtener-info-pantallas'":
            $u2 = new Usuario ($_POST["cod"], null, null, null, null, null);
            echo $u2->obtenerPantallas($conexion);
        break;

        case "'insertar-pantalla'":
            $p1 = new Pantalla(null, $_POST["codusuario"], $_POST["madurez"], $_POST["idioma"], $_POST["estiloSub"], $_POST["confiRepro"], $_POST["nombre"], null, null);
            echo $p1->insertarPantalla($conexion);
        break;

        case "'actualizar-pantalla'":
            $p2 = new Pantalla(null, $_POST["id-usuario"], $_POST["madurez-nuevo"], $_POST["idioma-nuevo"], null, null, $_POST["nombre-nuevo"], $_POST["nombre-viejo"], null);
            echo $p2->actualizarPantalla($conexion);
        break;

        case "'verificarCorreo'":
            $u4 = new Usuario(null, null, null, $_POST["nuevoCorreo"], null, null);
            echo $u4->verificarCorreo($conexion);
        break;

        case "'cerrar-sesion'":
            session_start();

            if(session_destroy())
                echo 1;
            else
                echo 0;
        break;

        case "'actualizar-correo'":
            $u5 = new Usuario(null, null, null, $_POST["nuevoCorreo"], $_POST["correoActual"], null);
            echo $u5->actualizarCorreo($conexion);
        break;

        case "'actulizar-contra'":
            $u6 = new Usuario(null, null, null, $_POST["vieja"], $_POST["nueva"], null);
            echo $u6->actualizarContrasenia($conexion);
        break;

        case "'actualizar-telefono'":
            $u6 = new Usuario(null, null, null, $_POST["telefono"], $_POST["usuario"], null);
            echo $u6->actualizarTelefono($conexion);
        break;

        case "'datos-cuenta'":
            $u7 = new Usuario(null, null, null, $_POST["correo"], null, null);
            echo $u7->datosCuenta($conexion);
        break;

        case "'borrar-telefono'":
            $u8 = new Usuario(null, null, null, $_POST["telefono"], $_POST["usuario"], null);
            echo $u8->eliminarTelefono($conexion);
        break;

        case "'actualizar-info-pago'":
            $rt1 = new Regis_Tarjeta(null, $_POST["codUsuario"], $_POST["tipoTarjeta"], $_POST["nuevoNombre"], $_POST["nuevoApellido"], $_POST["nuevaTarjeta"], $_POST["nuevoCodigo"], $_POST["nuevaFecha"]);
            echo $rt1->actualizarTarjeta($conexion);
        break;

        case "'datos-hist-pago'":
            $u9 = new Usuario($_POST["codigo"], null, null, null, null, null);
            echo $u9->datosHistPago($conexion);
        break;

        case "'datos-hist-pago2'":
            $u10 = new Usuario($_POST["codigo"], null, null, null, null, null);
            echo $u10->datosHistPago2($conexion);
        break;

        case "'obtener-id'":
            $u11 = new Usuario(null, null, null, $_POST["usuario"], null, null);
            echo $u11->obtenerIdUsuario($conexion);
        break;

        case "''":
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