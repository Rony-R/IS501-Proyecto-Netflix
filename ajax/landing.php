<?php

    switch($_GET["accion"]){

    case "'tabla-landing'":
    echo
    '<div class="row">
        <div class="col-lg-6">
            <p class="white-text txt-22 mt-30">Elige un plan y ve lo que quieras en Netflix.</p>
        </div>

        <div class="col-lg-6">
            <button id="btn-prueba-gratuita"  type="button" class="btn btn-lg btn-p-g-2 float-right">
                DISFRUTAR GRATIS POR 30 DÍAS
            </button>
        </div>
    </div>

    <div class="row">
        <table class="table table-striped table-dark white-text">
            <thead>
                <tr style="background-color:#000000">
                    <th></th>
                    <th><p class="center-text no-m-p">BÁSICO</p></th>
                    <th><p class="center-text no-m-p">ESTÁNDAR</p></th>
                    <th><p class="center-text no-m-p">PREMIUM</p></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Precio mensual cuando termine el mes gratis</td>
                    <td><p class="center-text no-m-p">USD 7.99</p></td>
                    <td><p class="center-text no-m-p">USD 10.99</p></td>
                    <td><p class="center-text no-m-p">USD 13.99</p></td>
                </tr>
                <tr>
                    <td>HD disponible</td>
                    <td><p class="center-text no-m-p"><i class="fas fa-times"></i></p></td>
                    <td><p class="center-text no-m-p"><i class="fas fa-check"></i></p></td>
                    <td><p class="center-text no-m-p"><i class="fas fa-check"></i></p></td>
                </tr>
                <tr>
                    <td>Ultra HD disponible</td>
                    <td><p class="center-text no-m-p"><i class="fas fa-times"></i></p></td>
                    <td><p class="center-text no-m-p"><i class="fas fa-times"></i></p></td>
                    <td><p class="center-text no-m-p"><i class="fas fa-check"></i></p></td>
                </tr>
                <tr>
                    <td>Pantallas en las que puedes ver al mismo tiempo</td>
                    <td><p class="center-text no-m-p">1</p></td>
                    <td><p class="center-text no-m-p">2</p></td>
                    <td><p class="center-text no-m-p">4</p></td>
                </tr>
                <tr>
                    <td>Ve en tu laptop, TV, teléfono y tablet</td>
                    <td><p class="center-text no-m-p"><i class="fas fa-check"></i></p></td>
                    <td><p class="center-text no-m-p"><i class="fas fa-check"></i></p></td>
                    <td><p class="center-text no-m-p"><i class="fas fa-check"></i></p></td>
                </tr>
                <tr>
                    <td>Películas y programas de TV ilimitados</td>
                    <td><p class="center-text no-m-p"><i class="fas fa-check"></i></p></td>
                    <td><p class="center-text no-m-p"><i class="fas fa-check"></i></p></td>
                    <td><p class="center-text no-m-p"><i class="fas fa-check"></i></p></td>
                </tr>
                <tr>
                    <td>Cancela en cualquier momento</td>
                    <td><p class="center-text no-m-p"><i class="fas fa-check"></i></p></td>
                    <td><p class="center-text no-m-p"><i class="fas fa-check"></i></p></td>
                    <td><p class="center-text no-m-p"><i class="fas fa-check"></i></p></td>
                </tr>
                <tr>
                    <td>El primer mes es gratis</td>
                    <td><p class="center-text no-m-p"><i class="fas fa-check"></i></p></td>
                    <td><p class="center-text no-m-p"><i class="fas fa-check"></i></p></td>
                    <td><p class="center-text no-m-p"><i class="fas fa-check"></i></p></td>
                </tr>
                </tbody>
        </table>
    </div>';
    break;

    case "'tv-landing'":
    echo
    '<div class="row">
        <div class="col-lg-6">
            <p class="white-text txt-22 mt-30">
                Ve películas y programas de TV cuando y donde quieras, personalizados para ti.
            </p>
        </div>
        <div class="col-lg-6">
            <button id="btn-prueba-gratuita2"  type="button" class="btn btn-lg btn-p-g-2 float-right">
                DISFRUTAR GRATIS POR 30 DÍAS
            </button>
        </div>
    </div>
    <div class="row">
        <img src="img/foto2.png" class="img-fluid">
    </div>

    </div>';
    break;

    case "'door-landing'":
    echo
    '<div class="col-lg-6 center-text mt-5">
        <p class="white-text txt-32">
            Si piensas que Netflix no es lo tuyo, no hay problema.  Sin compromisos. 
            Cancela online cuando quieras.
        </p>
        <button id="btn-prueba-gratuita2"  type="button" class="btn btn-lg btn-p-g-2">
            DISFRUTAR GRATIS POR 30 DÍAS
        </button>
    </div>

    <div class="col-lg-6 center-text">
        <img src="img/foto1.png">
    </div>';
    break;

    case "'footer-landing'":
    echo
    '<div class="row margin-footer">
        <p class="white-text">Preguntas? Llamen a Signe: 9618-2573 o Rosario: 3215-0327</p>
    </div>

    <div class="row margin-footer">
        <div class="col-lg-3">
            <div class="row"><p class="white-text txt-sub">FAQ</p></div>
            <div class="row"><p class="white-text txt-sub">Investor Relations</p></div>
            <div class="row"><p class="white-text txt-sub">Privacy</p></div>
            <div class="row"><p class="white-text txt-sub">Speed Test</p></div>
        </div>
        <div class="col-lg-3">
            <div class="row"><p class="white-text txt-sub">Help Center</p></div>
            <div class="row"><p class="white-text txt-sub">Jobs</p></div>
            <div class="row"><p class="white-text txt-sub">Cookie preferences</p></div>
            <div class="row"><p class="white-text txt-sub">Legal Notices</p></div>
        </div>
        <div class="col-lg-3">
            <div class="row"><p class="white-text txt-sub">Account</p></div>
            <div class="row"><p class="white-text txt-sub">Ways to watch</p></div>
            <div class="row"><p class="white-text txt-sub">Corporate information</p></div>
            <div class="row"><p class="white-text txt-sub">Netflix Originals</p></div>
        </div>
        <div class="col-lg-3">
            <div class="row"><p class="white-text txt-sub">Media center</p></div>
            <div class="row"><p class="white-text txt-sub">Terms of use</p></div>
            <div class="row"><p class="white-text txt-sub">Contact Us</p></div>
        </div>
    </div>';
    break;

    case "'table-account'":
    echo'
    <table cellspacing="4" cellpadding="9" class="mb-5">
            <thead>
                <tr>
                    <td class="b-d" colspan="3">
                        <h2 class="txt-accnt">Cuenta</h2>
                    </td>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <tr>
                        <td valign="top">
                            <label class="row txt-gray mr-4 txt-wdt ml-1">MEMBRESÍA Y FACTURACIÓN</label>
                            <button id="btn-cancel-membresia" class="btn-memb" type="button">Cancelar Membresía</button>
                        </td>
                        <td class="b-d">
                            <label class="row txt-blck ml-4">'.$_POST["corr"].'</label>
                            <label class="row txt-blck ml-4">Password: *****</label>
                            <label class="row txt-blck ml-4">Phone: '.$_POST["tel"].'</label>  
                        </td> 
                        <td class="b-d">
                            <a href="updateCorreo.php" class="row ml-95"><label>Cambiar email de cuenta</label></a>
                            <a href="updateContra.php" class="row ml-95"><label>Cambia la contraseña</label></a>
                            <a href="updatePhone.php" class="row ml-95"><label>Cambiar número de teléfono</label></a> 
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="b-d">
                            <label class="row txt-blck ml-4">'.$_POST["tarj"].'</label>
                        </td>
                        <td class="b-d">
                            <a href="update-info-pago.php" class="row ml-95"><label>Actualizar información de pago</label></a>
                            <a href="historial-pagos.php" class="row ml-95"><label>Detalles de facturación</label></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="b-d"></td>
                        <td class="b-d"></td>
                        <td class="b-d"><a href="#" class="row ml-95"><label>Canjear tarjeta de regalo o código de promoción</label></a>
                            <a href="#" class="row ml-95"><label>Donde comprar tarjetas de regalo</label></a>
                        </td>
                    </tr>
                </tr>

                <tr>
                    <td class="b-d">
                        <label class="row txt-gray ml-1">DETALLES DEL PLAN</label>
                    </td>
                    <td class="b-d">
                        <label class="txt-blck ml-4">'.$_POST["plan"].'</label>
                    </td>
                    <td class="b-d">
                        <a href="#" class="row ml-95"><label>Cambio de plan</label></a>
                    </td>
                </tr>

                <tr>
                    <td valign="top" class="b-d">
                        <label class="row txt-gray ml-1">AJUSTES</label>
                    </td>
                    <td class="b-d">
                        <a href="#" class="row ml-4">Controles parentales</a>
                        <a href="#" class="row ml-4">Prueba de participación</a>
                        <a href="#" class="row ml-4">Administrar dispositivos de descarga</a>
                        <a href="#" class="row ml-4">Activar un dispositivo</a>
                        <a href="#" class="row ml-4">Actividad reciente de transmisión de dispositivos</a>
                        <a href="#" class="row ml-4">Salir de todos los dispositivos</a>
                    </td>
                    <td class="b-d"></td>
                </tr>

                <tr>
                    <td valign="top">
                        <label class="row txt-gray ml-1">MI PERFIL</label>
                    </td>
                    <td>
                        <span class="row txt-blck ml-4">IMG USUARIO - NOMBRE-USUARIO</span>
                        <a href="#" class="row ml-4">Idioma</a>
                        <a href="#" class="row ml-4">Ajustes de reproducción</a>
                        <a href="#" class="row ml-4">Apariencia de subtítulos</a>
                    </td>
                    <td>
                        <a href="#" class="row ml-95">Actividad de visualización</a>
                        <a href="#" class="row ml-95">Calificaciones</a>
                        <a href="manage.html" class="row ml-95">Gestionar perfiles</a>
                        <a href="#" class="row ml-95">Añadir email de perfil</a>
                    </td>
                </tr>

            </tbody>
        </table>';
    break;

}

?>