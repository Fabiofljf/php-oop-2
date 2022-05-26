<?php

class Toys extends Products 
    {
        // Variabili aggiuntive per questa categoria:

        public $type; // oggetto piccolo, oggetto grande.
        public $typetoys; // gomma, legno.


        function __construct($price, $quantity, $size, $timeshipping, $register, $type ,$typetoys)
        {
            parent::__construct($price, $quantity, $size, $timeshipping, $register);

            $this->type = $type;
            $this->typetoys = $typetoys;
        }
        
        public function getDiscount(){
            if($this->register = true){
                $user = $this->price * 20 / 100;
                $discount = $this->price - $user;
                $this->price = $discount;
            }
            return $this->price;
        }
    }