<?php
    include "assets/includes/header.html";
    require_once "assets/includes/helpers.php";
    session_start();
?>


    <?php if(isset($_SESSION['registrarUsuario'])) : ?>
        <?= $_SESSION['registrarUsuario'] ;?>
    <?php elseif(isset($_SESSION['errores']['general'])) : ?>
        <?= $_SESSION['errores']['general'] ;?>
    <?php endif; ?>

<div class="form-registrar">


    <form action="registrar.php" method="POST">

        <div class="form-nombre">
            <label for="nombre">Nombres:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
        <div class="form-apellido">
            <label for="apellido">Apellidos:</label>
            <input type="text" name="apellido" id="apellido" required>
        </div>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellido') : ''; ?>
        <div class="form-email">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" required>
        </div>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
        <div class="form-pass">
        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass" required>
        </div>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'pass') : ''; ?>

        <div class="formRegistrarBtn">
                <button type="submit" class="registrarBtn" name="registrar" value="Registrar">
                    Registrarse
                </button>
            <a class="cancelarBtn" href="index.php">Cancelar</a>
        </div>

    </form>

    <?php borrarErrores(); ?>

</div>
