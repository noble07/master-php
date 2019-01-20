<?php require_once 'includes/header.php';?>
<?php
    if (!isset($_POST['search'])) {
        header('Location: index.php');
    }
?>
<?php require_once 'includes/sidebar.php';?>

<!-- CAJA PRINCIPAL -->
<div id="main-box">

    <h1>Busqueda: <?= $_POST['search']; ?></h1>

    <?php
        $entradas = conseguirEntradas($db, null, null, $_POST['search']);

        if(!empty($entradas) && mysqli_num_rows($entradas) >= 1):
            while ($entrada = mysqli_fetch_assoc($entradas)):
    ?>
                <article class="article">
                    <a href="entrie-detail.php?id=<?= $entrada['id'];?>">
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