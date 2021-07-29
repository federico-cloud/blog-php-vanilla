<?php
    include "assets/includes/header.html";
    require_once "assets/includes/helpers.php";
    require_once "assets/includes/conexion.php";
?>

<?php if(isset($_SESSION['errorLogin'])) : ?>
    <div class="alerta-error">
        <?= $_SESSION['errorLogin'];?>
    </div>
    
<?php endif; ?>

<div class="form-login">

    <form action="login.php" method="POST">

        <div class="form-email">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" required>
        </div>
        <?php echo isset($_SESSION['emailInvalido']) ? $_SESSION['emailInvalido'] : ''; ?>

        <div class="form-pass">
            <label for="pass">Password:</label>
            <input type="password" name="pass" id="pass" required>
        </div>
        <?php echo isset($_SESSION['errorPass']) ? $_SESSION['errorPass'] : ''; ?>


        <div class="formLoginBtn">
            <button type="submit" class="loginBtn" name="login" value="login">
                Iniciar Sesion
            </button>
            <a class="cancelarBtn" href="index.php">Cancelar</a>
        </div>

    </form>

    <?php borrarErrores(); ?>

</div>
