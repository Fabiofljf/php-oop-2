<?php

class Food extends Products 
    {
        // Variabili aggiuntive per questa categoria:

        public $weight; // 1k, 2k.
        public $kind; // uccelli, felini.
        public $typefood; // corccantini, osso.


        function __construct($price, $quantity, $size, $timeshipping, $register, $weight ,$kind ,$typefood)
        {
            parent::__construct($price, $quantity, $size, $timeshipping, $register);

            $this->weight = $weight;
            $this->kind = $kind;
            $this->typefood = $typefood;
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