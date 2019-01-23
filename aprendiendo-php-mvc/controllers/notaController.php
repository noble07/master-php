<?php

class NotaController{
    
    public function listar(){
        //Modelo
        require_once 'models/nota.php';

        // Logica Acción Controlador
        $nota = new Nota();
        $nota->setNombre('Hola');
        $nota->setContenido('Hola Mundo PHP MVC');
        
        //Vista
        require_once 'views/nota/listar.php';
    }

    public function crear(){

    }

    public function borrar(){

    }
}