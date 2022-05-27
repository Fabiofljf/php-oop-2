<?php
// Importo il file che contiene la classe generica (padre).

require_once __DIR__ . '/Models/User.php'; // - Categoria Generica.

require_once __DIR__ . '/Models/Product.php'; // - Categoria Generica.

require_once __DIR__ . '/SubCategory/Food.php'; // - Sub-categoria per cibo.

require_once __DIR__ . '/SubCategory/Toys.php'; // - Sub-categoria giochi.

require_once __DIR__ . '/SubCategory/Kennels.php'; // - Sub-categoria per cucce.


// Prodotti FOOD:
$foods =
    [
        new Food(12.50, 12, '2kg', '1day', '2kg', 'kats', 'Dryfood'),
        new Food(7, 10, '500gr', '1day', '500gr', 'kats', 'Dryfood'),
        new Food(14, 12, '2kg', '2day', '2kg', 'dogs', 'Dryfood'),
        new Food(3, 10, '500gr', '2day', '500gr', 'dogs', 'Dryfood'),
    ];




// Prodotti TOYS:

$toys = [
    new Toys(16, 5, '7cm', '24h', 'small obejct', 'Eraser'),
    new Toys(27, 25, '13cm', '24h', 'little obejct', 'Bone'),
    new Toys(34, 5, '24cm', '24h', 'medium obejct', 'Eraser'),
    new Toys(43, 5, '33cm', '24h', 'big obejct', 'Bone')
];


// Prodotti KENNELS:
$kennels = 
[
    new Kennels(32, 12, '112x113cm', '2days', 'littledogs', 'Fabric'),
    new Kennels(62, 12, '112x113cm', '2days', 'medium', 'Fabric'),
    new Kennels(130, 2, '162x183cm', '2days', 'bigdogs', 'Wood'),
    new Kennels(200, 2, '232x253cm', '2days', 'xxl', 'Wood')
];
