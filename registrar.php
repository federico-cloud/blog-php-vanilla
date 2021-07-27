<?php

session_start();

if(isset($_POST['registrar'])){

    //Recogemos los valores del formulario de registro
    $nombre     =   isset($_POST['nombre'])     ? $_POST['nombre']      : false;
    $apellido   =   isset($_POST['apellido'])   ? $_POST['apellido']    : false;
    $email      =   isset($_POST['email'])      ? $_POST['email']       : false;
    $pass       =   isset($_POST['pass'])       ? $_POST['pass']        : false;

    //Array de errores
    $errores = array();

    //Validamos los datos antes de guardar en la base de datos

    //Validar nombre
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombreValidado = true;
    }else{
        $nombreValidado = false;
        $errores['nombre'] = "El nombre no es valido";
    }

    //Validar apellido
    if (!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido)){
        $apellidoValidado = true;
    }else{
        $apellidoValidado = false;
        $errores['apellido'] = "El apellido no es valido";
    }

    //Validar email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailValidado = true;
    }else{
        $emailValidado = false;
        $errores['email'] = "El email no es valido";
    }

    //Validar pass
    if (!empty($pass)){
        $passValidado = true;
    }else{
        $passValidado = false;
        $errores['pass'] = "La contraseña esta vacia";
    }
    
    //Consultamos los errores, si los errores son 0 se guarda el usuario en la base de datos
    $guardarUsuario = false;

    if(count($errores) == 0){
        $guardarUsuario = true;
    }else{
        $_SESSION['errores'] = $errores;
        header('location: formRegistrar.php');
    } 


}

?>