<?php require_once 'includes/helpers.php'; ?>
<!-- SIDEBAR -->
<aside id="sidebar">
    <div id="login" class="block-aside">
        <h3>Identificate</h3>
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
            <?= $_SESSION['errores']['general']; ?>
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
</aside>