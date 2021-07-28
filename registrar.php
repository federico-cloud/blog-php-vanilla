<?php

if(isset($_POST['registrar'])){

    //Conexion a la base de datos
    require_once "assets/includes/conexion.php";


    //Recogemos los valores del formulario de registro
    $nombre     =   isset($_POST['nombre'])     ? mysqli_real_escape_string($conexion, $_POST['nombre'])      : false;
    $apellido   =   isset($_POST['apellido'])   ? mysqli_real_escape_string($conexion, $_POST['apellido'])    : false;
    $email      =   isset($_POST['email'])      ? mysqli_real_escape_string($conexion, trim($_POST['email']))       : false;
    $pass       =   isset($_POST['pass'])       ? mysqli_real_escape_string($conexion, trim($_POST['pass']))       : false;

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
        //Ciframos la password del usuario
        $passwordSegura = password_hash($pass, PASSWORD_BCRYPT, ['cost'=>5]);
        //Insertamos el usuario en la base de datos
        $sql = "INSERT INTO usuarios VALUES (null, '$nombre', '$apellido', '$email', '$passwordSegura', CURDATE());";
        $resultado = mysqli_query($conexion, $sql);
        if ($resultado) {
            $_SESSION['registrarUsuario'] = "<div class = 'alerta-realizado'>"."Se ha registrado el usuario ".$email." de manera exitosa"."</div>";
            header('refresh:2; url = formRegistrar.php');
        }else{
            header('refresh:3; url = formRegistrar.php');
            $_SESSION['errores']['general'] = "<div class = 'alerta-error-registrar'>"."ERROR: El usuario no ha podido registrarse"."</div>";
        }
    }else{
        $_SESSION['errores'] = $errores;
        header('location: formRegistrar.php');
    } 

}

?>