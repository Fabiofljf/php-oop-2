<?php

class User {

    public $name; // Nome utente (non usato)
    public $register; // Indico se l'utente è registrato.
    public $sconto = 0;

    public function __construct($name, $register = false, $sconto) {
        $this->name = $name;
        $this->register = $register;
        $this->sconto = $sconto;
    }

    function getsconto(){
        if($this->register == true){
            $this->sconto = 0.20;
        }
    }
}

$newUser = new User ('fabio', true, 0);
$newUser->getsconto();
var_dump($newUser);