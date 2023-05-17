<?php

include __DIR__ . "/computer.php";
include __DIR__ . "/desktop.php";
include __DIR__ . "/laptop.php";


//$desktopAppleiMac = new desktop (new brand ("Apple iMac","MMQA2xx/A"), new RAM("1600MHz","32GB"), new CPU ("M1 8core", "3GHz"), new memory("512GB"), new display("27inch", "Display Retina 4,5K"), new mouse("magic mouse", "2"), new keyboard("american", "Magic Keyboard con Touch ID"));
//$laptopAppleMacbook = new laptop (new brand ("Apple Macbook", "MMQA2xx/A"), new RAM("1600MHz", "16GB"), new CPU("M2 Pro 10core", "3GHz"), new memory("256GB"), new display("14inch", "Display Liquid Retina XDR1"), new webcam("Videocamera FaceTime HD", "1080p"), new battery("18 hrs"));

include __DIR__ . "/array.php"

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
    <div class="header">
        <h1 class="text-center my-3">Computers</h1>
    </div>
    <div class="main">
        <div class="container">
            <div class="row g-3">
                <?php foreach ($computers as $computer): ?>
                    <div class="col-4">
                        <div class="card h-100 shadow">
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
