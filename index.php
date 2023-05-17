<?php

class computer{

    public function __construct(public brand $brand, public RAM $RAM, public CPU $CPU, public memory $memory)
    {
        $this->brand=$brand;
        $this->RAM=$RAM;
        $this->CPU=$CPU;
        $this->memory=$memory;
    }

}
class brand{

    public function __construct(public string $model, public string $codeNumber)
    {
        $this->model=$model;
        $this->codeNumber=$codeNumber;
    }
}
class RAM{

    public function __construct(public string $speed, public int $MHz)
    {
        $this->speed=$speed;
        $this->MHz=$MHz;
    }
}
class CPU{

    public function __construct(public string $core, public string $frequency)
    {
        $this->core=$core;
        $this->frequency=$frequency;
    }
}
class memory{

    public function __construct(public string $type, public string $capacity)
    {
        $this->type=$type;
        $this->capacity=$capacity;
    }
}

class desktop extends computer{

    public function __construct(public brand $brand, public RAM $RAM, public CPU $CPU, public memory $memory, public mouse $mouse, public keyboard $keyboard){
        parent::__construct($brand, $RAM, $CPU, $memory);
        {
            $this->mouse=$mouse;
            $this->keyboard=$keyboard;
        }
    }
}

class mouse {

    public function __construct(public string $brand, public int $keys)
    {
        $this->brand=$brand;
        $this->keys=$keys;
    }

}
class keyboard {

    public function __construct(public string $brand, public string $model)
    {
        $this->brand=$brand;
        $this->model=$model;
    }
}
class laptop extends computer{

    public function __construct(public brand $brand, public RAM $RAM, public CPU $CPU, public memory $memory, public webcam $webcam, public battery $battery){
        parent::__construct($brand, $RAM, $CPU, $memory);
        {
            $this->webcam=$webcam;
            $this->battery=$battery;
        }
    }
}

class webcam {

    public function __construct(public string $brand, public float $resolution)
    {
        $this->brand=$brand;
        $this->resolution=$resolution;
    }

}
class battery {

    public function __construct(public string $model, public string $volt, public string $Ampere, public string $watts)
    {
        $this->model=$model;
        $this->volt=$volt;
        $this->Ampere=$Ampere;
        $this->watts=$watts;
    }
}




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
