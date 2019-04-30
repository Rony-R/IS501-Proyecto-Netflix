
<?php

    if(move_uploaded_file($_FILES["fotoPerfil"]["tmp_name"],"../img/".$_FILES["fotoPerfil"]["name"])){
        echo "Archivo subido exitosamente";
        header("Location: ../manage.php?fotito=".$_FILES["fotoPerfil"]["name"]);
    }else{
        header("Location: ../users.php");
    }
?>