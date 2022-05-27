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
    }

    var_dump($price);