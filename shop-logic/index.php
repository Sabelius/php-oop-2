<?php


class product
{
    protected $name;
    protected $brand;
    protected $amount;
    protected $model;

    protected function __construct($name, $brand, $amount, $model)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->amount = $amount;
        $this->type = $model;
    }

    public function amountNumber()
    {
        if ($this->amount <= 0) {
            return "Prodotto non disponibile";
        } else {
            return "Prodotto disponibile";
        }
    }
}

class television extends product
{
    protected $pixelResolution;
    protected $size;
    protected $audio;


    public function __construct($pixelResolution, $size, $audio, $name, $brand, $amount, $model)
    {
        $this->pixelResolution = $pixelResolution;
        $this->size = $size;
        $this->audio = $audio;
        $this->name = $name;
        $this->brand = $brand;
        $this->amount = $amount;
        $this->model = $model;
       
    }

    public function visualQuality()
    {
        if ($this->pixelResolution == "3280x2160") {
            return "TV 4K ULTRA HD";
        } elseif ($this->pixelResolution == "1280x720") {
            return "TV HD READY";
        }
    }
}


$tv = new television("3280x2160", "65inch", "Dolby-surround", "Infinity", "Samsung", 30, "x4-670");

var_dump($tv);
echo $tv->amountNumber();
echo $tv->visualQuality();

