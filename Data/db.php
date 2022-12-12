<?php

require __DIR__ . '/../Models/Category.php';
require __DIR__ . '/../Models/Product.php';
require __DIR__ . '/../Models/Food.php';
require __DIR__ . '/../Models/Toy.php';
require __DIR__ . '/../Models/Accessory.php';

$products = [
    $product1 = new Food(
        1,
        'Virtus Dog Adult Rustic',
        'Virtus',
        new Category('Dog'),
        '21,90',
        'https://arcaplanet.vtexassets.com/arquivos/ids/224338/virtus-rustic-cane-adult.jpg?v=1757258609',
        'Food',
        '7,5 kg',
        'Tacchino '
    ),

    $product2 = new Food(
        2,
        'Virtus Cat Adult Natural Lattina ',
        'Virtus ',
        new Category('Cat'),
        '1,65',
        'https://arcaplanet.vtexassets.com/arquivos/ids/272337/virtus-cat-native-formula-multipack-24x150g.jpg?v=1757251984',
        'Food',
        '150g',
        'Tonno con Cernia e Gamberetti'
    ),

    $product3 = new Toy(
        3,
        'KONG Puppy Goodie Bone',
        'Kong',
        new Category('Dog'),
        '11,30',
        'https://arcaplanet.vtexassets.com/arquivos/ids/223735/kong-puppy-goodie-bone-portabiscotti-pink-blue.jpg?v=1756343236',
        'Toy',
        '10 cm'
    ),

    $product4 = new Accessory(
        4,
        'Cuccia gatto sacco Amira',
        'Trixie',
        new Category('Cat'),
        '15,00',
        'https://arcaplanet.vtexassets.com/arquivos/ids/257706/36336.jpg?v=1753857767',
        'Accessory',
        'Poliestere',
        '40x60 cm'
    ),

    $product5 = new Accessory(
        5,
        'Maglione Passion San Valentino Panna',
        'Lovedi',
        new Category('Dog'),
        '15,95',
        'https://arcaplanet.vtexassets.com/arquivos/ids/266648/lovedi-maglione-passion-panna-indossato-cane.jpg?v=1757241705',
        'Accessory',
        'Lana merinos',
        '47'
    ),

    $product6 = new Food(
        6,
        'Gourmet Gold Gatto Mix Mousse Multipack',
        'Gourmet',
        new Category('Cat'),
        '19,95',
        'https://arcaplanet.vtexassets.com/arquivos/ids/275290/gourmet-gold--gatto-mix-moussemultipack-48.jpg?v=1757261524',
        'Food',
        '85g',
        'Pesce dell\'oceano'
    ),

    $product7 = new Toy(
        7,
        'Maiale in Lattice',
        'Trixie',
        new Category('Dog'),
        '6,90',
        'https://arcaplanet.vtexassets.com/arquivos/ids/272933/trixie-maiale-in-lattice-rosa.jpg?v=1757014094',
        'Toy',
        '11 cm'
    ),
    $product8 = new Toy(
        8,
        'KONG Dotz Circle',
        'Kong',
        new Category('Dog'),
        '7,56',
        'https://arcaplanet.vtexassets.com/arquivos/ids/207398/Kong-Dotz-Circle-Small.jpg?v=1757249547',
        'Toy',
        'S'
    ),
];
