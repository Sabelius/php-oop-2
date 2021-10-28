<?php
require_once __DIR__ . "/product.php";
require_once __DIR__ . "/trait.php";
?>

<?php

class jacket extends product
{
    use common;

    public function __construct($color, $size, $name, $brand, $amount, $model, $price)
    {
        $this->color = $color;
        $this->size = $size;
        parent::__construct($name, $brand, $amount, $model, $price);
    }
}

$jackets = [
    new jacket("Blue", 104, "Old School", "Levis", 0, "Old-style Jeans", 80),
    new jacket("White", 124, "Cloud", "Nike", 5, "Wind Breaker", 120),
    new jacket("Green", 110, "Military", "CarrHart", 20, "Winter Collection", 300),
];
