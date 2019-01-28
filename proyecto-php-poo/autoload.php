<?php

spl_autoload_register(function ($className){
    if (file_exists('controllers/'.$className .'.php')) {
        include 'controllers/'.$className . '.php';
        return true;
    }

    return false;
});

?>