<?php

require_once "assets/includes/conexion.php";

if (isset($_SESSION['usuarioLogueado'])) {
    session_destroy();
}

header('Location: index.php');

?>