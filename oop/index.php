<?php
    require_once 'animal.php';
    require_once 'frog.php';
    require_once 'ape.php';

    $sheep = new Animal("Shaun");

    echo "Name: " . $sheep->get_name() . "<br>";
    echo "legs: " . $sheep->get_legs() . "<br>";
    echo "cold blooded: " . $sheep->get_cold_blooded() . "<br><br>";

    $frog = new Frog("buduk");
    echo "Name: " . $frog->get_name() . "<br>";
    echo "legs: " . $frog->get_legs() . "<br>";
    echo "cold blooded: " . $frog->get_cold_blooded() . "<br>";
    echo "Jump: " . $frog->jump() . "<br><br>";

    $sungokong = new Ape("kera sakti");
    echo "Name: " . $sungokong->get_name() . "<br>";
    echo "legs: " . $sungokong->get_legs() . "<br>";
    echo "cold blooded: " . $sungokong->get_cold_blooded() . "<br>";
    echo "Yell: " . $sungokong->yell() . "<br>";
?>