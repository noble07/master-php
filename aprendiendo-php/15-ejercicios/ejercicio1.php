<?php

    /**
     * Ejercicio 1. Hacer un programa en PHP que tenga una Array con 8 numeros enteros
     * y que haga lo siguiente:
     * - Recorrerlo y mostrarlo
     * - Ordenarlo y mostrarlo
     * - Mostrar su longitud
     * - Buscar algun elemento (buscar por metodo GET)
     */

    // Funciones
    function mostrarArray($array){
        $text = '';
        foreach ($array as $array) {
            $text .= $array.' ';
        }
        return $text;
    }

    $numeros = array (5, 7, 1, 4 ,3 ,6 ,2 ,8);

    //Recorrer y mostrar
    echo '<h2>Recorrer y mostrar</h2>';
    echo mostrarArray($numeros);
    echo '<br>';

    //Ordenar y mostrar
    echo '<h2>Ordenar y mostrar</h2>';
    sort($numeros);
    echo mostrarArray($numeros);

    //Mostrar longitud
    echo '<h2>Numero total de elementos</h2>';
    echo '<br>'.count($numeros);


    //Busqueda en array
    echo '<br>';
    if (isset($_GET['numero'])) {
        $busqueda = $_GET['numero'];
        echo '<h2>Busqueda en el array el número '.$busqueda.' </h2>';
        $search = array_search($busqueda, $numeros);
        if (!empty($search)) {
            echo '<h3>El numero buscado existe en el array, en el indice: '.$search.'</h3>';
        }else{
            echo '<h3>No existe el numero buscado en el array</h3>';
        }
    }else {
        echo 'Ingrese un numero por el metodo GET';
    }
    


?>