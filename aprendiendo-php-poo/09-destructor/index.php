<?php

class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = 'Juan Camilo Muñoz';
        $this->email = 'juan@juan.com';

        echo "Creando el objeto<br>";
    }

    public function __toString(){
        return "Hola, {$this->nombre}, estas registrado con {$this->email}";
    }

    public function __destruct(){
        echo "<br>Destruyendo el objeto";
    }
}

$usuario = new Usuario();
echo $usuario;
