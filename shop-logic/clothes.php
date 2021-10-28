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
    new tShirt("Red", 104, "Nike casual", "Nike", 0, "limited", 80),
    new tShirt("Black", 116, "Dark Nike", "Nike", 5, "over-size", 120),
    new tShirt("Purple", 116, "Shock", "Gas", 20, "slim-fit", 200),
];

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
    new jacket("White", 124, "Cloud", "Nike", 5, "Rainbow Jacket", 120),
    new jacket("Green", 110, "Military", "CarrHart", 20, "Winter Collection", 300),
];


trait common{
    protected $color;
    protected $size;


    public function chestSize()
    {
        if ($this->size == 104) {
            return "Taglia L";
        } elseif ($this->size == 116) {
            return "Taglia S";
        } elseif ($this->size == 124) {
            return "Taglia XL";
        } else {
            return "TAGLIA ESAURITA";
        }
    }

    public function getColor()
    {
        echo $this->color;
    }
    
    public function getSize()
    {
        echo $this->size;
    }


}