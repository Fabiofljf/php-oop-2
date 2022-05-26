<?php
// Importo il file che contiene la classe generica (padre).

require_once __DIR__ . '/Models/Product.php'; // - Categoria Generica.

require_once __DIR__ . '/SubCategory/Food.php'; // - Sub-categoria per cibo.

require_once __DIR__ . '/SubCategory/Toys.php'; // - Sub-categoria giochi.


// Provo a invocare un'istanza tipo.
$product1 = new Food('$price', '$quantity', '$size', '$timeshipping', '$weight' ,'$kind' ,'$typefood');
var_dump($product1);

// Provo a invocare un'istanza tipo.
$product2 = new Toys('$price', '$quantity', '$size', '$timeshipping', '$type' ,'$typetoys');
var_dump($product2);
