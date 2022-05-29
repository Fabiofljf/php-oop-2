<?php

require_once __DIR__ . '/User.php';

// Trait

    trait Dimensione{
        public $dimesione;
    }

// Creo una classe generica in riferimento al mio e-commerce di prodotti per animali.
class Products
{

    use Dimensione;
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

    public function getDiscount(User $user){
        $discount = $this->price * $user->sconto;
        $this->price = $this->price - $discount;
        return $this->price;
    }
}
