<?php
    include "assets/includes/header.html";
    require_once "assets/includes/helpers.php";
    session_start();
?>


<div class="form-registrar">

    <form action="registrar.php" method="POST">

    <div class="form-registrar-nombre">
        <label for="nombre">Nombres:</label>
        <input type="text" name="nombre" id="nombre">
    </div>
    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
    <div class="form-registrar-apellido">
        <label for="apellido">Apellidos:</label>
        <input type="text" name="apellido" id="apellido">
    </div>
    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellido') : ''; ?>
    <div class="form-registrar-email">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
    </div>
    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
    <div class="form-registrar-pass">
        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass">
    </div>
    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'pass') : ''; ?>

        <div class="formRegistrarBtn">
            <input type="submit" class="registrarBtn" name="registrar" value="Registrar">
            <a class="cancelarBtn" href="index.php">Cancelar</a>
        </div>

    </form>

    <?php borrarErrores(); ?>

</div>


<?php include "assets/includes/footer.html"; ?>