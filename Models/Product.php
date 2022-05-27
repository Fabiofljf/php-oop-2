<?php

require_once __DIR__ . '/User.php';

// Creo una classe generica in riferimento al mio e-commerce di prodotti per animali.
class Products
{

    // Inserisco alcune variabili d'istanza comuni per tutte le categorie.

    public $price;
    public $quantity;
    public $size;
    public $timeshipping;

    // Function construct.
    public function __construct($price, $quantity, $size, $timeshipping)
    {
        $this->price = $price;
        $this->quantity = $quantity;
        $this->size = $size;
        $this->timeshipping = $timeshipping;
        
    }

    public function getDiscount($user){
        $discount = $this->price * $this->sconto;
        $this->price = $discount;
        return $this->price;
    }
}