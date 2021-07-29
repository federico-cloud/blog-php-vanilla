<?php

    //Iniciar Sesion y conectar a la base de datos
    require_once "assets/includes/conexion.php";
    
    //Recoger datos del formulario
        $email  = trim($_POST["email"]);
        $pass   = trim($_POST["pass"]);

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){   

        //Consultamos las credenciales en base de datos
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
        $usuario = mysqli_fetch_assoc($resultado);
        
        if ($resultado && mysqli_num_rows($resultado) == 1) {
            //Comprobar la contraseña
            $passVerificada = password_verify($pass, $usuario['password']);
            if ($passVerificada) {
                //Utilizar sesion para guardar los datos del usuario logeado
                $_SESSION['usuarioLogueado'] = $usuario;
                header('Location: index.php');
                if(isset($_SESSION['errorLogin'])){
                    session_unset($_SESSION['errorLogin']);
                }
                }else{
                    //si falla enviar una sesion con el fallo
                    $_SESSION['errorLogin'] = "ERROR: Las credenciales ingresadas son invalidas";
                    header('Location: formLogin.php');
                }
            }else{
            $_SESSION['errorLogin'] = "El ingreso ha fallado";
            }
    }else{
        $_SESSION['emailInvalido'] = "<div class='alerta-error'>"."El mail ingresado es invalido"."</div>";
        header('Location: formLogin.php');
    }

?>