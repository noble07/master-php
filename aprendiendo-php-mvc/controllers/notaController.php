<?php

class NotaController{
    
    public function listar(){
        //Modelo
        require_once 'models/nota.php';

        // Logica Acción Controlador
        $nota = new Nota();
        $notas = $nota->conseguirTodos('notas');
        
        //Vista
        require_once 'views/nota/listar.php';
    }

    public function crear(){
        //Modelo
        require_once 'models/nota.php';

        $nota = new Nota();
        $nota->setUsuarioId(1);
        $nota->setTitulo('Nota desde PHP MVC');
        $nota->setDescripcion('Descripcion de mi nota');
        $nota->guardar();

        header('Location: index.php?controller=nota&action=listar');
    }

    public function borrar(){

    }
}