<?php

class computer{

    public function __construct(public model $model, public RAM $RAM, public CPU $CPU, public memory $memory)
    {
        $this->model= $model;
        $this->RAM= $RAM;
        $this->CPU= $CPU;
        $this->memory= $memory;
    }

}
class model{

    public function __construct()
    {
        
    }
}
class RAM{

    public function __construct()
    {
        
    }
}
class CPU{

    public function __construct()
    {
        
    }
}
class memory{

    public function __construct()
    {
        
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
