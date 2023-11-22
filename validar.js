function sendColor(color) {
    if (color !== "") {
        xajax.$("colorResult").style.backgroundColor = color;
        xajax.$("submitButton").disabled = true;
        xajax.$("submitButton").value = "NOENVIAR";
    } else {
        xajax.$("colorResult").style.backgroundColor = "white";
        xajax.$("submitButton").disabled = false;
        xajax.$("submitButton").value = "Enviar";
    }
    xajax_changeColor (xajax.getFormValues("colorForm"));
}
