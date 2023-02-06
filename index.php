<?php
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Kennel.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php E-commerce</title>
</head>

<body>
    <?php

    $productList = [
        $eridania = new Kennel(new Category('cani'), 'Eridania', 1.50, 'stoffa', '1.3m'),
        $croccantini = new Food(new Category('gatti'), 'Croccanti', 5.50, 'pepe', '01/03/2023'),
        $bocconcini = new Food(new Category('gatti'), 'Bocconcini Boccono', 20.45, 'carne', '01/03/2030'),
        $bama = new Kennel(new Category('cani'), 'Bama Super 2', 50.50, 'cashmire', '5m'),
        $doggy = new Kennel(new Category('cani'), 'Doggy 2', 30.99, 'flanella', '1.5m'),
    ];

    foreach ($productList as $item) {
        echo '<article>';
        echo "<img src='{$item->getGenre()->getImgPath()}' alt=''>";
        echo '<h1>' . $item->getName() . '</h1>';
        echo '<p>' . $item->getPrice() . '</p>';
        if ($item instanceof Food) {
            echo '<p>' . $item->getIngredients() . '</p>';
            echo '<p>' . $item->getExpireDate() . '</p>';
        }
        if ($item instanceof Kennel) {
            echo '<p>' . $item->getMaterial() . '</p>';
            echo '<p>' . $item->getSize() . '</p>';
        }
        echo '<hr>';
        echo '</article>';
    }

    ?>
</body>

</html>