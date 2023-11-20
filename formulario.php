<?php

require_once "../Include/xajax_core/xajax.inc.php";

$xajax = new xajax();
$xajax->register(XAJAX_FUNCTION, "onChangeForm");
$xajax->configure('javascript URI', '../Include/xajax_js');
$xajax->configure("debug", true);
$xajax->processRequest();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Interacción asíncrona con xajax</title>
    <script src="../xajax.js"></script>
    <script src="../AjaxResponse.js"></script>
</head>
<body>
    <form id="colorForm">
        <label for="colorSelect">Selecciona un color:</label>
        <select id="colorSelect" onchange="changeColor()">
            <option value="">Selecciona un color</option>
            <option value="red">Rojo</option>
            <option value="green">Verde</option>
            <option value="blue">Azul</option>
        </select>
    </form>

    <p id="colorResult">color</p>

    <script>
        function changeColor() {
            var selectedColor = document.getElementById("colorSelect").value;
            xajax_changeColor(selectedColor);
        }
        function xajax_changeColor(color) {
            let serverResponse = "El color seleccionado es: " + color;
            document.getElementById("colorResult").innerHTML = serverResponse;

            if (color !== "") {
                document.getElementById("colorResult").style.backgroundColor = color;
                document.getElementById("submitButton").disabled = true;
                document.getElementById("submitButton").value = "NOENVIAR";
            } else {
                document.getElementById("colorResult").style.backgroundColor = "white";
                document.getElementById("submitButton").disabled = false;
                document.getElementById("submitButton").value = "Enviar";
            }
        }
    </script>
    <input type="submit" id="submitButton" value="Enviar">
</body>
</html>