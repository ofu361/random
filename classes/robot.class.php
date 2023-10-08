<?php

class Robot{
    public $name;
    public $spec;
    public $image;
    public $questions;
    public $answers;

    function __construct($name, $spec, $image, $questions, $answers)
    {
        $this->name=$name;
        $this->spec=$spec;
        $this->image=$image;
        $this->questions=$questions;
        $this->answers=$answers;
    }

    function __toString(){
        $result = "Ich bin Robot und mein Name ist {$this->name}";
        $result.= "Ich arbeite als {$this->spec}";
        
        $questionsString="";
        foreach($this->questions as $value){
            $questionsString.-$value."<br>";
        };
        
        $result .= $questionsString;
        return $result;
    }
}

?>