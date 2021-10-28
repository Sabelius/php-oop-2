<?php
require_once __DIR__ . "/shop-logic/product.php";
require_once __DIR__ . "/shop-logic/television.php";
require_once __DIR__ . "/shop-logic/console.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>
<body>

    <div>
        <section>
            <h1>TELEVISORI</h1>
        <?php foreach ($televisions as $tv) { ?>
                <h2>NOME : <?php echo $tv->getName() ?></h2>
                <h3>MARCA: <?php echo $tv->getBrand() ?></h3>
                <h4>DISPONIBILITA': <?php echo $tv->amountNumber() ?></h4>
                <h4>MODELLO: <?php echo $tv->getModel() ?></h4>
                <h4>VIDEO: <?php echo $tv->getResolution() ." - ". $tv->visualQuality()?></h4>
                <h4>VIDEO: <?php echo $tv->getAudio() ?></h4>
                <h4>PREZZO: <?php echo $tv->getPrice() ?>€</h4>
            <?php } ?>
            <hr>
        </section>

        <section>
            <h1>GAME CONSOLE</h1>
        <?php foreach ($consoles as $console) { ?>
                <h2>NOME : <?php echo $console->getName() ?></h2>
                <h3>MARCA: <?php echo $console->getBrand() ?></h3>
                <h4>DISPONIBILITA': <?php echo $console->amountNumber() ?></h4>
                <h4>MODELLO: <?php echo $console->getModel() ?></h4>
                <h4>VIDEO: <?php echo $console->partyGame() ." - ". $tv->visualQuality()?></h4>
                <h4>VIDEO: <?php echo $console->power() ?></h4>
                <h4>PREZZO: <?php echo $console->getPrice() ?>€</h4>
            <?php } ?>
        </section>
    </div>
    
</body>
</html>