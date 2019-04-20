<?php
    session_start(); 
   if (!isset($_SESSION["estado"])){
      header("Location: landing.html"); 
   }
     
?>