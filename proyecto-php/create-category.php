<?php require_once 'includes/redirection.php';?>
<?php require_once 'includes/header.php';?>
<?php require_once 'includes/sidebar.php';?>

<!-- CAJA PRINCIPAL -->
<div id="main-box">
    <h1>Crear categorias</h1>
    <p>Añade nuevas categorias al blog para que los usuarios puedan usarlas
    al crear sus entradas.</p>
    <br>
    <form action="save-category.php" method="post">
        <label for="nombre">Nombre de la categoria</label>
        <input type="text" name="nombre">
        <?= isset($_SESSION['errores_categoria']) ? mostrarError($_SESSION['errores_categoria'], 'nombre') : ''; ?>

        <input type="submit" value="Guardar">
    </form>
    <?php borrarErrores(); ?>
</div><!--FIN PRINCIPAL-->


<?php require_once 'includes/footer.php';?>