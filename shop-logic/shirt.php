<?php
require_once __DIR__ . "/product.php";
require_once __DIR__ . "/trait.php";
?>


<?php
class tShirt extends product
{
    use common;

    public function __construct($color, $size, $name, $brand, $amount, $model, $price)
    {
        $this->color = $color;
        $this->size = $size;
        parent::__construct($name, $brand, $amount, $model, $price);
    }
}


$shirts = [
    new tShirt("Red", 104, "Nike casual", "Nike", 0, "Limited", 80),
    new tShirt("Black", 116, "Dark Nike", "Nike", 5, "Over-size", 120),
    new tShirt("Purple", 116, "Shock", "Gas", 20, "Slim-fit", 200),
];
