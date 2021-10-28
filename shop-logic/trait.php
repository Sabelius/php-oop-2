<?php

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