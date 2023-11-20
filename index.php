<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xajax Example</title>
    <!-- Incluye el archivo xajax -->
    <script src="xajax_core.js"></script>
    <script src="xajax_js.js"></script>
</head>
<body>

<h1>xajax Example</h1>

<!-- Div para mostrar el resultado de la llamada asíncrona -->
<div id="result"></div>

<!-- Botón que activa la llamada asíncrona -->
<button onclick="callServer()">Hacer Llamada Asíncrona</button>

<!-- Script para manejar la llamada asíncrona -->
<script>
    function callServer() {
        // Llama a la función remota 'updateContent' en el servidor
        xajax_updateContent();
    }
</script>

</body>
</html>
