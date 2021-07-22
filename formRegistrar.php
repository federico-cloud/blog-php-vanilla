<?php
    include "assets/includes/header.html";
    require_once "assets/includes/helpers.php";
    session_start();
?>


<div class="form-registrar">

    <form action="registrar.php" method="post">


        <label for="nombre">Nombres:</label>
        <input type="text" name="nombre" id="nombre">
        <?= mostrarError($_SESSION['errores'], 'nombre'); ?>

        <label for="apellido">Apellidos:</label>
        <input type="text" name="apellido" id="apellido">
        <p><?= mostrarError($_SESSION['errores'], 'apellido'); ?></p>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <?= mostrarError($_SESSION['errores'], 'email'); ?>

        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass">
        <?= mostrarError($_SESSION['errores'], 'pass'); ?>

        <div class="formRegisterBtn">
            <a href="registrar.php">Registrarme</a>
            <a href="index.php">Cancelar</a>
        </div>
    </form>

</div>

<?php
    include "assets/includes/footer.html";
?>

