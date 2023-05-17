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

    public function __construct(public string $model, public string $keys)
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

//$desktopAppleiMac = new desktop (new brand ("Apple iMac","MMQA2xx/A"), new RAM("1600MHz","32GB"), new CPU ("M1 8core", "3GHz"), new memory("512GB"), new display("27inch", "Display Retina 4,5K"), new mouse("magic mouse", "2"), new keyboard("american", "Magic Keyboard con Touch ID"));
//$laptopAppleMacbook = new laptop (new brand ("Apple Macbook", "MMQA2xx/A"), new RAM("1600MHz", "16GB"), new CPU("M2 Pro 10core", "3GHz"), new memory("256GB"), new display("14inch", "Display Liquid Retina XDR1"), new webcam("Videocamera FaceTime HD", "1080p"), new battery("18 hrs"));


$computers = [
    new desktop (new brand ("Apple iMac","MMQA2xx/A"), new RAM("1600MHz","32GB"), new CPU ("M1 8core", "3GHz"), new memory("512GB"), new display("27inch", "Display Retina 4,5K"), new mouse("magic mouse", "2"), new keyboard("american", "Magic Keyboard con Touch ID")),
    new laptop (new brand ("Apple Macbook", "MMQA2xx/A"), new RAM("1600MHz", "16GB"), new CPU("M2 Pro 10core", "3GHz"), new memory("256GB"), new display("14inch", "Display Liquid Retina XDR1"), new webcam("Videocamera FaceTime HD", "1080p"), new battery("18 hrs"))
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <title>OOP 2</title>
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="row">
                <?php foreach ($computers as $computer): ?>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center">
                                    <?php echo $computer->brand->model ?>
                                </h4>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span>
                                    <strong>RAM:</strong>
                                    <ul class="list-unstyled">
                                        <li><?php echo $computer->RAM->speed ?></li>
                                        <li><?php echo $computer->RAM->memory ?></li>
                                    </ul>
                                </span>
                                <span>
                                    <strong>CPU:</strong>
                                    <ul class="list-unstyled">
                                        <li><?php echo $computer->CPU->core ?></li>
                                        <li><?php echo $computer->CPU->frequency ?></li>
                                    </ul>
                                </span>                                
                                <span>
                                    <strong>Memory:</strong>
                                    <ul class="list-unstyled">
                                        <li><?php echo $computer->memory->capacity ?></li>
                                    </ul>
                                </span>
                                <span>
                                    <strong>Display:</strong>
                                    <ul class="list-unstyled">
                                        <li><?php echo $computer->display->size ?></li>
                                        <li><?php echo $computer->display->resolution ?></li>
                                    </ul>
                                </span>
                                <?php if($computer instanceof desktop): ?>
                                    <span>
                                    <strong>Mouse:</strong>
                                    <ul class="list-unstyled">
                                        <li><?php echo $computer->mouse->model ?></li>
                                        <li><?php echo $computer->mouse->keys ?></li>
                                    </ul>
                                    </span>
                                    <span>
                                    <strong>Keyboard:</strong>
                                    <ul class="list-unstyled">
                                        <li><?php echo $computer->keyboard->layout ?></li>
                                        <li><?php echo $computer->keyboard->model ?></li>
                                    </ul>
                                    </span>
                                <?php else : ?>
                                    <span>
                                    <strong>webcam:</strong>
                                    <ul class="list-unstyled">
                                        <li><?php echo $computer->webcam->model ?></li>
                                        <li><?php echo $computer->webcam->resolution ?></li>
                                    </ul>
                                    </span>
                                    <span>
                                    <strong>Battery Life:</strong>
                                    <ul class="list-unstyled">
                                        <li><?php echo $computer->battery->batteryLife ?></li>
                                    </ul>
                                    </span>
                                    <?php endif ?>                                    
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>

        </div>
    </div>
</body>
</html>
