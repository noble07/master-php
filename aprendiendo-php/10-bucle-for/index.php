<?php

    /* FOR
    for (variable contador; condicion ; actualizando contador) { 
        # code...
    }*/

    $resultado = 0;

    for ($i=0; $i <= 100 ; $i++) { 
        $resultado += $i;
    }

    echo '<h1>El resultado es: '.$resultado.'</h1>';


    echo '<hr>';

    //Ejemplo tabla multiplicar con for

    if (isset($_GET['numero'])) {
        //Cambiar tipo de dato a entero
        $numero = (int) $_GET['numero'];
    }else{
        $numero = 1;
    }

    echo '<h1>Tabla multiplicar del numero '.$numero.'</h1>';

    for($i = 0; $i <= 10; $i++) {

        if ($numero == 45) {
            echo 'No se pueden mostrar operaciones';
            break;
        }
        echo $numero.' x '.$i.' = '.($numero*$i).'<br>';
    }
?>