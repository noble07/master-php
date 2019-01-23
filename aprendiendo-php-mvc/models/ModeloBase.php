<?php
require_once 'config/database.php';
class ModeloBase{

    public $db;

    public function __construct(){
        $this->db = database::conectar();
    }

    public function conseguirTodos(){
        return "Sacando todos los usuarios";
    }
}