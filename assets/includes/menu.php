<?php    
    require_once "assets/includes/conexion.php";
    require_once "function/categorias.php";
    $categorias = listarCategorias();
?>

<!-- CABECERA -->
    <header id="cabecera">
        
        <div id="logo">
            <a href="index.php">
                BLOG
            </a>
        </div>

        <div class="acciones">
            <?php if (isset($_SESSION['usuarioLogueado'])):?>
                <a href="logout.php" class="btn-crear-post">
                    Nuevo post
                </a>
                <a href="logout.php" class="btn-crear-categoria">
                    Nueva categoria
                </a>
                <a href="logout.php" class="btn-editar">
                    Mis datos
                </a>
                <a href="logout.php" class="btn-cerrar">
                    Cerrar sesion
                </a>
            <?php else: ?>
                <a href="formLogin.php" class="btn-ingresar">
                    Ingresar
                </a>
                <a href="formRegistrar.php" class="btn-registrar">
                    Registrarse
                </a>
            <?php endif; ?>
        </div>

    </header>

    <!-- MENU -->
    <nav id="menu">
        <ul>
            <li>
                <a href="index.php">
                    Inicio
                </a>
            </li>
            <?php while($categoria = mysqli_fetch_assoc($categorias)):  ?>

            <li>
                <a href="categoria.php?id=<?php echo $categoria['id'];?>"><?= $categoria['nombre']; ?> </a>
            </li>

            <?php endwhile; ?>
        </ul>
    </nav>
