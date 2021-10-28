<?php
require_once __DIR__ . "/shop-logic/television.php";
require_once __DIR__ . "/shop-logic/console.php";
require_once __DIR__ . "/shop-logic/shirt.php";
require_once __DIR__ . "/shop-logic/jacket.php";
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

    <section>
        <div>
            <h1>TELEVISORI</h1>
            <?php foreach ($televisions as $tv) { ?>
                <h2>NOME : <?php echo $tv->getName() ?></h2>
                <h3>MARCA: <?php echo $tv->getBrand() ?></h3>
                <h4>DISPONIBILITA': <?php echo $tv->getAmount() . " - " . $tv->amountNumber() ?></h4>
                <h4>MODELLO: <?php echo $tv->getModel() ?></h4>
                <h4>VIDEO: <?php echo $tv->getResolution() . " - " . $tv->visualQuality() ?></h4>
                <h4>AUDIO: <?php echo $tv->getAudio() ?></h4>
                <h4>PREZZO: <?php echo $tv->getPrice() ?>€</h4>
            <?php } ?>
        </div>
        <hr>
        <div>
            <h1>GAME CONSOLE</h1>
            <?php foreach ($consoles as $console) { ?>
                <h2>NOME : <?php echo $console->getName() ?></h2>
                <h3>MARCA: <?php echo $console->getBrand() ?></h3>
                <h4>DISPONIBILITA': <?php echo $console->getAmount() . " - " . $console->amountNumber() ?></h4>
                <h4>MODELLO: <?php echo $console->getModel() ?></h4>
                <h4>MEMORIA: <?php echo $console->getMemory() . " - " . $console->power() ?></h4>
                <h4>NUMERO PAD: <?php echo $console->getPad() . " - " . $console->partyGame() ?></h4>
                <h4>PREZZO: <?php echo $console->getPrice() ?>€</h4>
            <?php } ?>
        </div>
    </section>

    <hr>
    <hr>

    <section>
        <div>
            <h1>SHIRTS</h1>
            <?php foreach ($shirts as $shirt) { ?>
                <h2>NOME : <?php echo $shirt->getName() ?></h2>
                <h3>MARCA: <?php echo $shirt->getBrand() ?></h3>
                <h4>DISPONIBILITA': <?php echo $shirt->getAmount() . " - " . $shirt->amountNumber() ?></h4>
                <h4>TAGLIA: <?php echo $shirt->getSize() . " - " . $shirt->chestSize() ?></h4>
                <h4>COLORE: <?php echo $shirt->getColor() ?></h4>
                <h4>MODELLO: <?php echo $shirt->getModel() ?></h4>
                <h4>PREZZO: <?php echo $shirt->getPrice() ?>€</h4>
            <?php } ?>
        </div>
        <hr>
        <div>
            <h1>JACKETS</h1>
            <?php foreach ($jackets as $jacket) { ?>
                <h2>NOME : <?php echo $jacket->getName() ?></h2>
                <h3>MARCA: <?php echo $jacket->getBrand() ?></h3>
                <h4>DISPONIBILITA': <?php echo $shirt->getAmount() . " - " . $shirt->amountNumber() ?></h4>
                <h4>TAGLIA: <?php echo $jacket->getSize() . " - " . $jacket->chestSize() ?></h4>
                <h4>COLORE: <?php echo $jacket->getColor() ?></h4>
                <h4>MODELLO: <?php echo $jacket->getModel() ?></h4>
                <h4>PREZZO: <?php echo $jacket->getPrice() ?>€</h4>
            <?php } ?>
        </div>
    </section>


</body>

</html>