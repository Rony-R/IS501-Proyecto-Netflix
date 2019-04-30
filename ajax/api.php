<?php

    include("../class/class-Conexion.php");
    include("../class/class-Contenido.php");
    include("../class/class-Pantalla.php");
    include("../class/class-Regis-Tarjeta.php");
    include("../class/class-Usuario.php");

    $conexion = new Conexion();

    switch($_GET["accion"]){

        case "'insertar-usuario'":
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

        case "'crearLogin'":
            session_start(); 

            $_SESSION["Usuario"] = $_POST["correo"];
            $_SESSION["Contrasenia"] = $_POST["contra"];

            if($_SESSION["Usuario"] != "" && $_SESSION["Contrasenia"] != "")
                echo ("1");
            else
                echo ("0");

        break;

        case "'sesion-pantallas'":
            session_start();

            $_SESSION["Creadas"] = $_POST["creadas"];
            $_SESSION["Posibles"] = $_POST["posibles"];
            $_SESSION["CodUsuario"] = $_POST["usuario"];

            if($_SESSION["Creadas"] != "" && $_SESSION["Posibles"] != "")
                echo ("1");
            else
                echo ("0");

        break;

        case "'pantallas-usuario'":
            $u2 = new Usuario (null, null, null, $_POST["user"], null, null);
            echo $u2->obtenerPantallas($conexion);
        break;

        case "'nombre-pantallas'":
            $u3 = new Usuario ($_POST["idUser"], null, null, null, null, null);
            echo $u3->obtenerNombrePantallas($conexion);
        break;

        case "'insertar-pantalla'":
            $p1 = new Pantalla(null, $_POST["codusuario"], $_POST["madurez"], $_POST["idioma"], $_POST["estiloSub"], $_POST["confiRepro"], $_POST["nombre"], null, null);
            echo $p1->insertarPantalla($conexion);
        break;

        case "'actualizar-pantalla''":
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