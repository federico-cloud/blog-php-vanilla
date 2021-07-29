<?php

function mostrarError($errores, $valor){
    
    $alerta = '';

    if (isset($errores[$valor]) && !empty($valor)) {
        $alerta = "<div class = 'alerta alerta-error'>"."ERROR: ".$errores[$valor]."</div>";
    }

    return $alerta;
}

function borrarErrores(){
    $_SESSION['errores'] = null;
    unset($_SESSION['errores']);
    unset($_SESSION['errores']['general']);
    unset($_SESSION['registrarUsuario']);
    unset($_SESSION['errorLogin']);
    unset($_SESSION['emailInvalido']);
    unset($_SESSION['errorPass']);

    $borrar = true;

    return $borrar;
}

