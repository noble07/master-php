<?php
    /**
     * Ejercicio 6. Imprimir por pantalla las tablas de multiplicar de los numeros del 1 al 10
     * dentro de una tabla HTML
     */

    echo '<table border=\'1\'>';

    echo '<tr>';
        for ($i=1; $i <= 10 ; $i++) { 
            echo '<td>Tabla del '.$i.'</td>';
        }
    echo '</tr>';

    for ($i=1; $i <= 10; $i++) {
        echo '<tr>';
        for ($j=1; $j <= 10 ; $j++) { 
            echo '<td>'.$j.' x '.$i.' = '.($j*$i).'</td>';
        }
        echo '</tr>';
    }

    echo '</table>'
?>