
<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Netflix</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link href="css/custom.css" type="text/css" rel="stylesheet">
    <link href="css/all.css" type="text/css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/favicon.ico">
</head>
<body>

    <div class="top-sesion">
        <a href="Inicio.php" class="net-logo-sesion">
            <img src="img/letras.png" class="letras2">
        </a>
    </div>

    <div class="row">
        <p class="whatching white-text txt-55">Who's Whatching?</p>
    </div>

    <div id="div-pantallas" class="justify row mt-3">
    </div>

    <div class="justify row mt-5">
        <button id="btn-manage-profiles" class="btn-manage">ADMINISTRAR PERFILES</button>
    </div>

    <input type="txt" class="d-none" id="usuario" value="<?php echo $_SESSION["Usuario"];?>">
    <input type="txt" class="d-none" id="users-pant1" value="<?php echo $_SESSION["Creadas"];?>">
    <input type="txt" class="d-none" id="users-pant2" value="<?php echo $_SESSION["Posibles"];?>">
    <input type="txt" class="d-none" id="idUsuario" value="<?php echo $_SESSION["CodUsuario"];?>">
    <input type="txt" class="d-none" id="estiloSub" value="0">
    <input type="txt" class="d-none" id="repro" value="0">

    <!--Modal insertar pantalla-->
    <div class="modal" id="modal-agregar" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header gray-bckd">
              <h5 class="modal-title white-text">Editar Perfil</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="white-text" aria-hidden="true">&times;</span>
              </button>
            </div>

            <!--Cuerpo del Modal-->
            <div class="modal-body gray-bckd">

              <div class="row">

              <div class="col-lg-4">
                  <label id="img-edit">
                    <form action="ajax/moverFotoPant.php" class="" method="POST" enctype="multipart/form-data">
                      <img class="min-user img-opcty" src="img/newUser.png">
                      <input type="file" class="form-control-file d-none" name="foto">            
                      <i class="fas fa-edit edit-icon3 mt-1"></i>
                      <input type="submit" class="btn btn-light" value="Listo">
                    </form>
                  </label>
                </div>

                <div class="col-lg-8">
                    <input id="nombre-pantalla" class="form-control bg-dark white-text plc-inp" type="text" placeholder="Nombre Pantalla">
                    <p class="mt-2 mb-0 white-text">Idioma:</p>
                    <select class="form-control bg-dark white-text" id="slc-idiomas">
                      <option value="1">Español</option>
                      <option value="2">Inglés</option>                  
                      <option value="3">Aleman</option>
                      <option value="4">Frances</option>
                      <option value="5">Italiano</option>
                    </select>
                    <p class="mt-2 mb-0 white-text">Peliculas y Series permitidas:</p>
                    <select class="form-control bg-dark white-text" id="slc-madurez">
                      <option value="1">Niños</option>
                      <option value="2">Todo Publico</option>
                      <option value="3">Adolescentes</option>
                      <option value="4">Adultos</option>
                    </select>
                  </div>

                </div>
              <!--Fin cuerpo del modal-->

            </div>

            <div class="modal-footer gray-bckd">
              <button id="insert-pantalla" type="button" class="btn">Guardar</button>
              <button type="button" class="btn" data-dismiss="modal">Cancelar</button>
            </div>
          </div>
        </div>
    </div>
    <!--Fin modal insertar pantalla-->
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/controlador.js"></script>

</body>
</html>