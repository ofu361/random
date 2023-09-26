<?php

class character {

    public $type;
    public $health;
    public $insta_fol;
    public $power;

    function __construct($type, $health, $insta_fol, $power){
        $this->type=$type;
        $this->health=$health;
        $this->insta_fol=$insta_fol;
        $this->power=$power;
    }

    function eat(){
        echo "Ich esse ";
    }
    function sleep(){
        echo "Ich schlappe";
    }

    function fight($target) {
        while ($target->health > 0 && $this->health > 0) {
            $target->health -= $this->power;
            if ($target->health <= 0) {
                return "Der Kämpfer {$this->type} hat gewonnen!";
            }
            $this->health -= $target->power;
            if ($this->health <= 0) {
                return "Der Kämpfer {$target->type} hat gewonnen!";
            }
        }
        return "Es ist ein Unentschieden!";
    }

    function who(){
        echo "Ich bin {$this->type} und mein Stärke ist {$this->power}";
    }

}


$hero = new character("Held", 1000, 200, 300);
$villain = new character("Böse", 800, 300, 200);

echo "<br>";

// Rufen Sie die fight-Methode auf und zeigen Sie das Ergebnis an
echo $hero->fight($villain);

echo "<br>";

$hero->who();

echo "<br>";

$villain->who();


?>