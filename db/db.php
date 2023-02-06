<?php
require_once __DIR__ . '/../models/cart.php';


$productList = [
    $eridania = new Kennel(new Category('cani'), 'Eridania', 1.50, 'stoffa', '1.3m'),
    $croccantini = new Food(new Category('gatti'), 'Croccanti', 5.50, 'pepe', '01/03/2023'),
    $bocconcini = new Food(new Category('gatti'), 'Bocconcini Boccono', 20.45, 'carne', '01/03/2030'),
    $bama = new Kennel(new Category('cani'), 'Bama Super 2', 50.50, 'cashmire', '5m'),
    $doggy = new Kennel(new Category('cani'), 'Doggy 2', 30.99, 'flanella', '1.5m'),
];


$actualCart = new Cart(0, 0);

foreach ($productList as $item) {
    $actualCart->addNewProduct();
    $actualCart->addNewPrice($item->getPrice());
}

var_dump($actualCart);
