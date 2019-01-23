<h1>Bienvenido a mi web con MVC</h1>

<?php
require_once 'controllers/usuario.php';
require_once 'controllers/nota.php';

if ($_GET['controller']) {
    $nombre_controlador = $_GET['controller'].'Controller';
}else{
    echo "La pagina que buscas no existe";
    exit();
}

if (class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();

    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    
    }else{
        echo "La pagina que buscas no existe";
    }
}else{
    echo "La pagina que buscas no existe";
}

