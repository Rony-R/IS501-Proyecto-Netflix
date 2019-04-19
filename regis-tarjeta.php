<?php include("ajax/seguridad-reg.php"); ?>
<!doctype html>
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
                <a id="a-iniciar-sesion" href="users.html">Inicia sesión</a>
            </div>
        </div>        
      </div>
      <input type="text" class="form-control" id="input-pag"  value="6">
      <div id="body" class="container margin-sup-1">    
        <div class="row" >
            <div class="col-1 col-sm-1 col-md-3">
            </div>
            <div class="col-10 col-sm-8 col-md-6">
                <span class="lead text-paso">PASO <span class="bold-txt">3</span> DE <span class="bold-txt">3</span></span>
                <h1 class="lead text-selecciona text-selecciona-2">Configura tu tarjeta de crédito o débito.</h1>  
                <span class="logo-icon"><img src="img/img-icon-visa.png"></span>
                <span class="logo-icon"><img src="img/img-icon-master.png"></span>
                <span class="logo-icon"><img src="img/img-icon-amex.png"></span> 
            
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" id="txt-nombre" placeholder="Nombre" value="">
                    <div class="valid-feedback">
                      Este campo esta correcto!
                    </div>
                    <div class="invalid-feedback">
                      Este campo esta incorrecto
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="txt-apellido" placeholder="Apellido" value="">
                    <div class="valid-feedback">
                      Este campo esta correcto!
                    </div>
                    <div class="invalid-feedback">
                      Este campo esta incorrecto
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="txt-numero-tarjeta" placeholder="Número de tarjeta" value="">
                    <div class="valid-feedback">
                      Este campo esta correcto!
                    </div>
                    <div class="invalid-feedback">
                      Este campo esta incorrecto
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="txt-fecha-vencimiento" placeholder="Fecha de Vencimiento (MM/AA)" value="">
                    <div class="valid-feedback">
                      Este campo esta correcto!
                    </div>
                    <div class="invalid-feedback">
                      Este campo esta incorrecto
                    </div>
                  </div>
                  <div class="input-group">
                    <input id="txt-codigo-CVV"  type="text" class="form-control" placeholder="Código de seguridad (CVV)" value="">
                    <div class="input-group-append">
                      <span class="input-group-text input-group-text-2">
                          <button type="button" class="btn-1" data-toggle="modal" data-target="#modal">
                              <i class="far fa-question-circle"></i>
                          </button>
                      </span>
                    </div>
                    <div class="valid-feedback">
                      Este campo esta correcto!
                    </div>
                    <div class="invalid-feedback">
                      Este campo esta incorrecto
                    </div>
                   
                  </div>
                
         
                  <div class="input-group mb-3" id="input-slc-tipo-tarjeta">
                      <div class="input-group-prepend">
                        <label class="input-group-text-1" for="slc-tipo-tarjeta" id="label-tipo-tarjeta">Tipo de tarjeta</label>
                      </div>
                      <select class="custom-select" id="slc-tipo-tarjeta">
                       <option value="1" selected>Crédito</option>
                       <option value="2">Débito</option>
                      </select>
                    </div>
                </form>
                <div class= "row row-style">
                  <div class="col-8 col-sm-10">
                    <div>
                        <span class="txt-b-1">TU PLAN</span> 
                    </div>
                    <div >
                        <span class="txt-b-2" id="span-descripcion-plan"></span> 
                    </div>
                  </div>
                  <div class="col-4 col-sm-2">
                     <a id="a-1" href="planes.html">Cambiar</a>
                  </div>
                </div>
                <div class= "row row-style">
                    <div class="col-12 col-sm-12">
                      <div class="pad-mar">
                          <span class="txt-b-3">Los pagos se procesarán internacionalmente. Es posible que se apliquen comisiones bancarias adicionales.</span>
                      </div>    
                      <div class="pad-mar"> 
                          <span class="txt-b-3">hacer clic en el botón "Iniciar membresía", aceptas nuestros <a href="#">Términos de uso</a> y nuestra <a href="#">
                              Declaración de privacidad</a>, y declaras que tienes más de 18 años. Puedes cancelar tu membresía en cualquier momento.
                              Para hacerlo, visita tu Cuenta y haz clic en "Cancelar membresía".
                          </span>
                      </div>
                      <div class="pad-mar">
                          <span class="txt-b-1">Netflix continuará tu membresía de manera automática y, hasta que la canceles, te facturará el cargo mensual
                             (actualmente de USD13.99) a través de la forma de pago elegida.</span> 
                          <span  class="txt-b-3"> No se ofrecen reembolsos ni créditos por meses parciales.</span>
                      </div>
                    </div>
                </div>
                <button type="button" class="btn btn-danger" id="btn-iniciar-membresia">INICIAR MEMBRESÍA</button> 
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
    <script src="js/controlador-R.js"></script>
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