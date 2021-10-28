<?php


class product
{
    protected $name;
    protected $brand;
    protected $amount;
    protected $model;
    protected $price;

    protected function __construct($name, $brand, $amount, $model, $price)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->amount = $amount;
        $this->model = $model;
        $this->price = $price;
    }

    public function amountNumber()
    {
        if ($this->amount <= 0) {
            return "Prodotto non disponibile";
        } else {
            return "Prodotto disponibile";
        }
    }

    public function getName(){
        echo $this->name;
    }

    public function getBrand(){
      echo $this->brand;
    }

    public function getAmount(){
        echo $this->amount;
    }
    public function getModel(){
        echo $this->model;
    }
    public function getPrice(){
        echo $this->price;
    }
}

