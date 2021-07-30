<?php

//Conexion a la base de datos

const SERVER    = 'localhost';
const USUARIO   = 'root';
const CLAVE     = '';
const BASE      = 'blog';

function conectar(){

$link = mysqli_connect(SERVER, USUARIO, CLAVE, BASE);

return $link;

}

//Iniciar la sesion
session_start();

?>