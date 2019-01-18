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

    <h1><?= $entrada_actual['titulo']; ?></h1>
    <a href="category.php?id=<?= $entrada_actual['categoria_id'] ?>">
        <h2><?= $entrada_actual['categoria']; ?></h2>
    </a>
    <h4><?= $entrada_actual['fecha']; ?> | <?= $entrada_actual['usuario'] ?></h4>
    <p><?= $entrada_actual['descripcion']; ?></p>

    <?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']): ?>
        <br>
        <a href="edit-entrie.php?id=<?= $entrada_actual['id']; ?>" class="botton botton-green">Editar entrada</a>
        <a href="delete-entrie.php?id=<?= $entrada_actual['id']; ?>" class="botton">Eliminar entrada</a>
    <?php endif; ?>
</div><!--FIN PRINCIPAL-->

<?php require_once 'includes/footer.php';?>