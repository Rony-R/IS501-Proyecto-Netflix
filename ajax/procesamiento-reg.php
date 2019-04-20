<?php  
  session_start(); 
  if($_POST["peticion"]=="establecer-tipo-plan"){
     $_SESSION["tipo-plan"] = $_POST["tipo-plan"];
     $respuesta["codigo"]=1;
     echo json_encode($respuesta);
  }

  if($_POST["peticion"]=="info-usuario"){
    $_SESSION["correo"] = $_POST["correo"];
    $_SESSION["contra"] = $_POST["contra"];
    $respuesta["codigo"]=1;
    echo json_encode($respuesta);
 }

 if($_POST["peticion"]=="estado"){
   $_SESSION["estado"] = $_POST["estado"];
   $respuesta["codigo"]=1;
   echo json_encode($respuesta);
}
?>