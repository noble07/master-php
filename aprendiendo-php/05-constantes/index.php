<?php 

    /*
     Constante
     Es un contenedor de información que no puede variar
     */

    define('nombre', 'Juan Camilo Muñoz');
    define('web', 'google.com');

    echo '<h1>'.nombre.'</h1>';
    echo '<h1>'.web.'</h1>';
     
    //Variable
    $web = 'google.com';
    $web = 'Holi <3';

    echo $web.'<br>';

    // Constantes predefinidas

    echo PHP_VERSION;
    echo '<br>';
    echo PHP_OS;
    echo '<br>';
    echo PHP_EXTENSION_DIR;
    echo '<br>';
    echo __LINE__;
    echo '<br>';
    echo __FILE__;
    echo '<br>';
?>