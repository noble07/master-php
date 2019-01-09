<?php

    /*
    CONDICIONAL IF

      if(condicion){
          instrucciones
      }else{
          otras instrucciones
      }


    OPERADORES DE COMPARACIÓN
        ==  igual
        === identico
        !=  distinto
        <>  diferente
        !== no identico
        <   menor que
        >   mayor que
        <=  menor 0 igual que
        >=  mayor o igual que


    OPERADORES LOGICOS

        &&  AND Y
        ||  OR  O
        !   NOT NO
        and, or
    */

    // Ejemplo 1
    $color = 'verde';

    if ($color=='rojo') {
        echo 'El color es rojo';
    }else{
        echo 'El color no es rojo';
    }
    echo '<br>';
    

    // Ejemplo 2
    $year = 2019;

    if ($year < 2019) {
        echo 'Estamos en 2019';
    }else{
        echo 'No estamos en 2019';
    }


    // Ejemplo 3
    
    $nombre = 'David Extremadura';
    $ciudad = 'Madrid';
    $continente = 'Europa';
    $edad = 49;
    $mayoriaEdad = 18;

    if ($edad >= $mayoriaEdad) {
        echo '<h1>'.$nombre.' es mayor de edad'.'</h1>';

        if ($continente == 'Europa') {
            echo '<h2>Y es de '.$ciudad.'</h2>';
        }else {
            echo 'No es Europeo';
        }
        
    }else {
        echo '<h2>'.$nombre.' no es mayor de edad'.'</h2>';
    }

    // Ejemplo 4

    $dia = 3;

    if ($dia == 1) {
        echo 'Es Lunes';
    } elseif ($dia == 2) {
        echo 'Es Martes';
    } elseif ($dia == 3) {
        echo 'Es Miercoles';
    } elseif ($dia == 4) {
        echo 'Es Jueves';
    } elseif ($dia == 5) {
        echo 'Es Viernes';
    } else  {
        echo 'Es fin de semana';
    }

    echo '<hr>';

    // SWITCH

    $dia = 1;

    switch ($dia) {
        case 1:
            echo 'Lunes';
            break;
        case 2:
            echo 'Martes';
            break;
        case 3:
            echo 'Miercoles';
            break;
        case 4:
            echo 'Jueves';
            break;
        case 5:
            echo 'Viernes';
            break;
        default:
            echo 'Finde';
            break;
    }


    echo '<hr>';

    // Ejemplo 5

    $edad1 = 18;
    $edad2 = 64;
    $edadOficial = 20;

    if ($edadOficial >= $edad1 && $edadOficial <= $edad2) {
        echo 'Esta en edad de trabajar';
    }else {
        echo 'No puede trabajar ';
    }

    echo '<hr>';

    $pais = 'Mexico';
    if ($pais == 'Mexico' || $pais == 'España' || $pais == 'Colombia') {
        echo 'En este pais se habla español';
    }else{
        echo 'No se habla español';
    }


    // GOTO
    goto marca;
    echo '<h3>Instruccion 1</h3>';
    echo '<h3>Instruccion 2</h3>';
    echo '<h3>Instruccion 3</h3>';
    echo '<h3>Instruccion 4</h3>';

    marca:
    echo '<h1>Me he saltado 4 echos</h1>';
?>