<?php


class television extends product
{
    protected $pixelResolution;
    protected $size;
    protected $audio;


    public function __construct($pixelResolution, $size, $audio, $name, $brand, $amount, $model, $price)
    {
        $this->price = $price;
        $this->pixelResolution = $pixelResolution;
        $this->size = $size;
        $this->audio = $audio;
        parent::__construct($name, $brand, $amount, $model, $price);
    }

    public function getResolution()
    {
        echo $this->pixelResolution;
    }

    public function getAudio()
    {
        echo $this->audio;
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

$televisions = [
    new television("1280x720", "65inch", "Dolby-surround", "Infinity-plus", "Samsung", 0, "x4560", 950),
    new television("3280x2160", "55inch", "DTS neural-x", "Extreme", "Sony", 3, "yt-3456", 1200),
    new television("1280x720", "65inch", "Dolby-surround", "Home Cinema", "Lg", 4, "bt0004c", 900),
];
