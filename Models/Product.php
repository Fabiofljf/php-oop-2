<?php
// Creo una classe generica in riferimento al mio e-commerce di prodotti per animali.

class Products
{
    // Inserisco acune variabili d'istanza comuni per tutte le categorie.

    public $price;
    public $quantity;
    public $size;
    public $timeshipping;
    public $register;

    // Function construct.
    public function __construct($price, $quantity, $size, $timeshipping, $register)
    {
        $this->price = $price;
        $this->quantity = $quantity;
        $this->size = $size;
        $this->timeshipping = $timeshipping;
        $this->register = $register;
        
    }

    public function getDiscount(){
        if($this->register = true){
            $discount = 20;
            $this->price = $discount;
        }
        return $this->price;
    }
}
