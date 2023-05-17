<?php

class computer{

    public function __construct(public brand $brand, public RAM $RAM, public CPU $CPU, public memory $memory, public display $display)
    {
        $this->brand=$brand;
        $this->RAM=$RAM;
        $this->CPU=$CPU;
        $this->memory=$memory;
        $this->display=$display;
    }

}
class brand{

    public function __construct(public string $model, public float $codeNumber)
    {
        $this->model=$model;
        $this->codeNumber=$codeNumber;
    }
}
class RAM{

    public function __construct(public string $speed, public float $memory)
    {
        $this->speed=$speed;
        $this->memory=$memory;
    }
}
class CPU{

    public function __construct(public string $core, public float $frequency)
    {
        $this->core=$core;
        $this->frequency=$frequency;
    }
}
class memory{

    public function __construct(public string $capacity)
    {
        $this->capacity=$capacity;
    }
}

class display{

    public function __construct(public string $size, public string $resolution)
    {
        $this->size=$size;
        $this->resolution=$resolution;
    }
}


class desktop extends computer{

    public function __construct(public brand $brand, public RAM $RAM, public CPU $CPU, public memory $memory, public display $display, public mouse $mouse, public keyboard $keyboard){
        parent::__construct($brand, $RAM, $CPU, $memory, $display);
        {
            $this->mouse=$mouse;
            $this->keyboard=$keyboard;
        }
    }
}

class mouse {

    public function __construct(public string $model, public int $keys)
    {
        $this->model=$model;
        $this->keys=$keys;
    }

}
class keyboard {

    public function __construct(public string $layout, public string $model)
    {
        $this->layout=$layout;
        $this->model=$model;
    }
}
class laptop extends computer{

    public function __construct(public brand $brand, public RAM $RAM, public CPU $CPU, public memory $memory, public display $display, public webcam $webcam, public battery $battery){
        parent::__construct($brand, $RAM, $CPU, $memory, $display);
        {
            $this->webcam=$webcam;
            $this->battery=$battery;
        }
    }
}

class webcam {

    public function __construct(public string $model, public float $resolution)
    {
        $this->model=$model;
        $this->resolution=$resolution;
    }

}
class battery {

    public function __construct(public string $batteryLife)
    {
        $this->batteryLife=$batteryLife;
    }
}

$desktopAppleiMac = new desktop (new brand ("Apple iMac","MMQA2xx/A"), new RAM("1600MHz","32GB"), new CPU ("M1 8core", "3GHz"), new memory("512GB"), new display("27inch", "Display Retina 4,5K"), new mouse("magic mouse", 2), new keyboard("american", "Magic Keyboard con Touch ID"));
$laptopAppleMacbook = new laptop (new brand ("Apple Macbook", "MMQA2xx/A"), new RAM("1600MHz", "16GB"), new CPU("M2 Pro 10core", "3GHz"), new memory("256GB"), new display("14inch", "Display Liquid Retina XDR1"), new webcam("Videocamera FaceTime HD", "1080p"), new battery("18 hrs"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
</head>
<body>
    
</body>
</html>
