<?php

require_once __DIR__ . "/portability.php";
class laptop extends computer{

    use portability;

    public function __construct(public brand $brand, public RAM $RAM, public CPU $CPU, public memory $memory, public display $display, public webcam $webcam, public battery $battery){
        parent::__construct($brand, $RAM, $CPU, $memory, $display);
        {
            $this->webcam=$webcam;
            $this->battery=$battery;
        }
    }
    public function getType()
    {
        return "Laptop";
    }

}

class webcam {

    public function __construct(public string $model, public string $resolution)
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

