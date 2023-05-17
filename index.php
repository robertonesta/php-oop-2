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

}
class laptop extends computer{
    
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
