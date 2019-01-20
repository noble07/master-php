<?php require_once 'includes/redirection.php';?>
<?php require_once 'includes/header.php';?>
<?php
    $entrada_actual = conseguirDetalleEntrada($db, $_GET['id']);
    if (!isset($entrada_actual['id'])) {
        header('Location: index.php');
    }
?>
<?php require_once 'includes/sidebar.php';?>

        <!-- CAJA PRINCIPAL -->
    <div id="main-box">
        <h1>Editar entrada</h1>
        <p>Edita tu entrada <?= $entrada_actual['titulo']; ?></p>
        <br>
        <form action="save-entries.php?edit=<?= $entrada_actual['id']; ?>" method="post">
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" value="<?= $entrada_actual['titulo']; ?>">
            <?= isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>

            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion"><?= $entrada_actual['descripcion']; ?></textarea>
            <?= isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>
            <label for="categoria">Categoría:</label>
            <select name="categoria">
                <?php
                    $categorias = conseguirCategorias($db);
                    if(!empty($categorias)):
                    while($categoria = mysqli_fetch_assoc($categorias)):
                ?>
                    <option value="<?= $categoria['id']; ?>" <?= ($categoria['id'] == $entrada_actual['categoria_id']) ? 'selected = "selected"' : '' ?>>
                        <?= $categoria['nombre'] ?>
                    </option>
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