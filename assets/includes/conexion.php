<?php

//Conexion a la base de datos

$server   = 'localhost';
$usuario  = 'root';
$clave    = '';
$base       = 'blog';

$conexion = mysqli_connect($server, $usuario, $password, $base);
mysqli_query($conexion, "SET NAMES 'utf8'");

//Iniciar la sesion
session_start();

?>