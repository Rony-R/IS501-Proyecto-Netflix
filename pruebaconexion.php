<?php

    $db = "oci:dbname=XE";
    $usuario = "NETFLIX";
    $password = "oracle";
    $conexion;

    $conexion = new PDO($db, $usuario, $password);

    if($conexion)
       echo "exito";
       else
        echo "fallo";



?>