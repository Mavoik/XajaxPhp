<?php
// Incluye la biblioteca xajax
require 'xajax_core/xajax.inc.php';

// Crea una instancia de xajax
$xajax = new xajax();

// Define una función remota que será llamada desde el cliente
function updateContent() {
    // Simula algún procesamiento en el servidor
    $result = "¡Llamada asíncrona exitosa! " . date("H:i:s");

    // Devuelve el resultado a través de xajax
    $objResponse = new xajaxResponse();
    $objResponse->assign("result", "innerHTML", $result);

    return $objResponse;
}

// Registra la función remota
$xajax->register(XAJAX_FUNCTION, "updateContent");

// Procesa la solicitud xajax
$xajax->processRequest();

// Imprime el encabezado y el cuerpo de la página
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xajax Example</title>
    <script src="xajax_core.js"></script>
    <script src="xajax_js.js"></script>
</head>
<body>';
// Llama a la función remota 'updateContent' cuando se carga la página (solo para este ejemplo)
$xajax->printJavascript();
echo '</body>
</html>';
?>
