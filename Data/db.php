<?php

require __DIR__ . '/../Models/Category.php';
require __DIR__ . '/../Models/Product.php';
require __DIR__ . '/../Models/Food.php';
require __DIR__ . '/../Models/Toy.php';
require __DIR__ . '/../Models/Accessory.php';

$products = [
    $product1 = new Product(1, 'nome1', 'brand1', new Category('dog'), 10, 'https://i1.wp.com/potafiori.com/wp-content/uploads/2020/04/placeholder.png?ssl=1'),
    $product2 = new Product(2, 'nome2', 'brand2', new Category('cat'), 20, 'https://i1.wp.com/potafiori.com/wp-content/uploads/2020/04/placeholder.png?ssl=1'),
    $product3 = new Product(3, 'nome3', 'brand3', new Category('dog'), 30, 'https://i1.wp.com/potafiori.com/wp-content/uploads/2020/04/placeholder.png?ssl=1'),
    $product4 = new Product(4, 'nome4', 'brand4', new Category('cat'), 40, 'https://i1.wp.com/potafiori.com/wp-content/uploads/2020/04/placeholder.png?ssl=1'),
    $product5 = new Product(5, 'nome5', 'brand5', new Category('dog'), 50, 'https://i1.wp.com/potafiori.com/wp-content/uploads/2020/04/placeholder.png?ssl=1'),
    $product6 = new Product(6, 'nome6', 'brand6', new Category('cat'), 60, 'https://i1.wp.com/potafiori.com/wp-content/uploads/2020/04/placeholder.png?ssl=1'),
    $product7 = new Product(7, 'nome7', 'brand7', new Category('dog'), 70, 'https://i1.wp.com/potafiori.com/wp-content/uploads/2020/04/placeholder.png?ssl=1'),
    $product8 = new Product(8, 'nome8', 'brand8', new Category('cat'), 80, 'https://i1.wp.com/potafiori.com/wp-content/uploads/2020/04/placeholder.png?ssl=1'),
];
