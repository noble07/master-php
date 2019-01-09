<?php

    $cantantes = ['2pac', 'Drake', 'Jennifer Lopez','Alfredo'];
    $numeros = [1,2,5,8,3,4];

    // Ordenar
    sort($numeros);
    asort($cantantes);
    arsort($cantantes);
    var_dump($numeros);
    var_dump($cantantes);

    // Añadir elementos array
    $cantantes[] = 'Natos';
    array_push($cantantes, 'Waor');

    array_pop($cantantes);
    unset($cantantes[2]);

    // Aleatorio
    $indice = array_rand($cantantes);
    echo $cantantes[$indice];
    echo '<br>';

    // Dar la vuelta
    var_dump(array_reverse($numeros));
    echo '<br>';

    //Buscar dentro de un array
    $resultado = array_search('Drake', $cantantes);
    var_dump($resultado);
    echo '<br>';
    
    // Contar nuemro de elementos
    echo count($cantantes);
    echo '<br>';
    echo sizeof($cantantes);
?>