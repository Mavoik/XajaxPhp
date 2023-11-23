<?php

require_once "./include/xajax_core/xajax.inc.php";

function changeColor($color){
    
    $respuesta = new xajaxResponse();
    
    if ($color === '') {
        $respuesta->assign('colorResult', 'style.backgroundColor', 'white');
        $respuesta->assign('submitButton', 'disabled', false);
        $respuesta->assign('submitButton', 'value', 'Enviar');
    }else {
        $respuesta->assign('colorResult', 'style.backgroundColor', $color);
        $respuesta->assign('submitButton', 'disabled', true);
        $respuesta->assign('submitButton', 'value', 'NOENVIAR');
    }
    return $respuesta;
}

$xajax = new xajax();
$xajax->register(XAJAX_FUNCTION, 'changeColor');
$xajax->configure('javascript URI', './include/');
$xajax->configure('debug', true);
$xajax->processRequest();

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Interacción asíncrona con xajax</title>
        <?php $xajax->printJavascript(); ?>
        <script type="text/javascript" src="validar.js"></script>
    </head>
    <body>
        <form id="colorForm">
            <label for="colorSelect">Selecciona un color:</label>
            <select id="colorSelect" onchange="return sendColor();">
                <option value="">Selecciona un color</option>
                <option value="red">Rojo</option>
                <option value="green">Verde</option>
                <option value="blue">Azul</option>
            </select>
        </form>
        <input type="submit" id="submitButton" value="Enviar">
        <p id="colorResult">color</p>
    </body>
</html>