<?php

class robot{
    
    public $charge_period;
    private $strength;
    public $type;
    public $usage;

    function __construct($charge_period, $strength, $type, $usage)
    {
        $this->charge_period = $charge_period;
        $this->strength = $strength;
        $this->type = $type;
        $this->usage =$usage;
    }

    function fight(){
        echo "I will destory your Life";
    }

    function helpful(){
        echo "I will help you {$this->usage}, whenever you want, becuase I am your {$this->type} and my power is {$this->strength}";
    }

    function ask($question){
        echo "You asked me {$this->type} If can answer your this question {$question}";
    }

    function setStrength($strength){
        $this->strength=$strength;
    }
    function getStrength(){
        $this->strength;
    }

}

$home_robot = new robot("19h", "6/10", "Home Assistent", "At Home mostly");
$home_robot->setStrength("7/10");
$home_robot->helpful();
echo "<br>";
$home_robot->ask("Können Sie auf Deusch anworten");



?>