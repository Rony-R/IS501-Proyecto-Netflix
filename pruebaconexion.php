<?php

    $db = "oci:dbname=XE";
    $usuario = "NETFLIX";
    $password = "oracle";
    $conexion;

   // $conexion = new PDO($db, $usuario, $password);

        $instruccion = "WITH NUM_CONTENIDO AS (
            SELECT CODIGO_CATEGORIA, COUNT(*) CANTIDAD_CONTENIDO
            FROM TBL_CATEGOIAS_X_CONTENIDO
            GROUP BY CODIGO_CATEGORIA
            )
            SELECT A.CODIGO_CATEGORIA, A.CODIGO_CONTENIDO, C.CANTIDAD_CONTENIDO,B.CODIGO_TIPO_CONTENIDO, D.TIPO_CONTENIDO, E.NOMBRE_ESTUDIO, F.IDIOMA, G.NOMBRE_CALIF, G.DESCRIPCION AS DESC_EDAD, B.NOMBRE_CONTENIDO,B.URL_VIDEO, B.URL_MINIATURA, B.DESCRIPCION, H.DURACION_PELI, I.UNIDAD
            FROM TBL_CATEGOIAS_X_CONTENIDO A
            LEFT JOIN TBL_CONTENIDO B
            ON (A.CODIGO_CONTENIDO = B.CODIGO_CONTENIDO)
            LEFT JOIN NUM_CONTENIDO C
            ON (A.CODIGO_CATEGORIA = C.CODIGO_CATEGORIA)
            LEFT JOIN TBL_TIPO_CONTENIDO D
            ON (B.CODIGO_TIPO_CONTENIDO = D.CODIGO_TIPO_CONTENIDO)
            LEFT JOIN TBL_ESTUDIOS E
            ON (B.CODIGO_ESTUDIO = E.CODIGO_ESTUDIO)
            LEFT JOIN TBL_IDIOMAS F
            ON (B.CODIGO_IDIOMA = F.CODIGO_IDIOMA)
            LEFT JOIN TBL_CALIFICACION_EDAD G
            ON (B.CODIGO_CALIF_EDAD = G.CODIGO_CALIF_EDAD)
            LEFT JOIN TBL_PELICULAS H
            ON(B.CODIGO_CONTENIDO = H.CODIGO_PELICULA)
            LEFT JOIN TBL_UNIDADES I
            ON (H.CODIGO_UNIDAD = I.CODIGO_UNIDAD)
            WHERE A.CODIGO_CATEGORIA = 1";

            $resultado = array();

            $resultado = $conexion->$instruccion;

           echo   json_encode($resultado);

            

?>