<?php
include __DIR__ . "/portability.php";

class desktop extends computer{

    use portability;

    public function __construct(public brand $brand, public RAM $RAM, public CPU $CPU, public memory $memory, public display $display, public mouse $mouse, public keyboard $keyboard){
        parent::__construct($brand, $RAM, $CPU, $memory, $display);
        {
            $this->mouse=$mouse;
            $this->keyboard=$keyboard;
        }
    }
    public function getType()
    {
        return "Desktop";
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