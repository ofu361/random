<?php

class robot {
    public $type;
    public $filling;
    public $codedBy;
    public $anythnigElse;

    function __construct($type, $filling, $codedBy, $anythnigElse) {
        $this->type = $type;
        $this->filling = $filling;
        $this->codedBy = $codedBy;
        $this->anythnigElse = $anythnigElse;
    }

    function answerQuestion($question) {
        switch($question) {
            case "Was bist du?":
                return $this->type;
            case "Wie geht's dir?":
                return $this->filling;
            case "Wer hat dich gecoded?":
                return $this->codedBy;
            default:
                return "Ich verstehe deine Frage nicht.";
        }
    }
}

$firstRebot = new robot("Roboter", "Mir geht es gut", "vom Dir", " ");
$reQuestion = "Was bist du?";
$answer = $firstRebot->answerQuestion($reQuestion);
echo "Frage ist: $reQuestion <br>";
echo "Antwort ist: $answer";

?>