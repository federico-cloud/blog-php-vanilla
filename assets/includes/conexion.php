<?php

//Conexion a la base de datos

const SERVER    = 'localhost';
const USUARIO   = 'root';
const CLAVE     = '';
const BASE      = 'blog';

$conexion = mysqli_connect(SERVER, USUARIO, CLAVE, BASE);
mysqli_query($conexion, "SET NAMES 'utf8'");

//Iniciar la sesion
session_start();

?>