<?php

class Kennels extends Products 
    {
        // Variabili aggiuntive per questa categoria:

        public $typekennels; // per animale piccolo, grande.
        public $material; // legno, tessuto.


        function __construct($price, $quantity, $size, $timeshipping, $register, $typekennels ,$material)
        {
            parent::__construct($price, $quantity, $size, $timeshipping, $register);

            $this->typekennels = $typekennels;
            $this->material = $material;
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