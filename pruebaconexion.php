<?php

    $db = "oci:dbname=XE";
    $usuario = "NETFLIX";
    $password = "oracle";
    $conexion;

    $conexion = new PDO($db, $usuario, $password);
    $c = oci_pconnect($usuario, $password,$db);

    if($c)
       echo "exito";
       else
        echo "fallo";

    if($conexion)
       echo "exito";
       else
        echo "fallo";



?>