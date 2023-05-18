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

public function getType()
    {
        return "Computer";
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

public function __construct(public string $speed, public string $memory)
{
    $this->speed=$speed;
    $this->memory=$memory;
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