<?php
// Importo il file che contiene la classe generica (padre).

require_once __DIR__ . '/Models/Product.php'; // - Categoria Generica.

require_once __DIR__ . '/SubCategory/Food.php'; // - Sub-categoria per cibo.

require_once __DIR__ . '/SubCategory/Toys.php'; // - Sub-categoria giochi.

require_once __DIR__ . '/SubCategory/Kennels.php'; // - Sub-categoria per cucce.


// Prodotti FOOD:
$foods =
    [
        new Food(12.50, 12, '2kg', '1day', true, '2kg', 'kats', 'dryfood'),
        new Food(7, 10, '500gr', '1day', true, '500gr', 'kats', 'dryfood')
    ];


// Prodotti TOYS:

$toys = [
    new Toys(22, 5, '30cm', '24h', false, 'little obejct', 'eraser'),
    new Toys(8, 25, '10cm', '24h', true, 'little obejct', 'bone')
];


// Prodotti KENNELS:
$kennels = 
[
    new Kennels(32, 12, '112x113cm', '2days', true, 'littledogs', 'fabric'),
    new Kennels(60, 2, '162x183cm', '2days', false, 'bigdogs', 'fabric')
];
