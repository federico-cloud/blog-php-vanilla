<?php

    //Iniciar Sesion y conectar a la base de datos
    require_once "assets/includes/conexion.php";
    
    //Recoger datos del formulario
    if (isset($_POST)){
        
        $email  = trim($_POST["email"]);
        $pass   = trim($_POST["pass"]);
    
        //Consultamos las credenciales en base de datos
        $sql = "SELECT email, pass FROM usuarios WHERE email = ".$email;
        $resultado = mysqli_query($conexion, $sql);

        if ($resultado && mysqli_num_rows($resultado) == 1) {
            $usuario = mysqli_fetch_assoc($resultado);
            var_dump($usuario);
            die();

            $passwordSegura = password_hash($pass, PASSWORD_BCRYPT, ['cost' => 5]);
        }

        //Comprobar la contraseña


    }

    //Comprobar la contraseña 

    //Consulta para comprobar si existen las credenciales

    //Utilizar sesion para guardar los datos del usuario logeado

    //Si hay errores, mostrarlos por sesion y redirigir al index

?>