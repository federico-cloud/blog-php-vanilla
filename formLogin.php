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


    <form action="login.php" method="POST">

        <div class="form-registrar-email">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" required>
        </div>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
        <div class="form-registrar-pass">
        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass" required>
        </div>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'pass') : ''; ?>

        <div class="formRegistrarBtn">
                <button type="submit" class="registrarBtn" name="registrar" value="Registrar">
                    Iniciar Sesion
                </button>
            <a class="cancelarBtn" href="index.php">Cancelar</a>
        </div>

    </form>

    <?php borrarErrores(); ?>

</div>
