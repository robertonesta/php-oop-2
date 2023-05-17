<?php

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