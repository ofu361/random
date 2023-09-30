<?php

include_once "Person.php";

class Hero extends Person {

    function fight(Boese $target)
    {
        if ($target->hasEscaped())
        {
            echo 'Eenmy has escaped';
            exit();
        }

        while (true)
        {
            $target->strength -= $this->power;
            if ($target->strength <= 0)
            {
                return "The hero {$this->name} won";
            }
            $this->power -= $target->power;
            if ($this->strength <= 0)
            {
                return "The enemy {$target->name} won";
            }
        }
    }
}

?>