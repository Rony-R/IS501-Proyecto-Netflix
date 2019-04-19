<?php
    session_start(); 
    if (!isset($_SESSION["correo"]))
        header("Location: login-2.html");

  //  if ($_SESSION["tipoUsuario"]=="ADMIN")
?>