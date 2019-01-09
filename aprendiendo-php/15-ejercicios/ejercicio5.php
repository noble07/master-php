<?php

    /**
     * Ejercicio 5. Crear un array con el contenido de la siguiente tabla:
     * ACCION  AVENTURA     DEPORTES
     * GTA     ASSASIN1S    FIFA 19
     * COD     CRASH        PES 19
     * PUBG    PRINCE       MOTO GP 19
     * 
     * Cada fila debe ir en un fichero separado(includes)
     */

    $tabla = array(
        'Accion' => array('GTA', 'COD', 'PUBG'), 
        'Aventura' => array('FIFA 19', 'PES 19', 'Moto GP 19'), 
        'Deportes' => array('Assasins', 'Crash', 'Prince of persia')
    );

    //var_dump($tabla);
    $categorias = array_keys($tabla);
?>

<table border=1>
    <?php
        include 'includes/encabezado.php';
        include 'includes/fila1.php';
        include 'includes/fila2.php';
        include 'includes/fila3.php';
    ?>
</table>