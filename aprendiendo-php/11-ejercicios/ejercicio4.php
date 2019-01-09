<?php

/**
 * Recibir 2 nuemros por metodo GET y realizar las operaciones aritmeticas basicas con ellos
 */

    if (isset($_GET['numero1'], $_GET['numero2'])) {
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        echo '<h1>Calculadora</h1>';
        echo 'Suma de los dos numeros: '.($numero1+$numero2).'<br>';
        echo 'Resta de los dos numeros: '.($numero1-$numero2).'<br>';
        echo 'Multiplicacion de los dos numeros: '.($numero1*$numero2).'<br>';
        echo 'División de los dos numeros: '.($numero1/$numero2).'<br>';
    }else{
        echo 'Ingrese los valores por la URL';
    }

?>