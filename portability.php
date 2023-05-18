<?php

trait portability{

    public $carry_elements = [];

    public function get_carry_elements()
    {
        return $this->carry_elements;
    }

    public function get_carry_elements_as_string()
    {
        if (count($this->carry_elements) < 1){
            throw new Exception("It must contains at least 1 element");
        }   else {return "It can be carried by: " . implode(',', $this->carry_elements);}
    }

    public function set_carry_elements(string $element)
    {
        if(!in_array($element, $this->carry_elements)){
            array_push($this->carry_elements, $element);
        }
    }
}