<?php

// Capturar excepciones, en codigo suceptible a errores
try {

    if(isset($_GET['id'])){
        echo "<h1>El parametro es: {$_GET['id']}</h1>";
    }else{
        throw new Exception('Faltan parametros');
    }

} catch (Exception $ex) {
    echo 'Ha habido un error: '.$ex->getMessage();

}