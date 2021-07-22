<?php

function mostrarError($errores, $valor){
    
    $alerta = '';

    if (isset($errores[$valor]) && !empty($valor)) {
        $alerta = "<div class = 'alerta alerta-error'>".$errores[$valor]."</div>";
    }

    return $alerta;
}