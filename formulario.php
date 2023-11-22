<?php

require_once "./include/xajax_core/xajax.inc.php";

$xajax = new xajax('validar.php');
$xajax->register(XAJAX_FUNCTION, "changeColor");
$xajax->configure('javascript URI', './include/');
$xajax->configure("debug", true);
$xajax->processRequest();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Interacción asíncrona con xajax</title>
    <?php $xajax->printJavascript(); ?>
    <script type="text/javascript" src="validar.js"></script>
</head>
<body>
    <form id="colorForm" action="javascript:void(null);">
        <label for="colorSelect">Selecciona un color:</label>
        <select id="colorSelect" onchange="changeColor();">
            <option value="">Selecciona un color</option>
            <option value="red">Rojo</option>
            <option value="green">Verde</option>
            <option value="blue">Azul</option>
        </select>
    </form>
    <p id="colorResult">color</p>
    <input type="submit" id="submitButton" value="Enviar">
</body>
</html>