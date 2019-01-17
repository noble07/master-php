<?php require_once 'includes/header.php';?>
<?php
    $categoria_actual = conseguirCategoria($db, $_GET['id']);
    if (!isset($categoria_actual['id'])) {
        header('Location: index.php');
    }
?>
<?php require_once 'includes/sidebar.php';?>

<!-- CAJA PRINCIPAL -->
<div id="main-box">

    <h1>Entradas de <?= $categoria_actual['nombre']; ?></h1>

    <?php
        $entradas = conseguirEntradas($db, null, $_GET['id']);
        if(!empty($entradas) && mysqli_num_rows($entradas) >= 1):
            while ($entrada = mysqli_fetch_assoc($entradas)):
    ?>
                <article class="article">
                    <a href="">
                        <h2><?= $entrada['titulo'] ?></h2>
                        <span class="date"><?= $entrada['categoria'].' | '.$entrada['fecha']?></span>
                        <p>
                            <?= substr($entrada['descripcion'], 0, 180)."..." ?>
                        </p>
                    </a>
                </article>
    <?php
            endwhile;
        else:
    ?>
    <div class="alerta">No hay entradas en esta categoria</div>
    <?php
        endif;
    ?>
</div><!--FIN PRINCIPAL-->

<?php require_once 'includes/footer.php';?>