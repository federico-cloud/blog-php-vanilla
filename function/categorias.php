<?php

function listarCategorias(){
    $link       = conectar();
    $sql        = "SELECT * FROM categorias ORDER BY id ASC";
    $resultado  = mysqli_query($link, $sql) or die(mysqli_error($link));

    return $resultado;
}




?>