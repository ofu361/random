<?php
        $isLoggedIn = false;
        include_once './classes/robot.class.php';
        $faheem = new Robot(
            "Faheem", "Press", "faheem.png", array("Wie kann ich Kochen",), array("Ich bringe es bei")
        );
        $sportsman = new Robot(
            "Faheem", "Press", "faheem.jpg", array("Wie kann ich Kochen",), array("Ich bringe es bei")
        );
        $programmer = new Robot(
            "Faheem", "Press", "faheem.jpg", array("Wie kann ich Kochen",), array("Ich bringe es bei")
        );
        $chemist = new Robot(
            "Faheem", "Press", "faheem.jpg", array("Wie kann ich Kochen",), array("Ich bringe es bei")
        );
        $robots = [$faheem, $sportsman, $programmer, $chemist];
        return $robots;
?>