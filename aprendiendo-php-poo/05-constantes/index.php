<?php

class Usuario{
    const URL_COMPLETA = 'http://localhost';
    public $email;
    public $password;

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }
}

echo Usuario::URL_COMPLETA;