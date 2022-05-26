<?php
// Creo una classe generica in riferimento al mio e-commerce di prodotti per animali.

class Products
{
    // Inserisco acune variabili d'istanza comuni per tutte le categorie.

    public $price;
    public $quantity;
    public $size;
    public $timeshipping;
    public $register = false;
    public $discount = 0;

    // Function construct.
    public function __construct($price, $quantity, $size, $timeshipping, $register, $discount)
    {
        $this->price = $price;
        $this->quantity = $quantity;
        $this->size = $size;
        $this->timeshipping = $timeshipping;
    }

    // function getSale(){
    //     if(User = true){
    //         $this->discount = ($price * 20) / 100);
    //     }
    // }
}
