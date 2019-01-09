<?php
    /**
     * ARRAYS:
     * Un array es una colección o un conjunto de datos/valores, bajo un unico nombre.
     * y para acceder a esos valores podemos usar un indece numerico o alfanumerico.
     */

    $pelicula = 'Batman';
    $peliculas = array('Batman', 'Spiderman', 'Lord of the Rings');
    $cantantes = ['2pac', 'Drake', 'Jennifer Lopez'];
    $personas = array(
        'nombre' => 'Juan camilo',
        'apellidos' => 'Muñoz',
        'web' => 'google.com'
    );

    //Array asociativo
    echo $personas['apellidos'];

    // Recorrer Array con FOR
    echo '<h1>Listado de peliculas</h1>';

    echo '<ul>';
    for ($i=0; $i < count($peliculas); $i++) { 
        echo '<li>'.$peliculas[$i].'</li>';
    }
    echo '</ul>';

    //Recorrer Array con FOREACH
    echo '<h1>Listado de cantantes</h1>';

    echo '<ul>';
    foreach ($cantantes as $cantante) {
        echo '<li>'.$cantante.'</li>';
    }
    echo '</ul>';

    //Arrays multidimensionales
    $contactos = array(
        array(
            'nombre' => 'Juan Camilo',
            'email' => 'juank98@gmail.com'
        ),
        array(
            'nombre' => 'Luis',
            'email' => 'luis@gmail.com'
        ),
        array(
            'nombre' => 'Hugo',
            'email' => 'hugo@gmail.com'
        )
    );

    //echo $contactos[2]['email'];
    foreach ($contactos as $key => $contacto) {
        var_dump($contacto['nombre']);
    }
?>