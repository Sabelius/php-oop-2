<?php

class gameConsole extends product
{
    protected $padNumber;
    protected $memoryCapacity;

    public function __construct($padNumber, $memoryCapacity, $name, $brand, $amount, $model, $price)
    {
        $this->padNumber = $padNumber;
        $this->memoryCapacity = $memoryCapacity;
        parent::__construct($name, $brand, $amount, $model, $price);
    }

    public function partyGame()
    {
        if ($this->padNumber >= 2) {
            return "Party game Edition";
        } else {
            return "Standard Edition";
        }
    }

    public function power()
    {
        if ($this->memoryCapacity >= 1000) {
            return "More, more Game";
        } else {
            return "You probably need an Hard Disk";
        }
    }

    public function getMemory(){
        echo $this->memoryCapacity;
    }

    public function getPad(){
        echo $this->padNumber;
    }
}

$consoles = [
    new gameConsole(1, 1000 . "GB", "PS4", "PlayStation", 2, "plus", 250),
    new gameConsole(4, 2000 . "GB", "PS5", "PlayStation", 5, "standard", 500),
    new gameConsole(2, 500 . "GB", "X-box", "Microsoft", 0, "plus", 200),
];
