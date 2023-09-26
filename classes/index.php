<?php

include_once 'classExam/Boese.php';
include_once 'classExam/Hero.php';

$hero = new Hero('Mohammed', 20, 10);
$enemy = new Boese("Ahmed", 10, 10, false);

echo $hero->fight($enemy);

?>
