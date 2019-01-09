<?php
    /*BUCLE WHILE
    Estructura de control que itera o repite la ejecucion de una serie de instrucciones
    tantas veces como sea necesario, en base a una condición que el bucle lleva
    
    while (condición) {
        # code...
    }
    */

    $numero = 0;
    while ($numero <= 100) {
        echo $numero;
        if ($numero != 100) {
            echo ' ,';
        }
        $numero++;
    }

    echo '<hr>';

    //Ejemplo

    if (isset($_GET['numero'])) {
        //Cambiar tipo de dato a entero
        $numero = (int) $_GET['numero'];
    }else{
        $numero = 1;
    }

    echo '<h1>Tabla multiplicar del nuemro '.$numero.'</h1>';

    $cont = 0;
    while ($cont <= 10) {
        echo $numero.' x '.$cont.' = '.($numero*$cont).'<br>';
        $cont++;
    }

    echo '<hr>';

    /* DO WHILE

    do {
        # code...
    } while ($a <= 10);*/

    $edad = 18;
    $cont = 1;
    do {
        echo 'Tienes acceso al local privado '.$cont.'<br>';
        $cont++;
    } while ($edad >= 18 && $cont <= 10);
?>