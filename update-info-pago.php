
<?php

  session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Netflix Honduras</title>
    <link rel="icon" type="image/png" href="img/favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/pricing/">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/registro-basico.css" rel="stylesheet">
    <link href="css/registro-creditoption.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  </head>
  <body>
      <div id="head" class="d-flex flex-column  p-3 px-md-4 mb-3  bg-white border-bottom shadow-sm">
        <div class="row">
            <div class="col-12 col-sm-2 margin-logo">
                <img src="img/letras.png" alt="Netflix" width="75%">
            </div>
            <div class="col-12 col-sm-7">
            </div>
            <div class="col-12 col-sm-3 letras-img">
                <a id="a-iniciar-sesion" href="account.html">Volver a la cuenta</a>
            </div>
        </div>        
      </div>

      <div id="body" class="container margin-sup-1">    
        <div class="row" >
            <div class="col-1 col-sm-1 col-md-3">
            </div>
            <div class="col-10 col-sm-8 col-md-6">
                <h1 class="lead text-selecciona text-selecciona-2">Actualiza tu tarjeta de crédito o débito.</h1>  
                
                <input disabled id ="correo-actual2" type="text" class="form-control d-none" value="<?php echo$_SESSION["Usuario"]?>"> 
                
                <span class="logo-icon"><img src="img/img-icon-visa.png"></span>
                <span class="logo-icon"><img src="img/img-icon-master.png"></span>
                <span class="logo-icon"><img src="img/img-icon-amex.png"></span> 
            
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" id="input-nombre" placeholder="Nombre">
                    <div id="val-nomb1" class="d-none verde">Correcto</div>
                    <div id="val-nomb2" class="d-none naranja">No puede estar vacio</div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="input-apellido" placeholder="Apellido">
                    <div id="val-ap1" class="d-none verde">Correcto</div>
                    <div id="val-ap2" class="d-none naranja">No puede estar vacio</div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="input-numero-tarjeta" placeholder="Número de tarjeta">
                    <div id="val-tarj1" class="d-none verde">Correcto</div>
                    <div id="val-tarj2" class="d-none naranja">No puede estar vacio</div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="input-fecha-vencimiento" placeholder="Fecha de Vencimiento (MM/AA)">
                    <div id="val-fech1" class="d-none verde">Correcto</div>
                    <div id="val-fech2" class="d-none naranja">No puede estar vacio</div>
                  </div>
                  <div class="input-group">
                    <input id="input-codigo-CVV" type="text" class="form-control" placeholder="Código de seguridad (CVV)">
                    <div class="input-group-append">
                      <span class="input-group-text">
                          <button type="button" class="btn-1" data-toggle="modal" data-target="#modal">
                              <i class="far fa-question-circle"></i>
                          </button>
                      </span>
                    </div>
                  </div>
                  <div id="val-codSeg1" class="d-none verde">Correcto</div>
                    <div id="val-codSeg2" class="d-none naranja">No puede estar vacio</div>
                </form>
                <div class= "row row-style">
                  <p class="p-phone">
                      Sus pagos serán procesados ​​internacionalmente. Se pueden aplicar cargos bancarios adicionales.
                  </p>
                </div>
                <button type="button" class="btn btn-danger" id="save-upd-info-pago">GUARDAR</button> 
            </div>
            <div class="col-1 col-sm-2 col-md-4 col-md-3">
            </div>
        </div>
      </div>  
   
  
  <!-- Modal -->
  <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content ">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="padding-body-model align-img">
                <span > El código de seguridad de tu tarjeta (CVV) es el número de 3 o 4 dígitos que se encuentra en el reverso de la mayoría de las tarjetas.</span>
            </div> 
            <div class= "padding-body-model align-img ">
               <img src="img/img-visa_cvv-1.png">
            </div>
            <div class= "padding-body-model align-img">
               <img src="img/img-visa_cvv-1.png">
            </div>   
        </div>
      </div>
    </div>
  </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>
  </body>
  <footer class="border-top margin-sup" id ="footer-gray">
    <div class="row">
      <div class="col-1 col-md-1">
        
      </div>
      <div class="col-11 col-md-11">
          <div class="enlace-gris-footer">¿Preguntas? Llama al<a href="#" id="a-gris-1"> +1 (408) 514-5239 (USA)</a></div>
      </div>
    </div>
    <div class="row"  id="row-1-footer">
        <div class="col-md-1">
        </div>
        <div class="col-6 col-sm-3 col-md-2">
            <a href="#" id="a-gris-2">Preguntas frecuentes</a>
        </div>
        <div class="col-6 col-sm-3 col-md-2">
            <a href="#" id="a-gris-4">Centro de ayuda</a>
        </div>
        <div class="col-6 col-sm-3 col-md-2">
            <a href="#" id="a-gris-6">Términos de uso</a>
        </div>
        <div class="col-6 col-sm-3 col-md-2">
            <a href="#" id="a-gris-7">Privacidad</a>
        </div>
        <div class="col-md-8">
      </div>
    </div>

    <div class="row" id="row-2-footer">
       <div class="col-md-1">
       </div>
       <div class="col-6 col-sm-3 col-md-2">
          <a href="#" id="a-gris-3">Preferencias de cookies</a>
       </div>
       <div class="col-6 col-sm-3 col-md-2">
         <a href="#" id="a-gris-5">Información corporativa</a>
       </div>
       <div class="col-6 col-sm-3 col-md-2">
       </div>
       <div class="col-6 col-sm-3 col-md-2">
       </div>
    </div>
    <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-6 col-sm-2 col-md-2 background-select select-1">
                   <i class="fas fa-globe"></i>          
                   <select class="nfSelect">
                        <option>Español</option>
                        <option>Ingles</option>
                   </select>
                     
            </div>
            <div class="col-6 col-sm-3 col-md-2">
            
         </div>
  </footer>
  
</html>