<?php

session_start();
$conexion = oci_connect('NET6', 'oracle', 'localhost/XE');
if (!$conexion ) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

if($_POST["peticion"]=="estado"){
    $respuesta["codigo"]=1;
    echo json_encode($respuesta);
 }

if($_POST["peticion"]=="actualizar-registro"){
    $p_mensaje="";
    $p_codigo_mensaje=0;
    $ACTUALIZAR = oci_parse($conexion , 'begin P_ACTUALIZAR_CONFIG_SUB(:P_CODIGO_PANTALLA,
    :P_NOMBRE_FUENTE, 
    :P_COD_RGB_COLOR_FUENTE,
    :P_TAMANIO_FUENTE,
    :P_NOMBRE_SOMBRA,
    :P_COD_RGB_COLOR_SOMBRA,                    
    :P_COD_RGB_COLOR_FONDO,
    :P_COD_RGB_COLOR_VENTANA,
    :p_mensaje,
    :p_codigo_resultado); end;');
     oci_bind_by_name($ACTUALIZAR, ':P_CODIGO_PANTALLA',$_SESSION["idPantalla"]);
     oci_bind_by_name($ACTUALIZAR, ':P_NOMBRE_FUENTE',$_POST["nombre_fuente"]); 
     oci_bind_by_name($ACTUALIZAR, ':P_COD_RGB_COLOR_FUENTE',$_POST["cod_rgb_color_fuente"]);
     oci_bind_by_name($ACTUALIZAR, ':P_TAMANIO_FUENTE',$_POST["tamanio_fuente"]);
     oci_bind_by_name($ACTUALIZAR, ':P_NOMBRE_SOMBRA',$_POST["nombre_sombra"] );
     oci_bind_by_name($ACTUALIZAR, ':P_COD_RGB_COLOR_SOMBRA', $_POST["cod_rgb_color_sombra"]);                    
     oci_bind_by_name($ACTUALIZAR, ':P_COD_RGB_COLOR_FONDO',$_POST["cod_rgb_color_fondo"]);
     oci_bind_by_name($ACTUALIZAR, ':P_COD_RGB_COLOR_VENTANA',$_POST["cod_rgb_color_ventana"]);
     oci_bind_by_name($ACTUALIZAR, ':p_mensaje',$p_mensaje,1000);
     oci_bind_by_name($ACTUALIZAR, ':p_codigo_resultado',$p_codigo_mensaje,100);
     
     oci_execute($ACTUALIZAR);
     $respuesta["codigo"]=$p_codigo_mensaje;
     $respuesta["mensaje"]= $p_mensaje;
  
     oci_free_statement($ACTUALIZAR);
     oci_close($conexion);
     echo json_encode($respuesta);
      	
 } 

 if($_POST["peticion"]=="inicializar-registro"){

    $nombre_fuente=""; 
    $cod_rgb_color_fuente="";
    $tamanio_fuente="";
    $nombre_sombra="";
    $cod_rgb_color_sombra="";                    
    $cod_rgb_color_fondo="";
    $cod_rgb_color_ventana="";
    $p_mensaje="";
    $p_codigo_mensaje=0;
    $p_mensaje_1="";
    $p_codigo_mensaje_1=0;


    $CREAR = oci_parse($conexion , 'begin  P_CREAR_ESTILO_SUB(:P_CODIGO_PANTALLA,
    :p_mensaje,:p_codigo_resultado); end;');
    oci_bind_by_name($CREAR, ':P_CODIGO_PANTALLA',$_SESSION["idPantalla"]);
    oci_bind_by_name($CREAR, ':p_mensaje',$p_mensaje_1,100);
    oci_bind_by_name($CREAR, ':p_codigo_resultado',$p_codigo_mensaje_1,100);
    oci_execute($CREAR); 

    $respuesta["p_mensaje_1"]=$p_mensaje_1;
    $respuesta["p_codigo_mensaje_1"]=$p_codigo_mensaje_1;
    oci_free_statement($CREAR);
 

    $INICIALIZAR = oci_parse($conexion , 'begin  P_INICIALIZAR_CONFIG_SUB(:P_CODIGO_PANTALLA,
    :P_NOMBRE_FUENTE, 
    :P_COD_RGB_COLOR_FUENTE,
    :P_TAMANIO_FUENTE,
    :P_NOMBRE_SOMBRA,
    :P_COD_RGB_COLOR_SOMBRA,                    
    :P_COD_RGB_COLOR_FONDO,
    :P_COD_RGB_COLOR_VENTANA,
    :p_mensaje,
    :p_codigo_resultado); end;');
     oci_bind_by_name($INICIALIZAR, ':P_CODIGO_PANTALLA',$_SESSION["idPantalla"]);
     oci_bind_by_name($INICIALIZAR, ':P_NOMBRE_FUENTE',$nombre_fuente,100); 
     oci_bind_by_name($INICIALIZAR, ':P_COD_RGB_COLOR_FUENTE',$cod_rgb_color_fuente,100);
     oci_bind_by_name($INICIALIZAR, ':P_TAMANIO_FUENTE',$tamanio_fuente,100);
     oci_bind_by_name($INICIALIZAR, ':P_NOMBRE_SOMBRA',$nombre_sombra,100);
     oci_bind_by_name($INICIALIZAR, ':P_COD_RGB_COLOR_SOMBRA',$cod_rgb_color_sombra,100);                    
     oci_bind_by_name($INICIALIZAR, ':P_COD_RGB_COLOR_FONDO', $cod_rgb_color_fondo,100);
     oci_bind_by_name($INICIALIZAR, ':P_COD_RGB_COLOR_VENTANA',$cod_rgb_color_ventana,100);
     oci_bind_by_name($INICIALIZAR, ':p_mensaje',$p_mensaje,100);
     oci_bind_by_name($INICIALIZAR, ':p_codigo_resultado',$p_codigo_mensaje,100);
     oci_execute($INICIALIZAR); 

     $respuesta["codigo_respuesta"]=1;
     $respuesta["nombre_fuente"]=$nombre_fuente;
     $respuesta["cod_rgb_color_fuente"]=$cod_rgb_color_fuente; 
     $respuesta["tamanio_fuente"]=$tamanio_fuente;
     $respuesta["nombre_sombra"]=$nombre_sombra;
     $respuesta["cod_rgb_color_sombra"]=$cod_rgb_color_sombra;
     $respuesta["cod_rgb_color_fondo"]=$cod_rgb_color_fondo;
     $respuesta["cod_rgb_color_ventana"]=$cod_rgb_color_ventana;
     $respuesta["p_mensaje"]=$p_mensaje;
     $respuesta["p_codigo_mensaje"]=$p_codigo_mensaje;
     oci_free_statement($INICIALIZAR);
     oci_close($conexion);
     echo json_encode($respuesta);

 } 

 
if($_POST["peticion"]=="guardar-config-CR"){

    $p_mensaje="";
    $p_codigo_mensaje=0;

    $ACTUALIZAR = oci_parse($conexion , 'begin P_ACTUALIZAR_CONFIG_REP(:P_CODIGO_PANTALLA,:P_CODIGO_T_USO_DATO,
    :P_CODIGO_T_REPROD,:p_mensaje,:p_codigo_resultado); end;');

    oci_bind_by_name($ACTUALIZAR, ':P_CODIGO_PANTALLA',$_SESSION["idPantalla"]);
    oci_bind_by_name($ACTUALIZAR, ':P_CODIGO_T_USO_DATO',$_POST["uso-dato"]); 
    oci_bind_by_name($ACTUALIZAR, ':P_CODIGO_T_REPROD',$_POST["tipo-reproduccion"]); 
   
    oci_bind_by_name($ACTUALIZAR, ':p_mensaje',$p_mensaje,1000);
    oci_bind_by_name($ACTUALIZAR, ':p_codigo_resultado',$p_codigo_mensaje,100);
     
     oci_execute($ACTUALIZAR);
     $respuesta["p_codigo"]=$p_codigo_mensaje;
     $respuesta["p_mensaje"]= $p_mensaje;
  
     oci_free_statement($ACTUALIZAR);
     oci_close($conexion);
     echo json_encode($respuesta);
 }



 if($_POST["peticion"]=="inicializar-config-reprod"){

    $P_CODIGO_T_USO_DATO =0;
    $P_CODIGO_T_REPROD=0;
    $p_mensaje="";
    $p_codigo_mensaje=0;
    $p_mensaje_1="";
    $p_codigo_mensaje_1=0;

    $CREAR_1 = oci_parse($conexion , 'begin P_CREAR_CONFIG_REP(:P_CODIGO_PANTALLA,:P_MENSAJE,:P_CODIGO_RESULTADO)
    ; end;');
    oci_bind_by_name($CREAR_1, ':P_CODIGO_PANTALLA',$_SESSION["idPantalla"]);
    oci_bind_by_name($CREAR_1, ':p_mensaje',$p_mensaje_1,100);
    oci_bind_by_name($CREAR_1, ':p_codigo_resultado',$p_codigo_mensaje_1,100);
    oci_execute($CREAR_1); 

    $respuesta["p_mensaje_1"]=$p_mensaje_1;
    $respuesta["p_codigo_mensaje_1"]=$p_codigo_mensaje_1;
    oci_free_statement($CREAR_1);




    $INICIALIZAR_1 = oci_parse($conexion , 'begin  P_INICIALIZAR_CONFIG_REP(
        :P_CODIGO_PANTALLA,
        :P_CODIGO_T_USO_DATO, 
        :P_CODIGO_T_REPROD,
        :p_mensaje,
        :p_codigo_resultado); end;');

     oci_bind_by_name($INICIALIZAR_1, ':P_CODIGO_PANTALLA',$_SESSION["idPantalla"]);
     oci_bind_by_name($INICIALIZAR_1, ':P_CODIGO_T_USO_DATO',$P_CODIGO_T_USO_DATO,100); 
     oci_bind_by_name($INICIALIZAR_1, ':P_CODIGO_T_REPROD',$P_CODIGO_T_REPROD,100);
     oci_bind_by_name($INICIALIZAR_1, ':p_mensaje',$p_mensaje,100);
     oci_bind_by_name($INICIALIZAR_1, ':p_codigo_resultado',$p_codigo_mensaje,100);
     oci_execute($INICIALIZAR_1); 

     $respuesta["CODIGO_T_USO_DATO"]=$P_CODIGO_T_USO_DATO;
     $respuesta["CODIGO_T_REPROD"]=$P_CODIGO_T_REPROD;
     $respuesta["p_mensaje"]=$p_mensaje;
     $respuesta["p_codigo_mensaje"]=$p_codigo_mensaje;
     oci_free_statement($INICIALIZAR_1);
     oci_close($conexion);
     echo json_encode($respuesta);

 }
 
?>