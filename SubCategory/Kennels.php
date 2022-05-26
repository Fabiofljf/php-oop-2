<?php

class Kennels extends Products 
    {
        // Variabili aggiuntive per questa categoria:

        public $typekennels; // per animale piccolo, grande.
        public $material; // legno, tessuto.


        function __construct($price, $quantity, $size, $timeshipping, $typekennels ,$material)
        {
            parent::__construct($price, $quantity, $size, $timeshipping, $register, $discount);

            $this->typekennels = $typekennels;
            $this->material = $material;
        }
    }