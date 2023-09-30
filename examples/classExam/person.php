<?php

class Person{
    public $name;
    public $strength;
    public $power;

    function __construct($name, $strength, $power){
        $this->name=$name;
        $this->strength=$strength;
        $this->power=$power;
    }
}

?>