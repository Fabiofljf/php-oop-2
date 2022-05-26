<?php

class Toys extends Products 
    {
        // Variabili aggiuntive per questa categoria:

        public $type; // oggetto piccolo, oggetto grande.
        public $typetoys; // gomma, legno.


        function __construct($price, $quantity, $size, $timeshipping, $type ,$typetoys)
        {
            parent::__construct($price, $quantity, $size, $timeshipping, $register, $discount);

            $this->type = $type;
            $this->typetoys = $typetoys;
        }
    }