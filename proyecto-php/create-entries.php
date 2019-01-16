<?php require_once 'includes/redirection.php';?>
<?php require_once 'includes/header.php';?>
<?php require_once 'includes/sidebar.php';?>

<!-- CAJA PRINCIPAL -->
<div id="main-box">
    <h1>Crear entradas</h1>
    <p>Añade nuevas entradas al blog para que los usuarios puedan
    leerlas y disfrutar de nuestro contenido.</p>
    <br>
    <form action="save-entries.php" method="post">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo">
        <?= isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion"></textarea>
        <?= isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>
        <label for="categoria">Categoría:</label>
        <select name="categoria">
            <?php
                $categorias = conseguirCategorias($db);
                if(!empty($categorias)):
                while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
                <option value="<?= $categoria['id']; ?>"><?= $categoria['nombre'] ?></option>
            <?php
                endwhile;
                endif;
            ?>
        </select>
        <?= isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria') : ''; ?>

        <input type="submit" value="Guardar">
    </form>
    <?php borrarErrores(); ?>
</div><!--FIN PRINCIPAL-->


<?php require_once 'includes/footer.php';?>