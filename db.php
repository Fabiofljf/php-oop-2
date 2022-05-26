<?php
// Importo il file che contiene la classe generica (padre).

require_once __DIR__ . '/Models/Product.php';

// Provo a invocare un'istanza tipo.
$product1 = new Products('$price', '$quantity', '$size', '$timeshipping');
var_dump($product1);