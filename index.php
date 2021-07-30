<?php
    include "assets/includes/header.html";
    include "assets/includes/menu.php";
    require_once "assets/includes/conexion.php";
?>
    <div id="contenedor">

    <?php if(isset($_SESSION['usuarioLogueado'])) : ?>
        <div class="saludo">
            <?= "BIENVENIDO/A ".$_SESSION['usuarioLogueado']['nombre']." ".$_SESSION['usuarioLogueado']['apellidos']. "!";?>
        </div>
    <?php endif; ?>

        <!-- CONTENIDO PRINCIPAL -->
        <div id="principal">
            <h1>Estos son los ultimos post:</h1>
            <article class="entradas">
                <div class="entrada">
                    <h2>Titulo de mi entrada</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil reiciendis quaerat nemo!
                        Eveniet, quibusdam minima quo qui at aspernatur sapiente. Ratione reiciendis repudiandae 
                        harum delectus earum ad id laboriosam aperiam natus, accusamus voluptate consequatur 
                        deserunt excepturi vitae itaque iste recusandae neque, quos vero incidunt iure assumenda.
                        Fugit magnam veritatis repudiandae?
                    </p>
                    <a href="#" class="postBtn" >
                        Ver mas
                    </a>
                </div>
                <div class="entrada">
                    <h2>Titulo de mi entrada</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil reiciendis quaerat nemo!
                        Eveniet, quibusdam minima quo qui at aspernatur sapiente. Ratione reiciendis repudiandae 
                        harum delectus earum ad id laboriosam aperiam natus, accusamus voluptate consequatur 
                        deserunt excepturi vitae itaque iste recusandae neque, quos vero incidunt iure assumenda.
                        Fugit magnam veritatis repudiandae?
                    </p>
                    <a href="#" class="postBtn" >
                        Ver mas
                    </a>
                </div>
                <div class="entrada">
                    <h2>Titulo de mi entrada</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil reiciendis quaerat nemo!
                        Eveniet, quibusdam minima quo qui at aspernatur sapiente. Ratione reiciendis repudiandae 
                        harum delectus earum ad id laboriosam aperiam natus, accusamus voluptate consequatur 
                        deserunt excepturi vitae itaque iste recusandae neque, quos vero incidunt iure assumenda.
                        Fugit magnam veritatis repudiandae?
                    </p>
                    <a href="#" class="postBtn" >
                        Ver mas
                    </a>
                </div>
                
            </article>
        </div>

    </div>


<?php 
    include "assets/includes/footer.html";
?>