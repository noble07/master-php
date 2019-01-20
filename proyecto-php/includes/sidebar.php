<!-- SIDEBAR -->
<aside id="sidebar">

    <div id="search" class="block-aside">
            <h3>Buscar</h3>

            <form action="search.php" method="POST">
                <input type="text" name="search">

                <input type="submit" value="Buscar">
            </form>
        </div>

    <?php if(isset($_SESSION['usuario'])): ?>
        <div id="usuario-logueado" class="block-aside">
            <h3>Bienvenido, <?= $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos'];?></h3>
            <!--BOTONES-->
            <a href="create-entries.php" class="botton botton-green">Crear entradas</a>
            <a href="create-category.php" class="botton">Crear categoria</a>
            <a href="my-data.php" class="botton botton-orange">Mis datos</a>
            <a href="logout.php" class="botton botton-red">Cerrar sesión</a>
        </div>
    <?php endif; ?>

    <?php if(!isset($_SESSION['usuario'])): ?>
        <div id="login" class="block-aside">
            <h3>Identificate</h3>
            <?php if(isset($_SESSION['error_login'])): ?>
                <div class="alerta alerta-error">
                    <?= $_SESSION['error_login']; ?>
                </div>
            <?php endif; ?>
            <form action="login.php" method="POST">
                <label for="email">Email</label>
                <input type="email" name="email">

                <label for="password">Contraseña</label>
                <input type="password" name="password">

                <input type="submit" value="Entrar">
            </form>
        </div>

        <div id="register" class="block-aside">
            <h3>Registrate</h3>

            <!--Mostrar errores -->
            <?php if (isset($_SESSION['completado'])): ?>
                <div class="alerta alerta-exito">
                    <?= $_SESSION['completado']; ?>
                </div>
            <?php elseif(isset($_SESSION['errores']['general'])): ?>
                <div class="alerta alerta-error">
                    <?= $_SESSION['errores']['general']; ?>
                </div>
            <?php endif; ?>
            <form action="register.php" method="POST">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre">
                <?= isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos">
                <?= isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>

                <label for="email">Email</label>
                <input type="email" name="email">
                <?= isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

                <label for="password">Contraseña</label>
                <input type="password" name="password">
                <?= isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>

                <input type="submit" name="submit" value="Registrar">
            </form>
            <?php borrarErrores(); ?>
        </div>
    <?php endif; ?>
</aside>