<?php require_once 'includes/header.php';?>

<?php require_once 'includes/sidebar.php';?>

<!-- CAJA PRINCIPAL -->
<div id="main-box">
    <h1>Ultimas entradas</h1>

    <?php
        $entradas = conseguirEntradas($db, true);
        if(!empty($entradas)):
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
        endif;
    ?>

    <div id="ver-todas">
        <a href="entries.php">Ver todas las entradas</a>
    </div>
</div><!--FIN PRINCIPAL-->

<?php require_once 'includes/footer.php';?>