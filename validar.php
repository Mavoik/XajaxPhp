<?php

require_once './include/xajax_core/xajax.inc.php';

function xajax_changeColor($color){

        $respuesta = new xajaxResponse();
        
        if ($color !== "") {
            $respuesta->assign($color, true, "NOENVIAR");
        } else {
            $respuesta->assign("white", false, "Enviar");
        }
        return $respuesta;
    }
    