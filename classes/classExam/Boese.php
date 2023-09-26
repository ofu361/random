<?php

include_once "person.php";

class Boese extends Person {

    private $has_escaped;

    function __construct($name, $strength, $power, $has_escaped)
    {
        parent::__construct($name, $strength, $power);
        $this->has_escaped = $has_escaped;
    }

    public function hasEscaped()
    {
        return $this->has_escaped;

    }
}


?>