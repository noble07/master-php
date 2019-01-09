<?php

    /**
     * Ejercicio 3. Programa que compruebe si una variable esta vacia y si esta vacia rellenarla
     * con texto en minusculas y mostrarlo en mayusculas y negrita
     */

    $var = '';

    if(empty($var)){
        $var = 'texto de algo';
        echo '<strong>'.strtoupper($var).'</strong>';
    }else{
        echo '<p>La variable no esta vacia tiene este contenido: '.$var.'</p>';
    }

    

?>