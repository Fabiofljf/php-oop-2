<!-- 
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.

L'e-commerce vende prodotti per gli animali.

I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.

Il pagamento avviene con la carta di credito, che non deve essere scaduta.
 -->

<?php
// 1. Creo una classe generica in riferimento al mio e-commerce di prodotti per animali
class Products {
    // 2. Inserisco acune variabili d'istanza comuni per tutte le sotto-categorie.

    public $price;
    public $quantity;
    public $size;
    public $timeshipping;

    // 3. Function construct
    public function __construct(String $price, String $quantity, String $size, String $timeshipping) {
        $this->price = $price;
        $this->quantity = $quantity;
        $this->size = $size;
        $this->timeshipping = $timeshipping;
    }
}

// 4. Invoco l'istanza tipo.
$product1 = new Products('$price', '$quantity', '$size', '$timeshipping');
var_dump($product1);