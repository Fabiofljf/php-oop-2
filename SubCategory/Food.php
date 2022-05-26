<?php

class Food extends Products 
    {
        function __construct($price, $quantity, $size, $timeshipping)
        {
            parent::__construct($price, $quantity, $size, $timeshipping);
        }
    }