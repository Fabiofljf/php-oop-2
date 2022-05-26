<?php
// Importo il file che contiene la classe generica (padre).

require_once __DIR__ . '/Models/Product.php'; // - Categoria Generica.

require_once __DIR__ . '/SubCategory/Food.php';


// Provo a invocare un'istanza tipo.
$product1 = new Food('$price', '$quantity', '$size', '$timeshipping');
var_dump($product1);
